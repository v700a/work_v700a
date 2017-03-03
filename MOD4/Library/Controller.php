<?php

namespace Library;

use Library\Session;
use Library\Request;

abstract class Controller
{
    function render ($view, array $array = array())
    {
        extract($array);
        $q = array('Controller', '\\');
        $dir = str_replace($q, '', get_class($this));
        $path = VIEW_DIR . $dir . DS;
        ob_start();
        require $path . $view;
        return ob_get_clean();
    }

    function file_types($c)
    {
        $count = false;
        $array_types = array(
            'image/x-jg',
            'image/bmp',
            'image/x-windows-bmp',
            'image/vnd.dwg',
            'image/x-dwg',
            'image/gif',
            'image/x-icon',
            'image/jpeg',
            'image/pjpeg',
            'image/x-jps',
            'image/x-pict',
            'image/x-pcx',
            'image/pict',
            'image/x-xpixmap',
            'image/png',
            'image/x-quicktime',
            'image/tiff',
            'image/x-tiff',
            'application/octet-stream'
        );
        //        $_SESSION['types'] = $c;
        foreach ($array_types as $type):
            if ($c == $type):
                return $count = true;
            endif;
        endforeach;
        return $count;
    }

    function isLoginFormValid ($name, $pass, $email)
    {
        if (!isset($_POST[$name])):
            $_POST[$name] = null;
        endif;
        if (!isset($_POST[$pass])):
            $_POST[$pass] = null;
        endif;
        if (!isset($_POST[$email])):
            $_POST[$email] = null;
        endif;


        if ($_POST[$name] !== null && $_POST[$pass] !== null && $_POST[$email] !== null):
            return $_POST[$name] && $_POST[$pass] && $_POST[$email];
        elseif ($_POST[$name] !== null || $_POST[$pass] !== null || $_POST[$email] !== null):
            return $_POST[$name] && $_POST[$pass] && $_POST[$email];
        else:
            return null;
        endif;
    }

    function isRegFormValid (array $sql_db)
    {
        $request = new Request();
        $notice = null;
        if ($request->isPostOf('login') == null && Session::getContent('login') == null):
            Session::setMessage("Не заповнено поле - Логін");
            return null;
        elseif ($request->isPostOf('login') !== null):
            Session::setContent('login', $request->isPostOf('login'));
        elseif (Session::getContent('login') !== null):
            if ($sql_db !== null):
                foreach ($sql_db as $value):
                    foreach ($value as $item):
                        if (Session::getContent('login') === $item):
                            Session::setMessage('Користувач з таким іменем уже зареєстрований. Виберіть інше ім\'я.');
                            return null;
                        endif;
                    endforeach;
                endforeach;
            endif;
        endif;

        if ($request->isPostOf('email') == null  && Session::getContent('email') == null):
            Session::setMessage("Не заповнено поле - E-mail");
            return null;
        elseif ($request->isPostOf('email') !== null):
            Session::setContent('email', $request->isPostOf('email'));
        elseif (Session::getContent('email') !== null):
            if ($sql_db !== null):
            $email_ =  Session::getContent('email');
            $email_md5 = md5(Session::getContent('email') . 'phpsalt');
                foreach ($sql_db as $value):
                    foreach ($value as $item):
                        if ($email_md5 === $item):
                           Session::setMessage("E-mail: {$email_} уже використовується.");
                           return;
                        endif;
                    endforeach;
                endforeach;
            endif;
        endif;

        if ($request->isPostOf('password') == null  && Session::getContent('password') == null):
            $notice = "Не заповнено поле - Пароль";
            Session::setMessage($notice);
            return null;
        elseif ($request->isPostOf('password') !== null):
            Session::setContent('password', $request->isPostOf('password'));
        endif;

        if ($request->isPostOf('password_repeat') == null && Session::getContent('password_repeat') == null):
            $notice = "Не заповнено поле - Підтвердження паролю";
            Session::setMessage($notice);
            return null;
        elseif ($request->isPostOf('password_repeat') !== null):
            Session::setContent('password_repeat', $request->isPostOf('password_repeat'));
        endif;

        if (Session::getContent('password') !== Session::getContent('password_repeat')):
            $notice = 'Паролі не співпадають';
            Session::setMessage($notice);
            return null;
        endif;

        if ($request->isPostOf('code') == null && Session::getContent('code') == null):
            $notice = "Не введено код із зображення";
            Session::setMessage($notice);
            return null;
        elseif ($request->isPostOf('code') !== null):
            Session::setContent('code', $request->isPostOf('code'));
            $cap = $_COOKIE["captcha"];
//            echo $cap;
            $code = Session::getContent('code');
            $code = trim($code); // На всякий случай убираем пробелы
            $code = md5($code);
            if ($cap === $code):
            else:
                $notice = "Невірний код із зображення";
                Session::setMessage($notice);
                return null;
            endif;
        endif;
        Session::setContent('formOk', 1);

    }

    function isCommentFormValid (array $array)
    {
        $notice_username = '';
        $notice_email = '';
        $notice_comment_text = '';
        if ($array['username'] == ''):
            $notice_username = '"Логін"';
        endif;
        if ($array['email'] == ''):
            $notice_email = '"E-mail"';
        endif;
        if ($array['comment_text'] == ''):
            $notice_comment_text = '"Текст коментаря"';
        endif;
        if ($notice_username == '' && $notice_email == '' && $notice_comment_text == ''):
            return null;
        else:
            $notice = "Не заповнено поле - {$notice_username}  {$notice_email}  {$notice_comment_text}";
            Session::setMessage($notice);
            return $notice;
        endif;
    }


    function copy_file (array $b)
    {
        $current_dir = getcwd();
        if (@opendir('gallery') == false):
            mkdir('gallery');
        endif;
        $target_path = ($current_dir . '\gallery');
        $v = current($b['name']);
        if ($v !== ''):
            foreach ($b['name'] as $value):
                $file_old_name = $value;
                $value_tmp = current($b['tmp_name']);
                next($b['tmp_name']);
                $value_type = current($b['type']);
                next($b['type']);
                $value_size = current($b['size']);
                next($b['size']);
                $file_tmp_path = $value_tmp;
                $file_name_arr = explode('.', $file_old_name);
                $file_extention = '.' . end($file_name_arr);
                $file_name_new = uniqid() . $file_extention;
                $copy_to = $target_path . '\\' . $file_name_new;
                if (self::file_types($value_type) == true):
                    if ($value_size < 2000000):
                        copy($file_tmp_path, $copy_to);
                    endif;
                endif;
            endforeach;
        endif;
    }


    function delete_files($b)
    {
        $current_dir = getcwd();
        $back_dir = $current_dir;
        if (opendir($current_dir . '\\gallery') == false):
            mkdir($current_dir . '\\gallery');
        endif;
        chdir($current_dir . '\\gallery');
        $current_dir = getcwd();
        $delete_file = '';
        if ( !array_search('reset',$b) && !array_search('all',$b)):
            foreach ($b as $key => $element):
                $count = 1;
                $open_dir = opendir($current_dir);
                if ($key !== 'delete'):
                    while (($item_dir = readdir($open_dir)) !== false):
                        if (is_file($item_dir) == 1):
                            if ($count == $key):
                                $delete_file[] = $item_dir;
                            endif;
                            $count++;
                        endif;
                    endwhile;
                endif;
            endforeach;
            if ($delete_file !== ''):
                foreach ($delete_file as $file):
                    unlink($file);
                endforeach;
            endif;
        endif;
        chdir($back_dir);
    }


}