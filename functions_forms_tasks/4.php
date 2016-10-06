<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="4.php" method="post">
        Введiть шлях до директорії вміст якої потрібно вивести на екран:<br>
        <br><br>
        <input type="text" name="n1" size="150px" placeholder="Введiть шлях" autofocus>
        <br><br>
    </form>

    <?php

    function read_dir($a)
    {
        if ($a !== ""):
            $is_dir = is_dir($a);
            if ($is_dir !== false):
                $open_dir = opendir($a);

                while (($scan_dir = readdir($open_dir)) !== false):
                    echo $scan_dir, '<br>';
                endwhile;

            else:
                echo "Вказана директорія відсутня або її не існує...";
            endif;
        else:
            echo "Шлях до директорії не введено...";
        endif;
    }

    if (@$_POST ['n1'] !== null){
        $n_1 =  $_POST ['n1'];
        echo "Введено - ", var_dump($n_1);
        echo '<br><br>';
        read_dir($n_1);
    }
    ?>
</b>
</body>
</html>