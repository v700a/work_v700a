<?php

    $_GET['msg'] = is_get('msg');
    $_POST['login'] = is_post('login');
    $_POST['email'] = is_post('email');
    $_POST['password'] = is_post('password');
    $_POST['password_repeat'] = is_post('password_repeat');
    $_SESSION['login'] = is_session('login');
    $login_for_form = '';
//    $pass_null = '';
    if ($_SESSION['login'] !== ''):
        $login_for_form = $_SESSION['login'];
    endif;
//var_dump($_SESSION['login']);
?>
<h2>Реєстрація нового користувача</h2>
<?php

    if (($_SESSION['login'] !== null) && ($_SESSION['password'] !== null) && ($_SESSION['email'] !== null)):
        $login = $_SESSION['login'];
        $pass_md5 = md5($_SESSION['password'] . 'php');
        $email_md5 = md5($_SESSION['email'] . 'php');
        $email_ = $_SESSION['email'];
        $sql_db = find_user_all();

//var_dump($sql_db);
//        die;
//        if($login !== 0 && $pass_md5 !== 0 && $email_md5 !== 0):
            if ($sql_db !== null):
                $is_name = 0;
                $is_email = 0;
                foreach ($sql_db as $value):
                    foreach ($value as $value_in):
                        if ($email_md5 === $value_in):
                            echo "<h3>E-mail: {$email_} уже використовується.</h3>";
                            $is_email = 1;
                            break;
                        elseif ($login === $value_in):
                            echo ' <h3>Користувач з таким іменем уже зареєстрований. Виберіть інше ім\'я.</h3>';
                            $is_name = 1;
                            break;
        //                elseif ($email_md5 === $sql_db['email'] && $login === $sql_db['name']):
        //                    echo ' <h3>Користувач з таким іменем та E-mail уже зареєстрований.</h3>';
        //                    var_dump(insert_user($login_, $pass_md5, $email_md5));
                        endif;
                    endforeach;
                endforeach;
                if ($is_email == 0 && $is_name == 0):
                    insert_user($login, $pass_md5, $email_md5);
                    echo ' <h3>Ви зареєстровані.</h3>';
                endif;

//            var_dump(insert_user($login_, $pass_md5, $email_md5));
            endif;
    else:
//        endif;
    endif;

//        $users = array_map('str_getcsv', file('users.csv'));
//        $result = 0;
//        $reorg_users = array_pull_array($users);
//            if ($reorg_users !== ''):
//                foreach ($reorg_users as $log => $pass) :
//                    if ($login_md5 == $log) :
//                        $result = 1;
//                        break;
//                    endif;
//                    $result = 0;
//                endforeach;
//            endif;
//        if ($result == 0):
?>

<!--            <h3>Ви зареєстровані. Перейдіть на сторінку авторизації.</h3> -->

<?php
//            fputcsv($file_csv,$array_csv);
//            fclose($file_csv);
//        else:
?>

<?php


//       $result = 0;
//        endif;

//    endif;
?>
        <form method="post">
            <br>
            Введіть своє майбутнє ім'я (логін):<br>
            <input type="text" name="login" value="<?= $login_for_form ?>"><br><br>
            Введіть свою електронну пошту: <br>
            <input type="email" name="email" value=""><br><br>
            Введіть пароль:<br>
            <input type="password" name="password"><br><br>
            Повторіть пароль:<br>
            <input type="password" name="password_repeat"><br><br>
            <button>Зареєструватись</button>

        </form>

<?php

 //   if ($_POST !== ''):
        var_dump($_POST['login']);
//        var_dump($_POST['email']);
        if ($_POST['login'] !== '' && $_POST['login'] !== null):
            $_SESSION['login'] = $_POST['login'];
        echo '9999999999999';
        else:
//            if ($_SESSION['login'] !== ''):
            $_SESSION['login'] = null;
//            $_SESSION['login_empty'] = 'Ім\'я(логін)" не заповнене.';
            echo'*******';
                $login_null = 1;
//            endif;
        endif;


        if ($_POST['email'] !== ''):
            $_SESSION['email'] = $_POST['email'];
        else:
            $_SESSION['email'] = null;
        endif;

        if (($_POST['password'] == '') && ($_POST['password_repeat'] == '')):
            $_POST['password'] = null;
            $_POST['password_repeat'] = null;
            $_SESSION['password'] = null;
            $pas_null = 1;
//            $_SESSION['pass_empty'] = 'Пароль не введено!';
        endif;

        if ($_POST['password'] !== $_POST['password_repeat']):
//            $_SESSION['pass_error'] = 'Паролі не співпадають!';
            header('location: index.php?page=registration&msg=passno');
            die;
        else:
            $_SESSION['password'] = $_POST['password'];
        endif;
//        if (isset($_SESSION['login_empty'])):
//            $login_empty = $_SESSION['login_empty'];
//            unset($_SESSION['login_empty']);
//            echo "<h3>{$login_empty}</h3>";
//        elseif (isset($_SESSION['pass_error'])):
//            $pass_error = $_SESSION['pass_error'];
//            unset($_SESSION['pass_error']);
//            echo "<h3>{$pass_error}</h3>";
//        elseif (isset($_SESSION['pass_empty'])):
//            $pass_empty = $_SESSION['pass_empty'];
//            unset($_SESSION['pass_empty']);
//            echo "<h3>{$pass_empty}</h3>";
//
//        endif;
 //   endif;
    if ($_GET['msg'] == 'null'):
        echo "<h3>Пароль не введено!</h3>";
    elseif ($_GET['msg'] == 'lgnull'):
        echo '<h3>Поле "Ім\'я (логін)" не заповнене.</h3>';
    elseif ($_GET['msg'] == 'passno'):
        echo '<h3>Паролі не співпадають</h3>';
    endif;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
echo $login_null;
            if ($login_null == 1):
                header('location: index.php?page=registration&msg=lgnull');
                die;
            elseif ($pas_null == 1):
                header('location: index.php?page=registration&msg=null');
                die;
            endif;
        header('location: index.php?page=registration');
        die;
    endif;
?>
