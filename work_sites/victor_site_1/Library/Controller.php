<?php

namespace Library;


abstract class Controller
{
    function render ($view, array $book_list = array())
    {
        //extract($array);
        $dir = str_replace(['Controller', '\\'], '', get_class($this));
        $path = VIEW_DIR . $dir . DS;
        ob_start();
        require $path . $view;
        return ob_get_clean();
    }
}