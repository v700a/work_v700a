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
    echo 'Вивести на екран елементи масиву у вигляді рядка - 123456789:';
    echo '<br><br>';

    foreach ($massyv as $key => $element) :
        echo "{$element}";
    endforeach;
    echo '<br><br>';

    foreach ($massyv as $key => $element) :
        echo "<br>{$element}";
    endforeach;

    echo '<br><br>';
    $a = 1;

    foreach ($massyv as $key => $element) :
        if ($a == 1) :
            echo "{$element}";
            $a = $a + 1;
        else :
            echo "-{$element}";
        endif;
    endforeach;
?>
</b>
</body>
</html>