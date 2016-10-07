<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="3.php" method="post">
        Введiть обмеження довжини слів. Слова довші за введене обмеження були видалені з тексту:<br>
        <br><br>
        <input type="number" name="n1" placeholder="Введiть число" autofocus>
        <br><br>
    </form>

<?php

    function getCommonWords($a, $b)
    {
    }
    $file_cont = file_get_contents('test.txt');
    $file_cont_utf8 = iconv("","UTF-8",$file_cont);
    echo 'Отримано наступний вміст файлу:';
    echo '<br><br>';
    echo $file_cont_utf8;
    echo '<br><br>';
    echo '<br><br>';

    if (@$_POST ['n1'] !== null){
        $n_1 = $_POST ['n1'];
        echo "Введене обмеження - {$n_1} символів.";
        $file_cont_explode = explode(' ', $file_cont);
        $new_file_cont = null;
            foreach ($file_cont_explode as $value):
                if (strlen($value) <= $n_1):
                    $new_file_cont [] = $value;
                endif;
            endforeach;
        if ($new_file_cont !== null):
            $new_file_cont_for_write = implode(" ", $new_file_cont);
            echo '<br><br>';
            $new_file_cont_utf8_for_write = iconv("","UTF-8",$new_file_cont_for_write);
            echo $new_file_cont_utf8_for_write;
        endif;
    $file_open = fopen('test.txt', 'w');
    fwrite($file_open, $new_file_cont_for_write);
    fclose($file_open);
    echo '<br><br>';
    echo 'Файл записано';
    }
?>
</b>
</body>
</html>