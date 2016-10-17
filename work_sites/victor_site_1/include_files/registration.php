<?php

//    var_dump($_SESSION);
//    print_r($_GET);

    $_GET['msg'] = is_get('msg');
    $_POST['login'] = is_post('login');
    $_POST['password'] = is_post('password');
    $_POST['password_repeat'] = is_post('password_repeat');
    $_SESSION['login'] = is_session('login');
    $login = '';
    $pass_null = '';
    if ($_SESSION['login'] !== ''):
        $login = $_SESSION['login'];
    endif;

    if (($_SESSION['login'] !== null) && ($_SESSION['password'] !== null)):
        $file_csv = fopen('users.csv', 'a');
        $login_md5 = md5($_SESSION['login']);
        $pass_md5 = md5($_SESSION['password']);
        $array_csv = array($login_md5,$pass_md5);
//        print_r(fgetcsv($file_csv));
//        if (isset($_GET['msg3'])):
//            if ($_GET['msg3'] == 'log_err'):
//
//                echo '<h3>', "Користувач!", '</h3>';
//            endif;
//        endif;

        $users = array_map('str_getcsv', file('users.csv'));
//        $login2 = '';
        $result = 0;
        $reorg_users = array_pull_array($users);
//        print_r($reorg_users);
//        echo $login_md5;
            if ($reorg_users !== ''):
                foreach ($reorg_users as $log => $pass) :
                    if ($login_md5 == $log) :
                        $result = 1;
                        break;
                    endif;
                    $result = 0;
                endforeach;
            endif;

//    if (($_SESSION['login'] !== null) && ($_SESSION['password'] !== null)):
        if ($result == 0):?>

        <h3>Ви зареєстровані. Перейдіть на сторінку авторизації.</h3>

<?php
            fputcsv($file_csv,$array_csv);
            fclose($file_csv);
        else: ?>
        <h3>Користувач з таким іменем уже зареєстрований. Виберіть інше ім'я.</h3>
<?php   $result = 0;
        endif;
    endif;?>
        <form method="post">
            <br><br>
            Введіть своє майбутнє ім'я (логін)<br>
            <input type="text" name="login" value="<?= $login ?>"><br><br>
            Введіть пароль (не менше 5 символів):<br>
            <input type="text" name="password"><br><br>
            Повторіть пароль:<br>
            <input type="text" name="password_repeat"><br><br>
            <button>Зареєструватись</button>

        </form>

<?php

    if ($_POST !== ''):
        if (isset($_POST['login']) !== ''):
            $_SESSION['login'] = $_POST['login'];
        endif;

        if (($_POST['password'] == '') && ($_POST['password_repeat'] == '')):
            $_POST['password'] = null;
            $_POST['password_repeat'] = null;
            $pas_null = 'null';
        endif;

        if ($_POST['password'] !== $_POST['password_repeat']):
            $_SESSION['pass_error'] = 'Паролі не співпадають!';
            header('location: index.php?page=registration');
            die;
        else:
            $_SESSION['password'] = $_POST['password'];
        endif;
        if (isset($_SESSION['pass_error'])):
            $pass_error = $_SESSION['pass_error'];
            unset($_SESSION['pass_error']);
            echo "<h3>{$pass_error}</h3>";
        endif;
    endif;
    if ($_GET['msg'] == 'null'):
        echo "<h3>Пароль не введено!</h3>";
     endif;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            if ($pas_null == 'null'):
                header('location: index.php?page=registration&msg=null');
                die;
            endif;
        header('location: index.php?page=registration');
        die;
    endif;
?>

