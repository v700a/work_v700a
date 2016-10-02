<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo '<br><br>';
    echo 'Вивести піраміду з 20 рядків...';
    echo '<br><br>';
    echo '</b>';
    $a = 1;

        for ($i = 1; $i < 20; $i++) :
            for ($j = 0; $j < $a; $j = ($j + 1) ) :
                echo "x ";
            endfor;
        $a = $a + 1;
        echo '<br>';
        endfor;
?>
</body>
</html>