<?php
$functions = new functions();
$user_model = new user_model();

    $_GET['msg'] = $functions->is_get('msg');
    $_POST['login'] = $functions->is_post('login');
    $_POST['email'] = $functions->is_post('email');
    $_POST['password'] = $functions->is_post('password');
    $_POST['password_repeat'] = $functions->is_post('password_repeat');
    $_SESSION['login'] = $functions->is_session('login');
    $login_for_form = '';
    if ($_SESSION['login'] !== ''):
        $login_for_form = $_SESSION['login'];
    endif;
?>

<h2>Реєстрація нового користувача</h2>

<?php
    if (($_SESSION['login'] !== null) && ($_SESSION['password'] !== null) && ($_SESSION['email'] !== null)):
        $login = $_SESSION['login'];
        $pass_md5 = md5($_SESSION['password'] . 'php');
        $email_md5 = md5($_SESSION['email'] . 'php');
        $email_ = $_SESSION['email'];
        $sql_db = $user_model->find_all();
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
                        endif;
                    endforeach;
                endforeach;
                if ($is_email == 0 && $is_name == 0):
                    $user_model->insert($login, $pass_md5, $email_md5);
                    echo "<h3>Ви зареєстровані як - {$login}.</h3>";
                    die();
                endif;
            endif;
    endif;
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

        if ($_POST['login'] !== '' && $_POST['login'] !== null):
            $_SESSION['login'] = $_POST['login'];
        else:
            $_SESSION['login'] = null;
                $login_null = 1;
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
        endif;

        if ($_POST['password'] !== $_POST['password_repeat']):
            header('location: index.php?page=registration&msg=passno');
            die;
        else:
            $_SESSION['password'] = $_POST['password'];
        endif;

        if ($_GET['msg'] == 'null'):
            echo "<h3>Пароль не введено!</h3>";
        elseif ($_GET['msg'] == 'lgnull'):
            echo '<h3>Поле "Ім\'я (логін)" не заповнене.</h3>';
        elseif ($_GET['msg'] == 'passno'):
            echo '<h3>Паролі не співпадають</h3>';
        endif;
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
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
