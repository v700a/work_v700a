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
    function copy_file ($b)
    {
        $file_upp = $b;
        $file_tmp_path = $file_upp['tmp_name'];
        $file_old_name = $file_upp ['name'];
        $current_dir = getcwd();
        if (@opendir('gallery') == false):
            mkdir('gallery');
        endif;
        $target_path = ($current_dir . '\gallery');
        $file_name_arr = explode('.', $file_old_name);
        $file_extention = '.' . end($file_name_arr);
        $file_name_new = uniqid() . $file_extention;
        $copy_to = $target_path . '\\' . $file_name_new;
        if ($file_tmp_path !== ''):
            copy($file_tmp_path, $copy_to);
        endif;
    }

function delete_files($b)
{
    $query_string_explode = explode('_' , $b);
    print_r($query_string_explode);
    $current_dir = getcwd();
    $back_dir = $current_dir;
    echo $current_dir;
    chdir($current_dir . '\\gallery');
    $current_dir = getcwd();
    echo $current_dir;
    array_shift($query_string_explode);
    $delete_file = '';
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
    foreach ($delete_file as $file):
        unlink($file);
    endforeach;
    chdir($back_dir);


 }

    $query_string = $_SERVER ['QUERY_STRING'];
    if ($query_string !== ''):
    delete_files($query_string);
        header("location:/functions_forms_tasks/6.php");
        die;
    endif;

    if ((bool)$_FILES == false):
        $_FILES ['file'] = 0;
    endif;

    if ($_FILES ['file']!== 0):
        copy_file ($_FILES ['file']);
    endif;

    if ($_SERVER ['REQUEST_METHOD'] == "POST"):
        $a = '';
        foreach ($_POST as $key => $value):
            $a = $a . $key;
        endforeach;
        header("location:/functions_forms_tasks/6.php?{$a}");
        die;
    endif;

    ?>
    <br><br>
    <div style="margin-top: 10px">
        Галерея
        <p>

        </p>
    </div>

    <form enctype="multipart/form-data" action="6.php" method="post" id = "gallery">

        <input name="file" type="file" >
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
            <input type='checkbox' form="gallery" name="<?php echo $checkbox; ?>">


<?php
                $count++;
            endif;
        endwhile;

?>
        <div style="margin-bottom: 200px">
        </div>
        <div >
            <hr>
            <button formaction="6.php" formmethod="post">Видалити файли</button>
        </div>

    </form>

</b>
</body>
</html>