<?php

class functions
{

    function is_post ($a, $b = null)
    {
        return isset($_POST[$a]) ? $_POST[$a] : $b;
    }

    function is_get ($c, $d = null)
    {
        return isset($_GET[$c]) ? $_GET[$c] : $d;
    }

    function is_session ($g)
    {
        return isset($_SESSION[$g]) ? $_SESSION[$g] : null;
    }

    function is_login_form_valid ($name, $pass, $email)
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

    function array_pull_array (array $f)
    {
        $user_sort = '';
        foreach ($f as $value):
            $first_item = '';
            $second_item = '';
            foreach ($value as $key => $item) :
                if ($first_item === '') :
                    $first_item = $item;
                else:
                    $second_item = $item;
                endif;
            endforeach;
            $user_sort [$first_item] = $second_item;
        endforeach;

        return $user_sort;

    }
}
