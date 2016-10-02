<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<form action="23.php" method="post">
    Введіть будь-яке багатозначне число і отримайте суму його чисел:<br>
    <br>
    <input type="number" name="n_1" placeholder="Введіть багатозначне число" autofocus>
    <br><br>
</form>
<?php
    if ($_POST == null){
        $_POST = 0;
    }
    echo '<br><br>';
    echo 'Введене число рівне - ( ' ;
    echo '</b>';
    $a = $_POST['n_1'];
    echo "$a )";
    $b = (string)$a;
    $c = 0;
    echo '<br><br>';

    for ($i = 0; (@(bool)$b[$i] !== false); $i = $i+1 ) :
        $c = $c + $b[$i];
    endfor;

    echo '<br><br>';
    echo 'Результат додавання чисел:';
    echo '<br><br>';
    echo $c;
?>
</b>
</body>
</html>