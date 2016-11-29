
<?php

//    if (isset($_COOKIE)):
//        if (isset($_COOKIE['username_in'])):
$arr_1 = '';
                    if (!$_POST){
                        $_POST = null;
                    }

                    if ($_POST !== null):
                        $arr_1 = $_POST;
                        $res = validation_comments_form($arr_1);
                        if ($res !== ''):
                            if ($request->is_method() == 'POST'):
                                header("location: index.php?page=comments&msg=$res");
                                die;
                            endif;
                        endif;
                    endif;


            $a = find_comments_all();

    echo '<pre>';
//    print_r($_GET);
    print_r($arr_1);
    echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .layer {
            width: 100%; /* Ширина блока */
            height: 300px; /* Высота блока */
            background-color: #b2dba1;
            padding: 5px;
            overflow-y: scroll; /* Убираем вертикальную полосу прокрутки */
        }
    </style>
</head>
<body>

                    <form method="post">
                        <div class="layer">
                        <?php
                        $i = 1;
                        foreach ($a as $arr):
                                echo '<b>', $arr["username"], '</b>';
                                echo '&nbsp&nbsp Рейтинг комантаря: &nbsp';
                                echo $arr["rating"];
                                echo '<br>';
                                echo $arr["comment_text"];
                                echo '<br>';
                                echo "<a href=\"index.php?page=comments&delete=$i \">
                                      <b>Видалити&nbsp&nbsp&nbsp</b></a>";
                                echo ' Зміна рейтингу: &nbsp&nbsp&nbsp';
                                echo "<a href=\"index.php?page=comments&r_plus=$i \">
                                      <b><big><big>+</big></big></b></a>";
                                echo '&nbsp&nbsp&nbsp';
                                echo "<a href=\"index.php?page=comments&r_minus=$i \">
                                      <b><big><big>-</big></big></b></a>";
                                echo '<br><br>';
                        endforeach;
                        ?>
                        </div>

                        <h4>Залиште коментар на сторінці:<h4>

                        <?php
                            if (isset($_GET['msg'])):
                                echo $_GET['msg'];
                            endif;
                        ?>

                        <label for="username">Логін</label><br>
                        <input type="text" name="username"><br><br>
                        <label for="email">E-mail</label><br>
                        <input type="text" name="email"><br><br>
                        <textarea name="comment_text"  cols="130" rows="7" placeholder="Текст коментаря" autofocus></textarea>
                        <br><br>
                        <input type="submit" value="Додати коментар">
                        <br><br>
                    </form>
<?php
//        else:
//            echo '<h2>Ви не авторизовані! Доступ до цієї сторінки заборонено!</h2>';
//        endif;
//    endif;

?>


</body>
</html>