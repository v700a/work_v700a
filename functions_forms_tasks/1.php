<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="1.php" method="get">
        Введiть будь-який текст для знаходження однакових слів:<br>
        <br><br>
        <textarea name="ar1" cols="130" rows="10" placeholder="Текст 1" autofocus></textarea>
        <br><br>
        <textarea name="ar2" cols="130" rows="10" placeholder="Текст 2"></textarea>
        <br><br>
        <input type="submit"  >
        <br><br>
    </form>

    <?php

    function getCommonWords($a, $b)
    {
        global $n;
        $n = 1;
        $sect_arr1 = explode(' ', $a);
        $sect_arr2 = explode(' ', $b);
        foreach ($sect_arr1 as $value1):
            foreach ($sect_arr2 as $value2):
                if ($value1 == $value2):
                    echo $value1, ' ';
                    $n = 0;
                endif;
            endforeach;
        endforeach;
    }

    if (!$_GET){
        $_GET = 0;
    }
    $arr_1 = $_GET ['ar1'];
    $arr_2 = $_GET ['ar2'];
    echo '<br><br>';
    echo "Текст 1: ",$arr_1;
    echo '<br><br>';
    echo "Текст 1: ",$arr_2;
    echo '<br><br>';
    echo 'Oднакові слова: ';
    getCommonWords($arr_1, $arr_2);
?>
</b>
</body>
</html>