<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="27.php" method="post">
        Введіть кількість рядків:<br>
        <br>
        <input type="number" name="n_1" placeholder="Кількість рядків?" autofocus>
        <br><br>
        Введіть кількість колонок:<br>
        <br>
        <input type="number" name="n_2" maxlength="1" placeholder="Кількість колонок?">
        <br><br>
        <input type="submit">
    </form>

<?php
    if ($_POST == null){
        $_POST = 0;
    }
    $a = $_POST['n_1'];
    $b = $_POST['n_2'];
    echo '<br><br>';
    echo "Введене кількість рядків - ( $a )" ;
    echo '<br><br>';
    echo "Введене кількість колонок - ( $b )" ;
    echo '<br><br>';
    echo '<table border="3px" cellpadding="5px" cellspacing="5px">';
    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    for ($i = 1; $i <= $a; $i++) :
        echo '<tr>';
            for ($j = 1; $j <= $b; $j++) :
                $c = rand(0,6);
                echo "<td bgcolor=$colors[$c]>";
                echo rand(1,200);
                echo '</td>';
            endfor;
        echo '</tr>';
    endfor;

    echo '</table>';
?>
</b>
</body>
</html>