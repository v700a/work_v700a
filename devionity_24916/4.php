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
    echo '<br><br>';
    echo 'Визначити результат виразу: false && true || false && true || !false && true';
    $ef = false && true;
    echo '<br><br>';
    echo 'false && true = ';
    var_dump($ef);

    $ef = false || false;
    echo '<br><br>';
    echo '1. false && true = false => false||false = ';
    var_dump($ef);

    $ef = false && true;
    echo '<br><br>';
    echo '2. false||false = false => false && true = ';
    var_dump($ef);

    $ef = false || !false;
    echo '<br><br>';
    echo '3. false && true = false => false || !false = ';
    var_dump($ef);

    $ef = true && true;
    echo '<br><br>';
    echo '4. false || !false = true => true && true = ';
    var_dump($ef);
    echo '<br><br>';
    echo 'Результат - ';
    var_dump($ef);
    echo '<br><br>';
    echo '<br><br>';
    echo '########################################################';
?>

    <br><br>
    <br><br>
    <form action="4.php" method="post">
        Введіть число для перевірки ділення на 2: <br>
        <input type="number" name="number" autofocus>
        <br><br>
    </form>

<?php
    if ($_POST == null) {
        $_POST = 0;
    }
    echo '<br><br>';
    echo "<i>Якщо число ділиться на 2 без залишку то це - bool(false), якщо ні то - bool(true)</i>";
    echo '<br><br>';
    echo "Результат ділення числа на 2 - ";
    $ej = $_POST['number'];
    $ej = $ej % 2;
    var_dump((bool)$ej);
?>
</b>
</body>
</html>