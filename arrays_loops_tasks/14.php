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
    $massyv = array(4, 2, 5, 19, 13, 0, 10);
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Перевірити, чи є в масиві числа 2, 3 або 4. Вивести на екран відповідь.';
    echo '<br><br>';
    $a = 0;
    $b = 0;


    foreach ($massyv as $key => $element) :

        if ($element  == ($b = 2)) :
            echo "<br> Число {$element} присутнє в масиві";
            $a = 0;
            break;
        else :
            $a = 1;
        endif;

     endforeach;

    if ($a !== 0) {
        echo "<br><br> Число - {$b} - в масиві відсутнє";
        $a = 0;
    }

    foreach ($massyv as $key => $element) :

        if ($element  == ($b = 3)) :
            echo "<br><br> Число {$element} присутнє в масиві";
            $a = 0;
            break;
        else :
            $a = 1;
        endif;

     endforeach;

    if ($a !== 0) {
        echo "<br><br> Число - {$b} - в масиві відсутнє";
        $a = 0;
    }

    foreach ($massyv as $key => $element) :

        if ($element  == ($b = 4)) :
            echo "<br><br> Число {$element} присутнє в масиві";
            $a = 0;
            break;
        else :
            $a = 1;
        endif;

     endforeach;

    if ($a !== 0) {
        echo "<br><br> Число - {$b} - в масиві відсутнє";
        $a = 0;
    }

    ?>
</b>
</body>
</html