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
    $massyv = array('green'=>'зелениый', 'red'=>'красный','blue'=>'голубой');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран ключі масиву:';
    echo '<br><br>';
    foreach ($massyv as $key => $element) :

        echo "<br>{$key}";

    endforeach;
    echo '<br><br>';

    echo 'Вивести на екран елементи масиву:';
    echo '<br><br>';

    foreach ($massyv as $key => $element) :

        echo "<br>{$element}";

    endforeach;

    ?>
</b>
</body>
</html