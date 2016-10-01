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
    $massyv = array('html', 'css', 'php', 'js', 'jq');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран елементи масиву в стовпчик:';
    echo '<br><br>';
    foreach ($massyv as $key => $element) :

        echo "<br>{$element}";

    endforeach;
    ?>
</b>
</body>
</html