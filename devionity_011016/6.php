<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

function analog_print_r (array $a, $d)
{
    global $p;
    if ($p !== 1):
    echo 'Array ( ';
    $p = 1;
    endif;

    if ($d !== 0):
        $b = each($a);
        echo "[{$b ['key']}] => ";
        echo "{$b ['value']} ";
        analog_print_r ($a, $d - 1);
    else:
        echo ' )';
        return;
    endif;
}
$krayny = array('Київ'=>'Україна', 'Варшава'=>'Польща', 'Бухарест'=>'Румунія', 'Прага'=>'Чехія',
    'Братислава'=>'Словаччина','Будапешт'=>'Угорщина', 'Мінськ'=>'Білорусія');

echo '<br><br>';
echo 'Вміст масиву відображено за допомогою функції print_r()';
echo '<br><br>';
print_r($krayny);
$c = count($krayny);
echo '<br><br>';
echo '<br><br>';
echo 'Вміст масиву відображено за допомогою функції analog_print_r()';
echo '<br><br>';

analog_print_r ($krayny, $c)


?>
</body>
</html>
