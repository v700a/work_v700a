<?php

function file_types($c)
    {
        $count = false;
        $array_types = array(
            'image/x-jg',
            'image/bmp',
            'image/x-windows-bmp',
            'image/vnd.dwg',
            'image/x-dwg',
            'image/gif',
            'image/x-icon',
            'image/jpeg',
            'image/pjpeg',
            'image/x-jps',
            'image/x-pict',
            'image/x-pcx',
            'image/pict',
            'image/x-xpixmap',
            'image/png',
            'image/x-quicktime',
            'image/tiff',
            'image/x-tiff',
            'application/octet-stream'
            );
    //        $_SESSION['types'] = $c;
                foreach ($array_types as $type):
                    if ($c == $type):
                        return $count = true;
                    endif;
                endforeach;
        return $count;
    }

function copy_file (array $b)
    {
        $current_dir = getcwd();
        if (@opendir('gallery') == false):
            mkdir('gallery');
        endif;
        $target_path = ($current_dir . '\gallery');
            $v = current($b['name']);
            if ($v !== ''):
                foreach ($b['name'] as $value):
                    $file_old_name = $value;
                    $value_tmp = current($b['tmp_name']);
                    next($b['tmp_name']);
                    $value_type = current($b['type']);
                    next($b['type']);
                    $value_size = current($b['size']);
                    next($b['size']);
                    $file_tmp_path = $value_tmp;
                    $file_name_arr = explode('.', $file_old_name);
                    $file_extention = '.' . end($file_name_arr);
                    $file_name_new = uniqid() . $file_extention;
                    $copy_to = $target_path . '\\' . $file_name_new;
                        if (file_types($value_type) == true):
                            if ($value_size < 2000000):
                                copy($file_tmp_path, $copy_to);
                            endif;
                        endif;
                endforeach;
            endif;
    }


function delete_files($b)
    {
        $current_dir = getcwd();
        $back_dir = $current_dir;
        if (opendir($current_dir . '\\gallery') == false):
            mkdir($current_dir . '\\gallery');
        endif;
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        $delete_file = '';
        if ( !array_search('reset',$b) && !array_search('all',$b)):
            foreach ($b as $key => $element):
                $count = 1;
                $open_dir = opendir($current_dir);
                if ($key !== 'delete'):
                    while (($item_dir = readdir($open_dir)) !== false):
                        if (is_file($item_dir) == 1):
                            if ($count == $key):
                                $delete_file[] = $item_dir;
                            endif;
                            $count++;
                        endif;
                    endwhile;
                endif;
            endforeach;
            if ($delete_file !== ''):
                foreach ($delete_file as $file):
                    unlink($file);
                endforeach;
            endif;
        endif;
        chdir($back_dir);
     }

//*******************************************************FUNCTIONS***************************************************


if (isset($_COOKIE)):
    if (isset($_COOKIE['username_in'])):
        if (!isset($_FILES['file'])):
            $_FILES ['file'] = 0;
        endif;
        $checked = 0;
        $over = '';
    if (isset($_SERVER['CONTENT_LENGTH'])):
        $all_size = $_SERVER['CONTENT_LENGTH'];
        if ($all_size >= 8100000):
            $_SESSION['over_size'] = 1;
            header("location:/index.php?page=gallery");
            die;
        endif;
    endif;

    if (isset($_SESSION['over_size']) || isset($_SESSION['over_quantity'])):
        if (isset($_SESSION['over_quantity'])):
            $over = 'Кількість одночасно завантажуваних файлів не може перевищувати - 19 !';
            unset($_SESSION['over_quantity']);
        elseif (isset($_SESSION['over_size'])):
            $over = 'Об\'єм одночасно завантажуваних файлів не може перевищувати - 8,1 Мб !';
            unset($_SESSION['over_size']);
        endif;
    else:
        if ($_FILES ['file']!== 0):
            $arr_tmp = $_FILES ['file'];
            $arr_in_tmp = $arr_tmp['name'];
            $count_arr_tmp = count($arr_in_tmp);
            $over_add_files = '';
            $all_size = 0;
            if ($count_arr_tmp > 19):
                $_SESSION['over_quantity'] = 1;
                header("location:/index.php?page=gallery");
                die;
            endif;
            copy_file ($_FILES ['file']);
        endif;
    endif;
    if (array_search('all',$_POST)):
        $_SESSION['all'] = 1;
    endif;
    if (array_search('delete',$_POST)):
        delete_files($_POST);
        header("location:/index.php?page=gallery");
        die;
    endif;
        if ($_SERVER ['REQUEST_METHOD'] == "POST"):
            header("location:/index.php?page=gallery");
            die;
        endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div style="margin-top: 10px">
        <h2>Галерея</h2>
        <p>
        !Увага! Файли розміром більше 2 Мб та файли відмінні від зображень завантажені не будуть.
        </p>
        <b><?= $over ?></b>
    </div>

    <form enctype="multipart/form-data" method="post" id = "gallery">
        <br>
        <input name="file[]" type="file" multiple >
        <br>
        <button> "Додати до галереї" </button>
        <hr>

<?php

        $current_dir = getcwd();
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        $open_dir = opendir($current_dir);
        $count = 1;
        while (($item_dir = readdir($open_dir)) !== false):
            if (is_file($item_dir) == 1):
                $checkbox = $count;
                $current_file = "\\gallery\\{$item_dir}";
?>

            <a href= "<?= $current_file; ?>" target='_blank'><img src = '<?= $current_file; ?>' width="150" height="120"></a>
<?php
                if (isset($_SESSION['all'])):
                    echo "<input type=\"checkbox\" form=\"gallery\" name=\"$checkbox\" checked >";
                else:
                    echo "<input type=\"checkbox\" form=\"gallery\" name=\"$checkbox\">";
                endif;
                $count++;
            endif;
        endwhile;
        if (isset($_SESSION['all'])):
            unset($_SESSION['all']);
        endif;
?>
        <div >
            <hr>
            <button formmethod="post" name="delete" value="delete">Видалити вибрані файли</button>
            <button formmethod="post" name ="all" value="all">Вибрати усі файли</button>
            <button formmethod="post" name="reset" value="reset">Скинути вибір</button>
        </div>
    </form>
<?php
    else:
        echo '<h2>Ви не авторизовані! Доступ до цієї сторінки заборонено!</h2>';
    endif;
endif;

?>

</body>
</html>