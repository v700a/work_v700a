<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo '<br><br>';
    echo 'Вивести піраміду з 5 рядків, починаючи з хх...';
    echo '<br><br>';
    echo '</b>';
    $a = 2;
    $i = 1;
    $j = 0;

    while ($i <= 5) {
        while ($j < $a) {
            echo "x";
            $j = $j + 1;
        }
    $j = 0;
    $a = $a + 1;
    $i = $i + 1;
    echo '<br>';
    }
?>
</body>
</html>