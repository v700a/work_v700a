<?php

namespace Controller;

use \Library\Controller;
//use \Library\Functions;
use Library\Session;
use Model\Site;
use \Model\User;
use \Library\Request;

class SiteController extends Controller
{
    public static $limit = 5;
    public static $page = 0;

    function indexAction ()
    {
        $array = array();
        $array_db = array('business', 'policy', 'sport', 'science','vacation');
        foreach ($array_db as $value):
            $site = new Site();
            $count = $site->find_count_all($value);
            $array_site = $site->read_limit($value, $count, self::$limit, self::$page);
            $array[$value] = $array_site;
        endforeach;
        return $this->render('index.phtml', $array);
    }

    function loginAction (Request $request)
    {
        $user_model = new User();
        $logerr = null;
        if (Session::getContent('logmsg') == 'log_err'):
            $logerr = "Помилка авторизації! Невірний Логін/Пароль!";
            Session::remove('logmsg');
        endif;
        $login = 0;
        $login_and_id_user = 0;
        if(!isset($_COOKIE['username_in'])):
            if ((parent::isLoginFormValid ('login', 'password', 'email')) !== null) :
                $login = $request->isPostOf('login');
                $password = md5($request->isPostOf('password') . 'phpsalt');
                $email = md5($request->isPostOf('email') . 'phpsalt');
                $db_users = $user_model->find($login, $password, $email);
//                var_dump($db_users);
                $result = 0;
                $login_and_id_user = $login . '-' . $db_users['id'];
                if ($db_users) :
                    setcookie('username_in', $login_and_id_user, time() + 120*60);
//                    header('location: index.php?route=site/login');
//                    die;
                else:
                    Session::setContent('logmsg','log_err');
                    header('location: index.php?route=site/login');
                    die;
                endif;
            endif;
        endif;
//        if ($request->isGetOf('logmsg')):
            if (Session::getContent('logmsg') == 'out'):
                setcookie('username_in',$login_and_id_user, time(0));
                Session::remove('logmsg');
                unset($_COOKIE{'username_in'});
            endif;
//        endif;

        $array = array( 'logerr' => $logerr);

        return $this->render('login.phtml', $array);

    }

    function registerAction (Request $request)
    {
        $user_model = new User();
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
        if ($request->isMethod() == 'POST'):
            parent::isRegFormValid($sql_db);
        endif;
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
            $pass_md5 = md5(Session::getContent('password') . 'phpsalt');
            $email_md5 = md5(Session::getContent('email') . 'phpsalt');
            $email_ = Session::getContent('email');
//                if ($is_email == 0 && $is_name == 0):
                    $user_model->insert($login, $pass_md5, $email_md5);
            Session::setContent('registered', "Ви зареєстровані як - {$login}. Перейдіть на сторінку - \"Авторизація\"");
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

    function readAction ($id, $request)
    {
        $book = new Site();
        $count = $book->find_count_all();
        $array_book = $book->find_by_id($id);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );

        return $this->render('read.phtml', $array);

    }

    function useroutAction ()
    {

    }


}