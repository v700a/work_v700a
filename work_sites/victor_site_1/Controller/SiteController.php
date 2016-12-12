<?php

namespace Controller;

use \Library\Controller;
use \Library\Functions;
use \Model\UserModel;

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
                $password = md5($_POST['password'] . 'php');
                $email = md5($_POST['email'] . 'php');
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
        return $this->render('registration.phtml');

    }

    function useroutAction ()
    {

    }


}