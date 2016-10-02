<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<?php
    echo '<br><br>';
    echo 'Вивести на екран у стовпчик числа від 11 до 33...';
    echo '<br><br>';
    $a = 11;

    while ($a <= 33) :
        echo "{$a}<br>";
        $a = $a + 1;
    endwhile;
?>
</b>
</body>
</html>