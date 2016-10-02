<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Завдання</title>
</head>
<body>
<?php
    $krayny_7_key_str = array('Київ'=>'Україна', 'Варшава'=>'Польща', 'Бухарест'=>'Румунія', 'Прага'=>'Чехія',
        'Братислава'=>'Словаччина','Будапешт'=>'Угорщина', 'Мінськ'=>'Білорусія');
    echo '<br>';
    print_r($krayny_7_key_str);
    echo '<br>';
    echo '<pre>';
    print_r($krayny_7_key_str);
    echo '</pre>';
    echo '<br>';
    echo $krayny_7_key_str['Прага'];
    echo '<br>';
?>
</body>
</html>