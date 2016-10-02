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
    $massyv = array('green'=>'зелениий', 'red'=>'червоний','blue'=>'блакитний');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Розділити заданий масив на два масиви en i ua:';
    echo '<br><br>';
    $en = array();
    $ua = array();

    foreach ($massyv as $key => $element) :
        $en [] = $key;
        $ua [] = $element;
    endforeach;

    echo '<pre>';
    echo 'Масив en:';
    echo '<br><br>';
    print_r($en);
    echo '<br><br>';
    echo 'Масив ua:';
    echo '<br><br>';
    print_r($ua);
    echo '</pre>';
?>
</b>
</body>
</html>