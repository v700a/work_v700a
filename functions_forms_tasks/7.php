<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="7.php" method="post">
        Введiть :<br>
        <br><br>
        <textarea name="ar1" cols="130" rows="10" placeholder="Текст 1" autofocus></textarea>
        <br><br>
        <input type="submit">
        <br><br>
    </form>

    <?php

    function read_write_file($a)
    {
        $file_content = file_get_contents('comment_file.txt');

        $open_file = fopen('comment_file.txt', 'w');
        //$file_size = filesize('comment_file.txt');
        echo 'a', $a;
        echo '<br><br>';
        echo 'FS',$file_content;
        $s = "{$file_content}.PHP_EQL.{$a}";
        echo '<br><br>';
        //$read_file = fread($open_file, $file_size);
        echo 'RF',$s;
        fwrite($open_file, $s);
        fclose($open_file);
    }
    if (!$_POST){
        $_POST = 0;
    }

    if ($_POST ['ar1'] !== null):
    $arr_1 = $_POST ['ar1'];
    read_write_file($arr_1);
    endif;
    ?>
</b>
</body>
</html>