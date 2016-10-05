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
    echo '<br>';
    $massyv = array();

    for ($i = 0; $i <= 10; $i++) :
        $a = rand(0, 100);
        $massyv [] = $a;
    endfor;

    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo 'Знайти добуток тих елементів більших нуля і парними індексами:';
    echo '<br>';
    echo '<br><br>';
    echo 'Список елементів більших нуля і парними індексами:';
    echo '<br><br>';
    $b = 1;
    $c = 0;
    $d = 0;
    $e = 0;
    $f = 0;

    foreach ($massyv as $key =>$element1) :
            if ($element1 > 0 && $key % 2 == 0) :
                    $b = $c * $element1;
                    $c = $key;
                    $d = $element1;
                    echo "Ключ - ({$c}). число - ({$d}) <br><br>";
            endif;
    endforeach;

    echo 'Добуток вищевказаних елементів становить - ';
    echo $c;
    echo '<br>';
    echo '<br><br>';
    echo 'Список елементів більших нуля і непарними індексами:';
    echo '<br><br>';

    foreach ($massyv as $key =>$element1) :
            if ($element1 > 0 && $key % 2 == 1) :
                    $e = $element1;
                    $f = $key;
                    echo "Ключ - ({$e}). число - ({$f}) <br><br>";
            endif;
    endforeach;
?>
</b>
</body>
</html>