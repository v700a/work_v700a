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
    $massyv = array('Неділя','Понеділок','Вівторок','Середа','Четвер','П\'ятниця','Субота');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран усі дні, а поточний день - курсивом...';
    echo '<br><br>';
    echo '</b>';
    $day = date('w');

    foreach ($massyv as $key => $element) :
        if ($key == $day) {
            echo "<br><b><i> $element </i></b>";
        }
        else {
            echo "<br> $element";
        }
    endforeach;
?>
</body>
</html>