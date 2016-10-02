<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo '<b>';
    echo 'Задано масив:';
    echo '<br><br>';
    $massyv = array('Понеділок','Вівторок','Середа','Четвер','П\'ятниця','Субота','Неділя');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран усі дні, а вихідні - курсивом...';
    echo '<br><br>';
    echo '</b>';

    foreach ($massyv as $key => $element) :
        if (($key < 5)) {
            echo "<br> $element";
        }
        else {
            echo "<br><b><i> $element </i></b>";
        }
    endforeach;
?>
</body>
</html>