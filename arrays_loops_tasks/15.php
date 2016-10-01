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
    echo 'Вивести на екран кількість елементів у масиві...';
    echo '<br><br>';

    $count = 0;

    foreach ($massyv as $key => $element) :

        $count = $count + 1;

    endforeach;

    echo "<br> Кількість елементів у масиві становить - {$count}";

    ?>
</b>
</body>
</html