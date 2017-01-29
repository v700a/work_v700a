<?php

namespace Controller;

use \Library\Controller;
//use \Library\Functions;
use Library\Session;
use \Model\UserModel;
use \Library\Request;

class SiteController extends Controller
{
    function indexAction ()
    {

        return $this->render('index.phtml');
    }

    function loginAction (Request $request)
    {
        $user_model = new UserModel();
        $logerr = null;
        if (Session::getContent('logmsg') == 'log_err'):
            $logerr = "Помилка авторизації! Невірний Логін/Пароль!";
            Session::remove('logmsg');
        endif;
        $login = 0;
        if(!isset($_COOKIE['username_in'])):
            if ((parent::isLoginFormValid ('login', 'password', 'email')) !== null) :
                $login = $request->isPostOf('login');
                $password = md5($request->isPostOf('password') . 'phpsalt');
                $email = md5($request->isPostOf('email') . 'phpsalt');
                $db_users = $user_model->find($login, $password, $email);
//                var_dump($db_users);
                $result = 0;
                if ($db_users) :
                    setcookie('username_in', $login, time() + 60*60);
                    header('location: index.php?route=site/login');
                    die;
                else:
                    Session::setContent('logmsg','log_err');
                    header('location: index.php?route=site/login');
                    die;
                endif;
            endif;
        endif;
//        if ($request->isGetOf('logmsg')):
            if (Session::getContent('logmsg') == 'out'):
                setcookie('username_in',$login, time(0));
                Session::remove('logmsg');
                unset($_COOKIE{'username_in'});
            endif;
//        endif;

        $array = array( 'logerr' => $logerr);

        return $this->render('login.phtml', $array);

    }

    function registerAction (Request $request)
    {
        $user_model = new UserModel();
        $clearSesReg = 0;
        if (Session::getContent('REQUEST_URI') == null):
            Session::setContent('REQUEST_URI', $_SERVER['REQUEST_URI']);
        elseif (Session::getContent('REQUEST_URI') !== $_SERVER['REQUEST_URI']):
            Session::setContent('REQUEST_URI', $_SERVER['REQUEST_URI']);
            $clearSesReg = 1;
        endif;

        if (Session::getContent('formOk') == 1 || $clearSesReg == 1):
            Session::remove('login');
            Session::remove('email');
            Session::remove('password');
            Session::remove('password_repeat');
            Session::remove('formOk');
            Session::remove('first');
            Session::remove('code');
            Session::remove('clearSesReg');
        endif;

        $sql_db = $user_model->find_all();

        parent::isRegFormValid($sql_db);

        $login_for_form = '';
        $email_for_form = '';
        $pass_for_form = '';
        $pass_r_for_form = '';

        if (Session::getContent('login') !== ''):
            $login_for_form = Session::getContent('login');
        endif;

        if (Session::getContent('email') !== ''):
            $email_for_form = Session::getContent('email');
        endif;

        if (Session::getContent('password') !== ''):
            $pass_for_form = Session::getContent('password');
        endif;

        if (Session::getContent('password_repeat') !== ''):
            $pass_r_for_form = Session::getContent('password_repeat');
        endif;

        if (Session::getContent('formOk') == 1):
            $login = Session::getContent('login');
//            $pass_md5 = md5(Session::getContent('password') . 'phpsalt');
//            $email_md5 = md5(Session::getContent('email') . 'phpsalt');
//            $email_ = Session::getContent('email');
//                if ($is_email == 0 && $is_name == 0):
//                    $user_model->insert($login, $pass_md5, $email_md5);
            Session::setContent('registered', "Ви зареєстровані як - {$login}.");
//                endif;
//            endif;
        endif;
        if ($_SERVER['REQUEST_METHOD'] == 'POST'):
            header('location: index.php?route=site/register');
            die;
        endif;

        $array = array(
            'login_for_form'=>$login_for_form,
            'email_for_form' => $email_for_form,
            'pass_for_form' => $pass_for_form,
            'pass_r_for_form' => $pass_r_for_form

            );
        return $this->render('registration.phtml', $array);

    }

    function useroutAction ()
    {

    }


}