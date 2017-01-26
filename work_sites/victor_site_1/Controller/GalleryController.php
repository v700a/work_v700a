<?php

namespace Controller;

use \Library\Controller;
//use \Library\Functions;
use \Library\Request;

class GalleryController extends Controller
{
    function indexAction (Request $request)
    {
//        $function = new Functions();
//        $request = new Request();
        $checked = 0;
        $over = '';
            //if (isset($_COOKIE)):
            //    if (isset($_COOKIE['username_in'])):
                    if ($request->isFilesOf('file') == null):
                        $_FILES ['file'] = 0;
                    endif;
                    if ($request->isServerOf('CONTENT_LENGTH')):
                        $all_size = $request->isServerOf('CONTENT_LENGTH');
                        if ($all_size >= 8100000):
                            $_SESSION['over_size'] = 1;
                            header("location:/index.php?route=gallery/index");
                            die;
                        endif;
                    endif;

                    if ($request->isSsessionOf('over_size') || $request->isSsessionOf('over_quantity')):
                        if ($request->isSsessionOf('over_quantity')):
                            $over = 'Кількість одночасно завантажуваних файлів не може перевищувати - 19 !';
                            unset($_SESSION['over_quantity']);
                        elseif ($request->isSsessionOf('over_size')):
                            $over = 'Об\'єм одночасно завантажуваних файлів не може перевищувати - 8,1 Мб !';
                            unset($_SESSION['over_size']);
                        endif;
                    else:
                        if ($request->isFilesOf('file')!== null):
                            $arr_tmp = $request->isFilesOf('file');
                            $arr_in_tmp = $arr_tmp['name'];
                            $count_arr_tmp = count($arr_in_tmp);
                            $over_add_files = '';
                            $all_size = 0;
                            if ($count_arr_tmp > 19):
                                $_SESSION['over_quantity'] = 1;
                                header("location:/index.php?route=gallery/index");
                                die;
                            endif;
                            $function->copy_file ($request->isFilesOf('file'));
                        endif;
                    endif;
                    if ($request->isPost() !== null):
                        if (array_search('all',$request->isPost())):
                            $_SESSION['all'] = 1;
                        endif;
                        if (array_search('delete',$request->isPost())):
                            delete_files($request->isPost());
//                            $function->delete_files($request->isPost());
                            header("location:/index.php?route=gallery/index");
                            die;
                        endif;
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