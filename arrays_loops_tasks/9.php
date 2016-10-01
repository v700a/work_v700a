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
    echo 'Вивести на екран у стовпчик числа від 1 до 100...';
    echo '<br><br>';
    $a = 1;
    while ($a <= 100) :

        echo "{$a}<br>";
        $a = $a + 1;

    endwhile;
    ?>
</b>
</body>
</html