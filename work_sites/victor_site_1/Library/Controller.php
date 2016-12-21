<?php

namespace Library;


abstract class Controller
{
    function render ($view, array $array = array())
    {
        extract($array);
        $dir = str_replace(['Controller', '\\'], '', get_class($this));
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

}