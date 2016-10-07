<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="2.php" method="post">
        Введiть будь-який текст для знаходження однакових слів:<br>
        <br><br>
        <textarea name="ar1" cols="130" rows="10" placeholder="Текст 1" autofocus></textarea>
        <br><br>
        <input type="submit">
        <br><br>
    </form>

    <?php

    function top_3_words($a)
    {
        $sect_arr1 = explode(' ', $a);
        $b = count($sect_arr1);
        $c = 0;
        $d = 0;
        $e = 0;
        for ($i = 0; $i < $b; $i++):
            foreach ($sect_arr1 as $key => $value1):
                foreach ($sect_arr1 as $value_1):
                    if ((strlen($value1) >= strlen($value_1))):
                        $d = 1;
                    else:
                        $e = 1;
                    endif;
                endforeach;
                if ($d == 1 && $e == 0):
                    $new_arr [] = $value1;
                    $sect_arr1 [$key] = "";
                    if ($c < 3):
                        echo $value1, '<br><br>';
                    endif;
                    $c++;
                endif;
                $d = 0;
                $e = 0;
            endforeach;
        endfor;
    }

    if (!$_POST){
        $_POST = 0;
    }
    $arr_1 = $_POST ['ar1'];
    echo '<br><br>';
    echo "Введений текст: ",$arr_1;
    echo '<br><br>';
    echo '<br><br>';
    echo 'Три найдовші слова введеного тексту: ';
    echo '<br><br>';
    top_3_words($arr_1);
    ?>
</b>
</body>
</html>