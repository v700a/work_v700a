<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<?php
    echo '<br><br>';
    echo 'Вивести на екран число 1000 поділене на 2 стільки раз, щоб результат був менше 50...';
    echo '<br><br>';
    echo '<br><br>';
    $num = 0;

    for ($i = 1000; $i >= 50; $i = $i / 2) :
        $num = $num + 1;
    endfor;

    echo 'Результат ділення 1000 на 2, менше 50:';
    echo '<br><br>';
    echo "{$i}<br>";
    echo '<br><br>';
    echo 'Кількість ітерацій циклу:';
    echo '<br><br>';
    echo "{$num}<br>";
?>
</b>
</body>
</html