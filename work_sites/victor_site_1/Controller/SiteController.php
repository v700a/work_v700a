<?php

namespace Controller;

use \Library\Controller;
use \Library\Functions;
use \Model\UserModel;
use \Library\Request;

class SiteController extends Controller
{
    function indexAction ()
    {

        return $this->render('index.phtml');
    }

    function loginAction ()
    {
        $functions = new Functions();
        $user_model = new UserModel();
        $logerr = null;
        if (isset($_GET['logmsg'])):
            if ($_GET['logmsg'] == 'log_err'):
                $logerr = "Помилка авторизації! Невірний Логін/Пароль!";
            endif;
        endif;
        $login = 0;
        if(!isset($_COOKIE['username_in'])):
            if (($functions->isLoginFormValid ('login', 'password', 'email')) !== null) :
                $login = $_POST['login'];
                $password = md5($_POST['password'] . 'phpsalt');
                $email = md5($_POST['email'] . 'phpsalt');
                $db_users = $user_model->find($login, $password, $email);
                var_dump($db_users);
                $result = 0;
                if ($db_users) :
                    setcookie('username_in', $login, time() + 60*60);
                    header('location: index.php?route=site/login');
                    die;
                else:
                    header('location: index.php?route=site/login&logmsg=log_err');
                    die;
                endif;
            endif;
        endif;
        if (isset($_GET['logmsg'])):
            if ($_GET['logmsg'] == 'out'):
                setcookie('username_in',$login, time(0));
                unset($_COOKIE{'username_in'});
            endif;
        endif;

        $array = array( 'logerr' => $logerr);

        return $this->render('login.phtml', $array);

    }

    function registerAction ()
    {
        $request = new Request();
        $user_model = new UserModel();

        $_GET['msg'] = $request->isGetOf('msg');
        $_POST['login'] = $request->isPostOf('login');
        $_POST['email'] = $request->isPostOf('email');
        $_POST['password'] = $request->isPostOf('password');
        $_POST['password_repeat'] = $request->isPostOf('password_repeat');
        $_SESSION['login'] = $request->isSsessionOf('login');
        $login_for_form = '';
        $email_for_form = '';
        if ($_SESSION['login'] !== ''):
            $login_for_form = $_SESSION['login'];
        endif;
        if ($_SESSION['email'] !== ''):
            $email_for_form = $_SESSION['email'];
        endif;
        if (($_SESSION['login'] !== null) && ($_SESSION['password'] !== null) && ($_SESSION['email'] !== null)):
            $login = $_SESSION['login'];
            $pass_md5 = md5($_SESSION['password'] . 'phpsalt');
            $email_md5 = md5($_SESSION['email'] . 'phpsalt');
            $email_ = $_SESSION['email'];
            $sql_db = $user_model->find_all();
            if ($sql_db !== null):
                $is_name = 0;
                $is_email = 0;
                foreach ($sql_db as $value):
                    foreach ($value as $value_in):
                        if ($email_md5 === $value_in):
                            $msg_err = "E-mail: {$email_} уже використовується.";
                            $is_email = 1;
                            break;
                        elseif ($login === $value_in):
                            $msg_err = 'Користувач з таким іменем уже зареєстрований. Виберіть інше ім\'я.';
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
        if ($_POST['login'] !== '' && $_POST['login'] !== null):
            $_SESSION['login'] = $_POST['login'];
        else:
            $_SESSION['login'] = null;
            $login_null = 1;
        endif;

        if ($_POST['email'] !== '' && $_POST['email'] !== null):
            $_SESSION['email'] = $_POST['email'];
        else:
            $_SESSION['email'] = null;
            $email_null = 1;
        endif;

        if (($_POST['password'] == '') && ($_POST['password_repeat'] == '')):
            $_POST['password'] = null;
            $_POST['password_repeat'] = null;
            $_SESSION['password'] = null;
            $pas_null = 1;
        endif;

        if ($_POST['password'] !== $_POST['password_repeat']):
            header('location: index.php?route=site/register&msg=passno');
            die;
        else:
            $_SESSION['password'] = $_POST['password'];
        endif;

        if ($_GET['msg'] == 'null'):
            $msg_err = "Пароль не введено!";
        elseif ($_GET['msg'] == 'lgnull'):
            $msg_err = "Поле \"Ім'я (логін)\" не заповнене.";
        elseif ($_GET['msg'] == 'emailnull'):
            $msg_err = "Не введено E-mail";
        elseif ($_GET['msg'] == 'passno'):
            $msg_err = "Паролі не співпадають";
        endif;
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            if ($login_null == 1):
                header('location: index.php?route=site/register&msg=lgnull');
                die;
            elseif ($email_null == 1):
                header('location: index.php?route=site/register&msg=emailnull');
                die;
            elseif ($pas_null == 1):
                header('location: index.php?route=site/register&msg=null');
                die;
            endif;
            header('location: index.php?route=site/register');
            die;
        endif;
        $array = array(
            'login_for_form'=>$login_for_form,
            'msg_err' => $msg_err,
            'email_for_form' => $email_for_form
            );
        return $this->render('registration.phtml', $array);

    }

    function useroutAction ()
    {

    }


}