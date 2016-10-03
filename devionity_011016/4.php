<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    function print_array_tag_pre (array $a)
    {
        echo '<pre>';
        print_r ($a);
        echo '</pre>';
    }

    function add_end_array_amount_key (array &$b)
    {
        $b ['new'] = count($b);
    }
    echo "Задано масив:";
    echo '<br><br>';
    $krayny = array('Київ'=>'Україна', 'Варшава'=>'Польща', 'Бухарест'=>'Румунія', 'Прага'=>'Чехія',
        'Братислава'=>'Словаччина','Будапешт'=>'Угорщина', 'Мінськ'=>'Білорусія');
    print_array_tag_pre($krayny);
    echo '<br><br>';
    $c = count($krayny);
    echo "Кількість елементів масиву - {$c}";
    echo '<br><br>';
    echo "Доповнений масив:";
    echo '<br><br>';
    add_end_array_amount_key($krayny);
    print_array_tag_pre($krayny);

?>
</body>
</html>
