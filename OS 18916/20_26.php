<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 20 - 26</title>
</head>
<body>
<b>
    <form action="20_26.php" method="POST">

        <br>
        <input type="text"   name="chyslo_a" placeholder="Введіть число a" autofocus>

    </form>
    <br><br>

<?php
    if ($_POST == null) {
        $_POST = 0;
    }
    $a = $_POST ['chyslo_a'];
    if ($a !== null) {
        $a= (int)$a;
        echo "Тип даних числа a - "; var_dump($a);
        echo "<br><br>";
        $b = (bool)$a;
        echo "Число (а) зі значенням {$a} приведене до типу \"boolean\" має значення - ";
        var_dump($b);
        echo "<br><br>";
        if ($b == 1) {
            echo "# Будь яке значення числа (а) відмiнне від нуля приведене до типу \"boolean\" буде завжди - (true)";
        }
        else {
            echo "# Значення числа (а) рівне нулю приведене до типу \"boolean\" буде завжди - (false)";

        }
    }
    echo "<br><br>";
    print 'Текст на екран можна виводити за допомогою функції "print"';
    echo "<br><br>";
    echo 'Текст на екран можна виводити за допомогою функції "echo"';

    //  Коментарі можуть бути однорядні
    #   Коментарі можуть бути однорядні
    /*  Коментарі
        можуть
        бути
        багаторядні
    */
    define('DAYS_COUNT',7);
    const MONTH_COUNT = 12;
?>
    <br><br>
    <?= 'Текст на екран можна виводити за допомогою спеціального запису функції "echo" - " &lt?= "' ?><br>
    <?= 'Цим і відрізняється запис " &lt?= " від запису " &lt?PHP " який є оголошенням коду мови PHP'?>

<?php
    echo "<br><br>";
    echo "<br><br>";
    echo "Константа DAYS_COUNT оголошена за допомогою функції \"define (ІМ'Я_КОНСТАНТИ, значення_константи)\" 
            і має значення - "; echo DAYS_COUNT;
    echo "<br><br>";
    echo "Константа MONTH_COUNT оголошена за допомогою слова \" const ІМ'Я_КОНСТАНТИ = значення_константи\" 
            і має значення - "; echo MONTH_COUNT;
?>
</b>
</body>
</html>