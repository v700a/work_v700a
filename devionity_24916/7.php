<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="7.php" method="post">
        Введіть межі діапазону в якому будуть вибрані прості числа:<br>
        <br><br>
        Введіть початкову межу діапазону:
        <br>
        <input type="number" name="n_1" placeholder="Введіть число" autofocus>
        <br><br>
        Введіть кінцеву межу діапазону:
        <br>
        <input type="number" name="n_2" placeholder="Введіть число" >
        <br><br>
        <input type="submit">
        <br><br>
    </form>

<?php
    if ($_POST == null) {
        $a1 = 1;
        $a2 = 1;
    }
    elseif (($_POST['n_2']) == '0') {
        $a1 = 1;
        $a2 = 1;
    }
    else {
        $a1 = $_POST['n_1'];
        $a2 = $_POST['n_2'];
    }
    if ($a1 !== $a2) {
        for ($i = $a1; $i <= $a2; $i++) {
            $a = 0;
            for ($j = 1; $j <= $a2; $j++) {
                if (($i % $j) == 0) {
                    $a = $a + 1;
                }
            }
            if (($a) <= 2) {
                echo " $i";
            }
        }
    }
    echo '<br><br>';
    echo "Те ж саме завдання виконане за допомогою циклу while...";
    echo '<br><br>';
    $aa1 = $a1;
    $aa2 = $a2;
    $aaa1 = 1;
    $aaa2 = $a2;
    while ($aa1 <= $aa2) {
        $d = 0;
        while ($aaa1 <= $aaa2) {
            if (($aa1 % $aaa1) == 0) {
                $d = $d + 1;
            }
            $aaa1 = $aaa1 + 1;
        }
        if (($d) <= 2) {
            echo " $aa1";
        }
        $aa1 = $aa1 + 1;
        $aaa1 = 1;
    }
?>
</b>
</body>
</html>