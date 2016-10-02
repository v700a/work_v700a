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
    $massyv = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';

    foreach ($massyv as $key => $element) :
        echo "<br>{$key} - зарплата {$element} доларів";
    endforeach;

    echo '<br><br>';
    echo 'Будь як Петя!';
?>
</b>
</body>
</html>