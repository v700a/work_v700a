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
        if ($a !== ''):
            $string_array = serialize($a);
            $file_content = file_get_contents('comment_file.txt');
            $file_content_new = $file_content . $string_array . 'PHP_EQL';
            file_put_contents('comment_file.txt',$file_content_new);
        endif;
    }

//****************************************FUNCTIONS**************************************************************
    if (isset($_COOKIE)):
        if (isset($_COOKIE['username_in'])):
                echo $_SESSION['que'];
                print_r($_GET);
            echo 'post';
                print_r($_POST);
                    if (!$_POST){
                        $_POST = 0;
                    }

                    if ($_POST ['ar1'] !== null):
                        $arr_1 = $_POST ['ar1'];
                        read_write_file($arr_1);
                    endif;

            $read_file_content = file_get_contents('comment_file.txt');
            $explode_string = explode('PHP_EQL', $read_file_content);
                    //$query_string = $_SERVER ['QUERY_STRING'];
                    if (isset($_POST['button_delete'])):
                        $query_string = $_POST['button_delete'];
                        if ((int)$query_string !== null):
                            unset($explode_string [(int)$query_string]);
                            file_put_contents('comment_file.txt', implode('PHP_EQL',$explode_string));
                            $read_file_content = file_get_contents('comment_file.txt');
                            //header("location:/index.php?page=comments");
                            //die;
                        endif;
                    endif;
//            if ($_SERVER ['REQUEST_METHOD'] == "POST"):
//                header("location:/index.php?page=comments&button=");
//                die;
//            endif;
                ?>

                    <form method="post">

                <?php
                    $item_unserialise = '';
                    $name_button_delete = 0;
                    foreach ($explode_string as $item):
                        if ($item !== ''):
                            if ($item !== 's:0:"";'):
                                $item_unserialise = unserialize($item);
                                echo "<p> {$item_unserialise} </p>";
                                echo "<button name='button_delete' value=\"
                                $name_button_delete\" formmethod='post' >Видалити коментар</button>";
                                echo '<br><br>';
                                $name_button_delete++;
                            endif;
                        endif;
                    endforeach;

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