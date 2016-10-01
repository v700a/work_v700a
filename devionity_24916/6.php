<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
     <form action="6.php" method="post">
        Введiть будь-які два числа:<br>
        <br><br>
        Число А =
        <input type="number" name="n1" autofocus>
        <br><br>
        Число В =
        <input type="number" name="n2" >
        <br><br>
        <input type="submit" >
        <br><br>
    </form>

    <?php
    if ($_POST == null){
        $_POST = 0;
    }
    $n_1 = $_POST['n1'];
    echo '<br><br>';
    if ($n_1 !==""){
    echo "Число А має значення - {$n_1}";
    }
    else {
        echo "У числа А значення відсутнє!";
    }
    echo '<br><br>';
    $n_2 = $_POST['n2'];
    if ($n_2 !== "") {
        echo "Число B має значення - {$n_2}";
    }
    else {
        echo "У числа B значення відсутнє!";

    }
    echo '<br><br>';

    if ($n_1 !== $n_2) {
        if ($n_1 > $n_2) {
            echo "Максимальне значення має число A = {$n_1}";
        } else {
            echo "Максимальне значення має число B = {$n_2}";
        }
    }

    else{
        echo "Значення чисел А і B рівні";
        }

    echo '<br><br>';
    echo '<br><br>';

    echo '<i>Те ж саме завдання виконане за допомогою тернарного оператора...</i>';
    $n_3 = 0;

    $n_3 = ($n_1 < $n_2)? "Максимальне значення має число В i становить {$n_2}" :
        "Максимальне значення має число В і становить {$n_1}";
    echo '<br><br>';
    echo $n_3;
    echo '<br><br>';
    echo '<br><br>';

    echo "<i>Те ж саме завдання виконане за допомогою конструкції switch/case...</i>";
    echo '<br><br>';

    switch ($n_1 < $n_2) {
        case true :
            echo "Максимальне значення має число В i становить {$n_2}";
            break;
        case false :
            echo "Максимальне значення має число В i становить {$n_1}";
            break;
    }

    ?>
</b>
</body>
</html