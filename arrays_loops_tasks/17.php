<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <?php
    echo '<b>';
    echo 'Задано масив:';
    echo '<br><br>';
    $massyv = array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень',
                    'Серпень','Вересень','Жовтень','Листопад','Грудень');
    echo '<pre>';
    print_r($massyv);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран усі місяці, а поточний жирним шрифтом...';
    echo '<br><br>';
    echo '</b>';
    $month = date('m');
    $count = 0;

    foreach ($massyv as $key => $element) :

        echo "<br> $element";

        if ($key == ($month - 1)) {

            echo "<br><b> $element </b>";

        }

    endforeach;

    ?>

</body>
</html