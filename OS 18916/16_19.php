<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 16 - 19</title>
</head>
<body>
<b>
    <br><br>
    <form action="16_19.php" method="POST">
        Аналізатор чисел
        <br><br>

        <br><br>
        <input type="text"   name="chyslo_a" placeholder="Введіть число a" autofocus>
        <br><br>
        <input type="number"   name="chyslo_b" placeholder="Введіть число b">
        <br><br>
        <input type="submit" value="Виконати">



    </form>
    <br><br>

    <?php

    // Перевірка $_POST на NULL для уникнення появи повідомлення - "Notice: Undefined index:"
    if ($_POST == null) {
        $_POST = 0;
    }

    //    echo $_POST ['znak'];
    $a = $_POST ['chyslo_a'];
    $b = $_POST ['chyslo_b'];

    //var_dump($a, $b);

    if ($a !== null && $b !== null) {
        $b = (int)$b;
        echo "Тип даних числа a - "; var_dump($a);
        echo "<br><br>";
        echo "Тип даних числа b - ";var_dump($b);
        echo "<br><br>";
        echo "Значення числа a = {$a}";
        echo "<br><br>";
        echo "Значення числа b = {$b}";
        echo "<br><br>";

        if ($a < $b) {
            echo "Максимальне з двох чисел число b = {$b}";
        }
        elseif ($a == $b) {
            echo "Числа a i b рівні";
        }
        else {
            echo "Максимальне з двох чисел число a = {$a}";
        }
        echo "<br><br>";
        if ($a === $b) {
            echo "Числа a i b еквівалентні";
        }
        else {
            echo "Числа a i b не еквівалентні";
        }
    }

    ?>
</b>
</body>
</html>