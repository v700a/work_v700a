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
    $massyv = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран табличку з елемнтів 3 х 3 ...';
    echo '<br><br>';

    $count = 0;
    $a = 3;

    foreach ($massyv as $key => $element) :

        if($count < $a ) :
            $count = $count + 1;
            echo "$element, ";
        else :
            echo '<br>';
            $a = $a + 2;
            echo "$element, ";
        endif;

    endforeach;


    ?>
</b>
</body>
</html