<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="7.php" method="post">

    <?php

    function read_write_file($a)
    {
        $string_array = serialize($a);
        $file_content = file_get_contents('comment_file.txt');
        $file_content_new = $file_content . $string_array . 'PHP_EQL';
        file_put_contents('comment_file.txt',$file_content_new);
    }
//****************************************FUNCTIONS**************************************************************


    if (!$_POST){
        $_POST = 0;
    }

    if ($_POST ['ar1'] !== null):
        $arr_1 = $_POST ['ar1'];
        read_write_file($arr_1);
    endif;
    $query_string = $_SERVER ['QUERY_STRING'];
echo (int)$query_string;
    $read_file_content = file_get_contents('comment_file.txt');
    //echo $read_file_content;
    $explode_string = explode('PHP_EQL', $read_file_content);

//    echo '<pre>';
//    print_r($explode_string);
//    echo '</pre>';
    $item_unserialise = '';
    $name_button_delete = 0;
    $value_button_delete = 0;
    foreach ($explode_string as $item):
        if ($item !== ''):
            if ($item !== 's:0:"";'):
                $name_button_delete++;
                $value_button_delete++;
                $item_unserialise = unserialize($item);
                echo "<p> {$item_unserialise} </p><br><br>";
                echo "<button name=\"{$name_button_delete}\" formaction='7.php' formmethod='get' value=\"{$value_button_delete}\">Delete</button>";
            endif;
        endif;
    endforeach;

    if ($_SERVER ['REQUEST_METHOD'] == "POST"):
        header("location:/functions_forms_tasks/7.php?");
        die;
    endif;
    echo '<pre>';
    //    print_r($_SERVER);
//    print_r($_POST);
    print_r($_GET);
    echo '</pre>';


    ?>
    <hr>
        Введiть :<br>
        <br><br>
        <textarea name="ar1" cols="130" rows="10" placeholder="Текст 1" autofocus></textarea>
        <br><br>
        <input type="submit">
        <br><br>
    </form>





</b>
</body>
</html>