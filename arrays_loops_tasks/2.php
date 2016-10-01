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
    $massyv = array(1, 20, 15, 17, 24, 35);
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран загальну суму елементів масиву:';
    echo '<br><br>';
    $a = 0;
    foreach ($massyv as $key => $element) :

        $a = $a + $element;

    endforeach;
    $result = $a;
    echo $result;

    ?>
</b>
</body>
</html