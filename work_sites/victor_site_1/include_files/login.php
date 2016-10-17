<?php
    if (isset($_GET['msg2'])):
        if ($_GET['msg2'] == 'log_err'):

            echo '<h3>', "Помилка авторизації! Невірний Логін/Пароль!", '</h3>';
        endif;
    endif;

    $users = array_map('str_getcsv', file('users.csv'));
    $login2 = '';
    if(!isset($_COOKIE['username_in'])):
        if ((is_login_form_valid ('login', 'password')) !== null) :
            $reorg_users = array_pull_array($users);
            $login = md5($_POST['login']);
            $password = md5($_POST['password']);
            $result = 0;
                foreach ($reorg_users as $log => $pass) :
                    if ($login == $log && $password == $pass) :
                        $result = 1;
                        $login2 = $_POST['login'];
                        break;
                    endif;
                endforeach;
            if ($result == 1):
                setcookie('username_in', $login2, time() + 60*60);
                header('location: index.php?page=login');
                die;
            else:
                header('location: index.php?page=login&msg2=log_err');
                die;
            endif;
        endif;
    endif;
    if (isset($_GET['msg'])):
        if ($_GET['msg'] == 'end'):
            setcookie('username_in',$login2, time(0));
            unset($_COOKIE{'username_in'});
        endif;
    endif;

?>
            <form method="post">
<?php           if (isset($_COOKIE['username_in'])): ?>
                    <h2>Ви авторизовані як <?=$_COOKIE['username_in']?></h2>
                    <br>
                    <button formmethod="post">Вихід</button>
<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
                        header('location: index.php?page=login&msg=end');
                        die;
                    endif;
                else:
?>
                    <h2>Авторизація</h2>
                    <label for="login">Логін</label><br>
                    <input type="text" name="login" id="login"><br><br>
                    <label for="password">Пароль</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <button>Авторизуватись</button>
<?php           endif;?>
            </form>
