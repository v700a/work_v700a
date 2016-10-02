<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>

    <?php

    echo 'Задано масив за допомогою функції - rand:';
    echo '<br><br>';
    $massyv = array();

    for ($i = 0; $i <= 10; $i++) :
    $a = rand(1, 200);
    $massyv [] = $a;
    endfor;

    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Знайти мінімальне та максимальне значення:';
    echo '<br><br>';

    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;
    foreach ($massyv as $key =>$element1) :
        foreach ($massyv as $element2) :
                if ($element1 >= $element2) :
                    $c = $element1;
                    $f = $key;
                else :
                    $b = 1;
                endif;
        endforeach;
            if ($b == 0):
                break;
            endif;
            if ($b == 1) :
                $b = 0;
            endif;
    endforeach;
    foreach ($massyv as $key => $element1) :
        foreach ($massyv as $element2) :
                if ($element1 <= $element2) :
                    $e = $element1;
                    $g = $key;
                else :
                    $d = 1;
                endif;
        endforeach;
            if ($d == 0):
                break;
            endif;
            if ($d == 1) :
                $d = 0;
            endif;
    endforeach;

    echo "Максимальне значення числа з індексом ( $f ) в масиві = {$c}", '<br><br>',
    "Мінімальне значення числа з індексом ( $g ) в масиві = {$e}",'<br><br>';
    $massyv [$f] = $e;
    $massyv [$g] = $c;
    echo 'Змінене місцями максимальне та мінімальне числа','<br><br>';
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';

    ?>
</b>
</body>
</html