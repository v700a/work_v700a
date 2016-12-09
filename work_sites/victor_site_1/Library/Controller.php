<?php

namespace Library;


abstract class Controller
{
    function render ($view, array $array = array())
    {
        extract($array);
        echo $count_pages;
        $dir = str_replace(['Controller', '\\'], '', get_class($this));
        $path = VIEW_DIR . $dir . DS;
        ob_start();
        require $path . $view;
        return ob_get_clean();
    }
}