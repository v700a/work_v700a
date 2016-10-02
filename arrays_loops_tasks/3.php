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
    $massyv = array(26, 17, 136, 12, 79, 15);
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран загальну суму квадратів елементів масиву:';
    echo '<br><br>';
    $a = 0;

    foreach ($massyv as $key => $element) :
        $a = $a + ($element * $element);
    endforeach;

    $result = $a;
    echo $result;
?>
</b>
</body>
</html>