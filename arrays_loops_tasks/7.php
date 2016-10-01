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
    $massyv = array(2, 5, 9, 15, 0, 4);
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран елементи масиву зі значенням більше 3-х в стовпчик:';
    echo '<br><br>';
    foreach ($massyv as $key => $element) :

        if ($element > 3) :
            echo "<br>{$element}";
        endif;

    endforeach;
    ?>
</b>
</body>
</html