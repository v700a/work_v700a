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
    echo 'Вивести на екран у стовпчик парні числа від 0 до 100...';
    echo '<br><br>';
    $a = 0;

    while ($a <= 100) :
        if (($a % 2) == 0) :
            echo "{$a}<br>";
        endif;
        $a = $a + 1;
    endwhile;
?>
</b>
</body>
</html>