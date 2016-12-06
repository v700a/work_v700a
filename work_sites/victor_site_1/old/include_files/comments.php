
<?php

    $comments_form = new comments_form();

    $arr_post = '';
    if (!$_POST){
        $_POST = null;
    }


    if ($_POST !== null):
        $arr_post = $_POST;
        $res = $comments_form->validation_form($arr_post);
        if ($res !== null):
            header("location: index.php?page=comments&msg=$res");
            die;
        else:
            $comments_form->add($arr_post);
            $user = $arr_post['username'];
            header("location: index.php?page=comments&msg=add&user={$user}");
            die;
        endif;
    endif;


    if (isset($_GET['delete'])):
        $comments_form->delete($_GET);
        header("location: index.php?page=comments&msg=delete");
        die;
    endif;

    if (isset($_GET['r_plus']) || isset($_GET['r_minus'])):
        $comments_form->rating_change($_GET);
        header("location: index.php?page=comments");
        die;
    endif;


    $find_comments = $comments_form->find_all();

//    echo '<pre>';
    //print_r($_GET);
    //print_r($arr_post);
//    echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .meesage {
            width: 100%;
            height: 50px;
            background-color: #e7c3c3;
            padding: 10px;
            margin-top: 1%;
        }
        .layer {
            width: 100%;
            height: 300px;
            background-color: #c1e2b3;
            padding: 10px;
            overflow-y: scroll;
            margin-top: 1%;
        }
        label {
            width: 20px;
            height: 20px;
            position: relative;
        }
        input[type="checkbox"] + span {
            position: absolute;
            left: 0; top: 0;
            width: 100%;
            height: 100%;
            background: url(/switch_off.png);
            cursor: pointer;
        }
        input[type="checkbox"]:checked + span {
            background: url(/switch_on.png);
        }

    </style>
</head>
<body>
<div class="meesage">
    <?php
    if (isset($_GET['msg'])):
        if ($_GET['msg'] == 'delete'):
            echo '<b>Коментар видалено</b>';
        elseif($_GET['msg'] == 'add'):
            echo "<b>Коментар від \" <i>{$_GET['user']}</i>\" додано</b>";
        else:
            echo $_GET['msg'];
        endif;
    endif;

    ?>
</div>


<form method="post">
    <div class="layer">
        <?php
        $i = 0;
        foreach ($find_comments as $arr):
            echo 'Дописувач:&nbsp', '<b>', $arr["username"], '</b>';
            if ($arr['checkbox_state'] == 'on'):
                echo "&nbsp&nbsp E-mail:", "<b>{$arr['email']}</b>", '&nbsp';
            endif;
            echo '&nbsp&nbspКоментар додано:&nbsp', $arr["time_stamp"];
            $i = $arr["id"];
            echo '<br>';
            echo 'Додає коментар:', '<br><br>';
            echo '<b><i>', $arr["comment_text"], '</i></b>', '<br><br>';
            echo "<a href=\"index.php?page=comments&delete=$i \">
            <b>Видалити&nbsp&nbsp&nbsp</b></a>";
            echo '&nbsp&nbsp Рейтинг комантаря: &nbsp';
            echo '<b>', $arr["rating"], '</b>';
            echo ' &nbsp&nbsp Зміна рейтингу: &nbsp&nbsp&nbsp';
            echo "<a href=\"index.php?page=comments&r_plus=$i \">
            <b><big><big>+</big></big></b></a>";
            echo '&nbsp&nbsp&nbsp';
            echo "<a href=\"index.php?page=comments&r_minus=$i \">
            <b><big><big>-</big></big></b></a>";
            echo '<br>', '<div style="width: 100%; height: 2px; background: darkgreen;">&nbsp</div>', '<br>';
        endforeach;
        ?>
    </div>

&nbsp&nbsp<font size="5">Залиште коментар на сторінці:</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <br>
            &nbsp&nbsp<b>Логін</b><br>
            &nbsp&nbsp<input type="text" name="username"><br><br>
            &nbsp&nbsp<b>E-mail</b><br>
            &nbsp&nbsp<input type="email" name="email"> &nbsp&nbsp&nbsp
            <label><input type="checkbox" name="email_on" >
            <span></span></label>&nbspПоказувати E-mail в коментарях
            <br><br>
            &nbsp&nbsp<textarea name="comment_text"  cols="130" rows="7" placeholder="Текст коментаря" autofocus></textarea>
            <br><br>
            &nbsp&nbsp<input type="submit" value="Додати коментар">
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