<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="5.php" method="post">
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
    echo '<br><br>';
    echo '<br><br>';
    echo 'Алгоритм обміну значеннями двох змінних без використання третьої';
    echo '<br><br>';
    echo '<br><br>';
    $a1 = $_POST['n1'];
    $a2 = $_POST['n2'];
    echo "Змінна \$a1 = {$a1} , змінна \$a2 = {$a2}";
    echo '<br><br>';
    echo '<br><br>';
    echo '$a2 = $a2 - $a1';
    echo '<br><br>';
    echo '$a1 = $a1 + $a2';
    echo '<br><br>';
    echo '$a2 = $a1 - $a2';
    $a2 = $a2 - $a1;
    $a1 = $a1 + $a2;
    $a2 = $a1 - $a2;
    echo '<br><br>';
    echo '<br><br>';
    echo "Змінна \$a1 = {$a1} , змінна \$a2 = {$a2}";
?>
</b>
</body>
</html>