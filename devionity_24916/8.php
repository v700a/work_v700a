<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<?php
    echo 'Задано масив:';
    echo '<br><br>';
    $massiv_int = array(1,3,17,9,45,98,90,27,134,120);
    echo '<pre>';
    print_r($massiv_int);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран числа які діляться на 3...';
    echo '<br><br>';
    echo 'Це наступні числа: ';

    foreach ($massiv_int as $key => $chyslo) {
        if ($chyslo % 3 == 0)
            echo "{$chyslo} ";

    }
?>
</b>
</body>
</html>