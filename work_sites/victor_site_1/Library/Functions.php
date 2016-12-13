<?php

namespace Library;

class Functions
{


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
            return;
        else:
            $notice = "Не заповнено поле - {$notice_username}  {$notice_email}  {$notice_comment_text}";
            return $notice;
        endif;
    }


}
