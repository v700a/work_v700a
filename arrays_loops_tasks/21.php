<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo '<br><br>';
    echo 'Вивести піраміду з 9 рядків...';
    echo '<br><br>';
    echo '</b>';
    $a = 1;
    $b = 1;
    for ($i = 1; $i <= 9; $i++) :
        for ($j = 0; $j < $a; $j = ($j + 1) ) :
            echo "$b ";
        endfor;
    $b = $b + 1;
    $a = $a + 1;
    echo '<br>';
    endfor;
?>
</body>
</html>