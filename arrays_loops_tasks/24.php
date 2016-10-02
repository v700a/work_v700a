<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<b>
    <form action="24.php" method="post">
        Введіть будь-яке багатозначне число:<br>
        <br>
        <input type="number" name="n_1" placeholder="Введіть багатозначне число" autofocus>
        <br><br>
        Введіть будь-яку цифру для знаходження кількості входжень у введене число:<br>
        <br>
        <input type="text" name="n_2" maxlength="1" placeholder="Введіть цифру">
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
    if (!is_numeric($b)) :
    echo "Введений символ не є цифрою. Введіть, будь ласка, цифру.";
    $b = 'Не цифра!';
    endif;
    echo '<br><br>';
    echo "Введене число - ( $a )" ;
    echo '<br><br>';
    echo "Введене цифра - ( $b )" ;
    $c = (string)$a;
    $d = 0;
    echo '<br><br>';

    for ($i = 0; (@(bool)$c[$i] !== false); $i = $i+1 ) :
        if ($c[$i] == $b) {
        $d = $d + 1;
        }
    endfor;

    echo '<br><br>';

    echo "Кількість входжень цифри ( {$b} ) у число ( {$a} ) рівне - ( {$d} )";
    echo '<br><br>';
    echo '</b>';

    ?>
</b>
</body>
</html>