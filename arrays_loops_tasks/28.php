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
    echo 'Вивести на екран таблицю множення...';
    echo '<br><br>';
    echo '<br><br>';
    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    $a = 0;
    echo '<table cellpadding="10" cellspacing="5" border="1px">';
    echo '<tr>';
    for ($i = 2; $i <= 5; $i++) :
        $f = rand(0,6);
        echo "<td bgcolor = $colors[$f]>";
        for ($j = 2; $j <= 9; $j++) :
            $a = $i * $j;
            echo "{$i} x {$j} = {$a}<br>";
        endfor;
        echo '</td>';
    endfor;
    echo '</tr>';
    echo '</table>';

    echo '<br><br>';

    $a = 0;
    echo '<table cellpadding="10" cellspacing="5" border="1px">';
    echo '<tr>';
    for ($i = 6; $i <= 9; $i++) :
        $f = rand(0,6);
        echo "<td bgcolor = $colors[$f]>";
        for ($j = 2; $j <= 9; $j++) :
            $a = $i * $j;
            echo "{$i} x {$j} = {$a}<br>";
        endfor;
        echo '</td>';
    endfor;
    echo '</tr>';
    echo '</table>';

    ?>
</b>
</body>
</html