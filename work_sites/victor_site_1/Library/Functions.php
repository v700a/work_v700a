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


}
