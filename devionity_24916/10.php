<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>

    <form action="10.php" method="post">
        Введіть межі діапазону в якому буде вибране перше просте число:<br>
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
    echo '<br><br>';
    echo "Завдання виконане за допомогою циклу for...";
    echo '<br><br>';

    if ($_POST == null):
        $a1 = 1;
        $a2 = 1;
    else :
        $a1 = $_POST['n_1'];
        $a2 = $_POST['n_2'];
    endif;

    if ($a1 !== $a2) :
        for ($i = $a1; $i <= $a2; $i++) :
            $j_ne_i = 0;
            $j_tse_i = 0;
            for ($j = 1; $j <= $a2; $j++) :
                if (($i % $j == 0)):
                    if (($j == $i) || ($j == 1)) :
                        $j_tse_i = 1;
                    else :

                        $j_ne_i = 1;
                    endif;
                endif;
            endfor;
            if ($j_ne_i == 0) :
                break;
            endif;
        endfor;
        echo "Перше просте число діапазону {$i}";
    endif;


    ?>
</b>
</body>
</html>