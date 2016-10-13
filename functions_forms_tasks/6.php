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
/*    function view_img()
    {
        $current_dir = getcwd();
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        $open_dir = opendir($current_dir);
        $count = 1;
        while (($item_dir = readdir($open_dir)) !== false):
            if (is_file($item_dir) == 1):
                $checkbox = 'check' . $count;
                $current_file = "/functions_forms_tasks/gallery/{$item_dir}";
                echo '<div style="float: left">';
                $echo_file = "<a href= $current_file target='_blank'><img src = $current_file width=\"150\" height=\"120\"/></a>";
                echo "<input type='checkbox' name='$checkbox'>";
                echo $echo_file;
                echo '</div>';
                $count++;
            endif;
        endwhile;
        echo '<button formaction="6.php" formmethod="post">255889</button>';

    }

    function view_img()
    {
    $current_dir = getcwd();
    chdir($current_dir . '\\gallery');
    $current_dir = getcwd();
    $open_dir = opendir($current_dir);
    $count = 1;
    while (($item_dir = readdir($open_dir)) !== false):
        if (is_file($item_dir) == 1):
            $checkbox = 'check' . $count;
            $current_file = "/functions_forms_tasks/gallery/{$item_dir}";

            ?>

            <div style="float: left">
                <a href= "<?php echo $current_file; ?>" target='_blank'><img src = '<?php echo $current_file; ?>' width="150" height="120"></a>
                <input type='checkbox' name='<?php echo $checkbox; ?>'>
            </div>

            <?php
            $count++;
        endif;
    endwhile;

    ?>
    <button formaction="6.php" formmethod="post">255889</button>

    }
*/
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
//                echo '<br><br>';
//                var_dump($c);
//                var_dump($type);
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
             //    var_dump($value_type);
             //    echo '<br><br>';
                    next($b['type']);
    //                $value_error = current($b['error']);
    //                next($b['error']);
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
        //print_r($query_string_explode);
        $current_dir = getcwd();
        $back_dir = $current_dir;
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        array_shift($query_string_explode);
        $delete_file = '';
        if ( array_search('reset',$query_string_explode) == false ):
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
//    echo '<pre>';
//    print_r($_SERVER);
//    print_r($_POST);
//    print_r($_FILES);
//    echo '</pre>';
    $checked = 0;
    $query_string = $_SERVER ['QUERY_STRING'];
    $checked = $query_string;
//    echo $checked, ' - query_string';
//        echo '<br><br>';
    if ($query_string == 'sss'):
        echo 'Кількість одночасно завантажуваних файлів не може перевищувати - 15 !';
    else:
        if ($query_string !== ''):
            delete_files($query_string);
            $query_string_explode_ext = explode('_' , $query_string);
            if (array_search('delete',$query_string_explode_ext) == true):
            header("location:/functions_forms_tasks/6.php");
            die;
//            echo 'sh;siubn;s';
            endif;
        endif;
    endif;
//    echo '<pre>';
//    print_r($_FILES['file']);
//    echo '</pre>';
    if ((bool)$_FILES == false):
        $_FILES ['file'] = 0;
    endif;

    if ($_FILES ['file']!== 0):
        $arr_tmp = $_FILES ['file'];
//        echo '<br><br>';
        $arr_in_tmp = $arr_tmp['name'];
        $count_arr_tmp = count($arr_in_tmp);
        $over_add_files = '';
        if ($count_arr_tmp <= 15):
            copy_file ($_FILES ['file']);
        else:
            $over_add_files =  'sss';
            echo $over_add_files;
        endif;
    endif;

    if ($_SERVER ['REQUEST_METHOD'] == "POST"):
        $a = '';
        foreach ($_POST as $key => $value):
            if ($key === 'reset'):
            $a = $a . '_' . $key;
            else:
                $a = $a . '_' . $key;
            endif;
        endforeach;
//        echo '<br><br>';
//        var_dump($_POST);
//        $checked = array_search('all',$_POST);
//        $checked2 = array_search('delete',$_POST);
//        $checked3 = array_search('reset',$_POST);
//        echo '<br><br>';

//        echo $checked, ' - checked';
//        echo $checked2, ' - checked';
//        echo $checked3, ' - checked';
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
        if ($checked === "_all"):
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