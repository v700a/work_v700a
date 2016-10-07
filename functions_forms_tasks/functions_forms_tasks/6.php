<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <br><br>
    <form enctype="multipart/form-data" action="6.php" method="POST">
        <input name="f" type="file" />
        <input type="submit" value="Добавити до галереї." />
    </form>

    <?php
//Проблеми, поки що, з кириличними назвами файлів

    function read_dir($a)
    {
        $c = 0;
        if ($a !== ""):
            $is_dir = is_dir($a);
            if ($is_dir !== false):
                chdir($a);
                $open_dir = opendir($a);

                while (($scan_dir = readdir($open_dir)) !== false):
                    if (is_file($scan_dir) == 1):
                        $t = "/functions_forms_tasks/gallery/{$scan_dir}";
                        echo '<div style="float: left">';
                        $ui2 = "<a href= $t target=\"_blank\"><img src = $t width=\"150\" height=\"120\"/></a>";
                        echo $ui2;
                        echo '</div>';
                    endif;
                endwhile;
            else:
                echo "Вказана директорія відсутня або її не існує...";
            endif;
        else:
            echo "Шлях до директорії не введено...";
        endif;
    }



    if (@$_FILES ['f'] !== null):
        $n_1 =  $_FILES ['f'];
    var_dump($n_1);
        $q = $n_1['tmp_name'];
        $r = $n_1 ['name'];
        $ui = "c:/xampp/htdocs/functions_forms_tasks/gallery/{$r}";
        $ui3 = "c:/xampp/htdocs/functions_forms_tasks/gallery/";
        copy($q, $ui);
        read_dir($ui3);
   endif;
    echo '<div style="margin-top: 50px">';
    echo '<div>';
    ?>

</b>
</body>
</html>