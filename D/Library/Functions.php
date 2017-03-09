<?php

namespace Library;


class Functions extends Controller
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
                if (parent::file_types($value_type) == true):
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
