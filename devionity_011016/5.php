<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="5.php" method="post">
        Введіть будь-яке число, щоб перевірити, чи воно просте:<br><br>
        <input type="number" name="n" placeholder="Ввведіть число" autofocus><br><br>
    </form>
<?php
    function input_prime_number ($b)
    {
        for ($i = 2; $i <= $b; $i++ ) :
            if ($b % $i == 0 && $i !== $b) :
                return $c = 1;
            endif;
         endfor;
        return $c = 0;
    }

    if ($_POST == null) {
        $_POST = 0;
    }
    $n = (int)$_POST ['n'];
    $d = input_prime_number($n);
    if ($n !== 0):
        if ($d == 0) :
            echo "Введене число ({$n}) - просте";
        else:
            echo "Введене число ({$n}) - не є простим";
        endif;
    endif;
?>
</b>
</body>
</html>


