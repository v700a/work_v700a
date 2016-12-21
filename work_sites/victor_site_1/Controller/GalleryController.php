<?php

namespace Controller;

use \Library\Controller;
use \Library\Functions;
use \Library\Request;

class GalleryController extends Controller
{
    function indexAction ()
    {
        $function = new Functions();
        $request = new Request();
        $checked = 0;
        $over = '';
            //if (isset($_COOKIE)):
            //    if (isset($_COOKIE['username_in'])):
                    if (!isset($_FILES['file'])):
                        $_FILES ['file'] = 0;
                    endif;
                    if (isset($_SERVER['CONTENT_LENGTH'])):
                        $all_size = $_SERVER['CONTENT_LENGTH'];
                        if ($all_size >= 8100000):
                            $_SESSION['over_size'] = 1;
                            header("location:/index.php?route=gallery/index");
                            die;
                        endif;
                    endif;

                    if (isset($_SESSION['over_size']) || isset($_SESSION['over_quantity'])):
                        if (isset($_SESSION['over_quantity'])):
                            $over = 'Кількість одночасно завантажуваних файлів не може перевищувати - 19 !';
                            unset($_SESSION['over_quantity']);
                        elseif (isset($_SESSION['over_size'])):
                            $over = 'Об\'єм одночасно завантажуваних файлів не може перевищувати - 8,1 Мб !';
                            unset($_SESSION['over_size']);
                        endif;
                    else:
                        if ($_FILES ['file']!== 0):
                            $arr_tmp = $_FILES ['file'];
                            $arr_in_tmp = $arr_tmp['name'];
                            $count_arr_tmp = count($arr_in_tmp);
                            $over_add_files = '';
                            $all_size = 0;
                            if ($count_arr_tmp > 19):
                                $_SESSION['over_quantity'] = 1;
                                header("location:/index.php?route=gallery/index");
                                die;
                            endif;
                            $function->copy_file ($_FILES['file']);
                        endif;
                    endif;
                    if (array_search('all',$_POST)):
                        $_SESSION['all'] = 1;
                    endif;
                    if (array_search('delete',$_POST)):
                        $function->delete_files($_POST);
                        header("location:/index.php?route=gallery/index");
                        die;
                    endif;
                    if ($_SERVER ['REQUEST_METHOD'] == "POST"):
                        header("location:/index.php?route=gallery/index");
                        die;
                    endif;
           //     endif;
           // endif;
            $array = array(
                'over' => $over
            );
        return $this->render('index.phtml', $array);
    }
}