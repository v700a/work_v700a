<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="5.php" method="post">
        Введiть шлях до директорії вміст якої потрібно вивести на екран:<br>
        <br><br>
        <input type="text" name="n1" size="150px" placeholder="Введiть шлях" autofocus>
        <br><br>
        Пошук файлів які містять наступне слово (поки-що явно відокремлені слова - if, for, while ... )
        <br><br>
        <input type="text" name="n2" size="150px" placeholder="Введiть слово">
        <br><br>
        <input type="submit">
        <br><br>
        <br><br>
    </form>

    <?php

    function read_dir($a, $b)
    {
        $c = 0;
        if ($a !== ""):
            $is_dir = is_dir($a);
            if ($is_dir !== false):
                chdir($a);
                $open_dir = opendir($a);

                while (($scan_dir = readdir($open_dir)) !== false):
                   if (is_file($scan_dir) == 1):
                       $file_cont = file_get_contents($scan_dir);
                        $file_cont_explode = explode(' ', $file_cont);
                        foreach ($file_cont_explode as $value):
                            if ($value == $b):
                                $c = 1;
                            endif;
                        endforeach;
                        if ($c == 1):
                            echo $scan_dir, '<br>';
                           $c = 0;
                        endif;
                   endif;
                endwhile;
            else:
                echo "Вказана директорія відсутня або її не існує...";
            endif;
        else:
            echo "Шлях до директорії не введено...";
        endif;
    }

    if (@$_POST ['n1'] !== null):
        $n_1 =  $_POST ['n1'];
        if (@$_POST ['n2'] !== null):
            $n_2 =  $_POST ['n2'];
        else:
            $n_2 = "";
        endif;
        echo "Введено шлях - ", $n_1;
        echo '<br><br>';
        echo "Пошук за словом - ", $n_2;
        echo '<br><br>';
        read_dir($n_1, $n_2);
    endif;
    ?>
</b>
</body>
</html>