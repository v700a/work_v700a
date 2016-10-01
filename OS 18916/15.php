<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 15</title>
</head>
<body>
<b>
    <br><br>
    <form action="15.php" method="POST">
        Калькулятор
        <br><br>

        <br><br>
        <input type="number"   name="chyslo_a" placeholder="Введіть 1-ше число" autofocus>
        <br><br>
        <input type="text"   name="znak" maxlength="1" size="3" placeholder="(+ - / *)">
        <br><br>
        <input type="number"   name="chyslo_b" placeholder="Введіть 2-ге число">
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



        $operator = $_POST ['znak'];
        $rezultat = 0;
        $diya = '';
            if ($operator == '+') {
                $rezultat = $a + $b;
                $diya = 'додавання';
            } elseif ($operator == '-') {
                $rezultat = $a - $b;
                $diya = 'віднімання';
            } elseif ($operator == '/') {
                if ($b == 0) {
                    echo 'Ділення на 0!';
                }
                else {
                    $rezultat = $a / $b;
                    $diya = 'ділення';
                }
            } elseif ($operator == '*') {
                $rezultat = $a * $b;
                $diya = 'множення';
            }
        if ($b == 0) {}
        else {
            echo "Результат {$diya} = {$rezultat}";
        }

    ?>
</b>
</body>
</html>