<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    function read_write_file($a)
    {
        $b = '';
        if ($a !== ''):
            $b = $_COOKIE['username_in'] . ' ' . date('m-d-y р. H:i');
            $string_array = serialize($a );
            $string_name_array = serialize($b);
            $file_content = file_get_contents('comment_file.txt');
            $file_content_new = $file_content . $string_name_array . 'PHP_EQL' . $string_array . 'PHP_EQL';
            file_put_contents('comment_file.txt',$file_content_new);
        endif;
    }

//****************************************FUNCTIONS**************************************************************
    if (isset($_COOKIE)):
        if (isset($_COOKIE['username_in'])):
                    if (!$_POST){
                        $_POST = 0;
                    }

                    if ($_POST ['ar1'] !== null):
                        $arr_1 = $_POST ['ar1'];
                        read_write_file($arr_1);
                    endif;
                    print_r($_GET);
                    $read_file_content = file_get_contents('comment_file.txt');
                    $explode_string = explode('PHP_EQL', $read_file_content);
                    if (isset($_GET['delete'])):
                        $query_string = $_GET['delete'];
                        if ((int)$query_string !== null):
                            var_dump((int)$query_string);
                            unset($explode_string [(int)$query_string - 1]);
                            unset($explode_string [(int)$query_string]);
                            file_put_contents('comment_file.txt', implode('PHP_EQL',$explode_string));
                            $read_file_content = file_get_contents('comment_file.txt');
//                            header("location:/index.php?page=comments");
//                            die;
                        endif;
                    endif;
?>

                    <form method="post">

<?php
                    $item_unserialise = '';
                    $name_button_delete = 0;
                    $trigger = 0;
                    echo '<br>';
                    foreach ($explode_string as $item):
                        if ($item !== ''):
                            if ($item !== 's:0:"";'):
                                $item_unserialise = unserialize($item);
                                echo "<p> {$item_unserialise} </p>";
                                if ($trigger == 0):
                                    $trigger = 1;
                                else:
//                                   echo "<button name='button_delete' value=\"
//                                    $name_button_delete\" formmethod='post' >Видалити коментар</button>";
                                    echo "<a href=\"index.php?page=comments&delete=$name_button_delete\">
                                          <b>Видалити&nbsp&nbsp&nbsp</b></a>";
                                    echo ' Зміна рейтингу: &nbsp&nbsp&nbsp';
                                    echo "<a href=\"index.php?page=comments&r_plus=plus\">
                                          <b><big><big>+</big></big></b></a>";
                                    echo '&nbsp&nbsp&nbsp';
                                    echo "<a href=\"index.php?page=comments&r_minus=minus\">
                                          <b><big><big>-</big></big></b></a>";
                                    echo '<br><br>';
                                    $trigger = 0;
                                endif;
                                $name_button_delete++;
                            endif;
                        endif;
                    endforeach;
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
//                        header("location:/index.php?page=comments");
//                        die;
                    endif;

                        ?>

                    <hr>
                        Залиште коментар на сторінці:<br>
                        <br><br>
                        <textarea name="ar1" cols="130" rows="10" placeholder="Текст коментаря" autofocus></textarea>
                        <br><br>
                        <input type="submit">
                        <br><br>
                    </form>
<?php
        else:
            echo '<h2>Ви не авторизовані! Доступ до цієї сторінки заборонено!</h2>';
        endif;
    endif;

?>


</body>
</html>