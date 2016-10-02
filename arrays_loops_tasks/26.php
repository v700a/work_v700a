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

    for ($i = 0; $i <= 100; $i++) :
        $a = rand(1, 200);
        $massyv [] = $a;
    endfor;

    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Знайти добуток трьох елементів більших нуля і парними індексами:';
    echo '<br><br>';
    echo '<br><br>';
    echo 'Список елементів більших нуля і парними індексами:';
    echo '<br><br>';
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;

    foreach ($massyv as $key =>$element1) :
            if ($element1 > 0 && $key % 2 == 0) :
                if ($b == 0) {
                    $c = $element1;
                    $d = $element1;
                    $f = $key;
                    echo "Ключ - ({$f}). число - ({$d}) <br><br>";
                }
                else {
                    $c = $c * $element1;
                    $f = $key;
                    $d = $element1;
                    echo "Ключ - ({$f}). число - ({$d}) <br><br>";
                }
                $b++;
            endif;
            if ($b == 3) :
                break;
            endif;
    endforeach;

    echo 'Добуток вищевказаних елементів становить - ';
    echo $c;
    echo '<br><br>';
    echo '<br><br>';
    echo 'Список елементів більших нуля і непарними індексами:';
    echo '<br><br>';

    foreach ($massyv as $key =>$element1) :
            if ($element1 > 0 && $key % 2 == 1) :
                    $e = $element1;
                    $g = $key;
                    echo "Ключ - ({$g}). число - ({$e}) <br><br>";
            endif;
    endforeach;
?>
</b>
</body>
</html>