<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
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
                if ($c === $type):
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
        $query_string_explode = explode('_' , $b);
        $current_dir = getcwd();
        $back_dir = $current_dir;
        if (opendir($current_dir . '\\gallery') == false):
            mkdir($current_dir . '\\gallery');
        endif;
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        array_shift($query_string_explode);
        $delete_file = '';
        if ( (array_search('reset',$query_string_explode)) == false && (array_search('all',$query_string_explode)) == false ):
            foreach ($query_string_explode as $element):
                $count = 1;
                $int_element = (int)$element;
                $open_dir = opendir($current_dir);
                    while (($item_dir = readdir($open_dir)) !== false):
                        if (is_file($item_dir) == 1):
                            if ($count == $int_element):
                                $delete_file[] = $item_dir;
                            endif;
                        $count++;
                        endif;
                    endwhile;
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
        $query_string = $_GET;
        if (isset($query_string['quantity'])):
            if ($query_string['quantity'] == 'over'):
                $over = 'Кількість одночасно завантажуваних файлів не може перевищувати - 19 !';
            else:
                if ($_FILES ['file']!== 0):
                    $arr_tmp = $_FILES ['file'];
                    $arr_in_tmp = $arr_tmp['name'];
                    $count_arr_tmp = count($arr_in_tmp);
                    $over_add_files = '';
                    if ($count_arr_tmp <= 19):
                        copy_file ($_FILES ['file']);
                    else:
                        $over_add_files =  'over';
                    endif;
                endif;
            endif;
        endif;

        if (isset($query_string['count'])):
            $get_query_string_count = $query_string['count'];
            $query_string_explode_all = explode('_' , $get_query_string_count);
            if (array_search('all',$query_string_explode_all) == true):
                $checked = 'all';
            endif;

            $query_string_explode_ext = explode('_' , $get_query_string_count);
            if (array_search('delete',$query_string_explode_ext) == true):
                delete_files($query_string['count']);
                header("location:/index.php?page=gallery&count=");
                die;
            endif;
        endif;

        if ($_SERVER ['REQUEST_METHOD'] == "POST"):
            $a = '';
            foreach ($_POST as $key => $value):
                $a = $a . $key;
            endforeach;
            header("location:/index.php?page=gallery&count={$a}&quantity={$over_add_files}");
            die;
        endif;

?>
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
                $checkbox = '_' . $count;
                $current_file = "\\gallery\\{$item_dir}";
?>

            <a href= "<?= $current_file; ?>" target='_blank'><img src = '<?= $current_file; ?>' width="150" height="120"></a>
<?php
                if ($checked === "all"):
                    echo "<input type=\"checkbox\" form=\"gallery\" name=\"$checkbox\" checked >";
                else:
                    echo "<input type=\"checkbox\" form=\"gallery\" name=\"$checkbox\">";
                endif;
                $count++;
            endif;
        endwhile;
?>
        <div >
            <hr>
            <button formmethod="post" name="_delete_"">Видалити вибрані файли</button>
            <button formmethod="post" name ="_all_">Вибрати усі файли</button>
            <button formmethod="post" name="_reset_"">Скинути вибір</button>
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