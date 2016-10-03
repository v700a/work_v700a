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
    $krayny = array('Київ'=>'Україна', 'Варшава'=>'Польща', 'Бухарест'=>'Румунія', 'Прага'=>'Чехія',
        'Братислава'=>'Словаччина','Будапешт'=>'Угорщина', 'Мінськ'=>'Білорусія');
    print_array_tag_pre($krayny)

?>
</body>
</html>
