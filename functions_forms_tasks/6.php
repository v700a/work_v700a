<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<?php
//require 'out.php';

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
        'image/x-tiff'
        );
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

//    echo '<pre>';
//    print_r($_SERVER);
//    print_r($_POST);
//    print_r($_FILES);
//    echo '</pre>';
//        echo '<br><br>';



    $checked = 0;
    $query_string = $_SERVER ['QUERY_STRING'];
    $query_string_explode_all = explode('_' , $query_string);
    if (array_search('all',$query_string_explode_all) == true):
        $checked = 'all';
    endif;

    if ($query_string == 'sss'):
        echo 'Кількість одночасно завантажуваних файлів не може перевищувати - 19 !';
    else:
        if ($query_string !== ''):
            delete_files($query_string);
            $query_string_explode_ext = explode('_' , $query_string);
            if (array_search('delete',$query_string_explode_ext) == true):
                header("location:/functions_forms_tasks/6.php");
                die;
            endif;
        endif;
    endif;

    if ((bool)$_FILES == false):
        $_FILES ['file'] = 0;
    endif;

    if ($_FILES ['file']!== 0):
        $arr_tmp = $_FILES ['file'];
        $arr_in_tmp = $arr_tmp['name'];
        $count_arr_tmp = count($arr_in_tmp);
        $over_add_files = '';
        if ($count_arr_tmp <= 19):
            copy_file ($_FILES ['file']);
        else:
            $over_add_files =  'sss';
        endif;
    endif;

    if ($_SERVER ['REQUEST_METHOD'] == "POST"):
        $a = '';
        foreach ($_POST as $key => $value):
                $a = $a . '_' . $key;
        endforeach;
      header("location:/functions_forms_tasks/6.php?{$a}{$over_add_files}");
      die;
    endif;

?>
    <div style="margin-top: 10px">
        <h2>Галерея</h2>
        <p>
!Увага! При виборі декількох файлів, файли розміром більше 2 Мб та файли відмінні від зображень завантажені не будуть.
        </p>
    </div>

    <form enctype="multipart/form-data" action="6.php" method="post" id = "gallery">
        <input name="file[]" type="file" multiple >
        <input type="submit">
        <hr>

<?php
        $current_dir = getcwd();
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        $open_dir = opendir($current_dir);
        $count = 1;
        while (($item_dir = readdir($open_dir)) !== false):
            if (is_file($item_dir) == 1):
                $checkbox = '.' . $count;
                $current_file = "/functions_forms_tasks/gallery/{$item_dir}";
?>

            <a href= "<?php echo $current_file; ?>" target='_blank'><img src = '<?php echo $current_file; ?>' width="150" height="120"></a>
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
        </div>
        <div >
            <hr>
            <button formaction="6.php" formmethod="post" name="delete" value="delete">Видалити вибрані файли</button>
            <button formaction="6.php" formmethod="post" name ="all" value="all">Вибрати усі файли</button>
            <button formaction="6.php" formmethod="post" name="reset" value="reset">Скинути вибір</button>
        </div>
    </form>
</b>
</body>
</html>