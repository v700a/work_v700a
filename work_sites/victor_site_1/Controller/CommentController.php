<?php

namespace Controller;

use \Library\Controller;
use \Model\CommentFormModel;
use \Library\Functions;
use \Library\Request;

class CommentController extends Controller
{

    function indexAction (Request $request)
    {
        $comments_form = new CommentFormModel();
        $function = new Functions();
        $arr_post = '';
//        if (!$_POST){
//            $_POST = null;
//        }

//        var_dump($request->isPost());
//        var_dump($request->isGet());
//        var_dump(isset($_POST));
////        var_dump($GLOBALS);
//        die;
        if ($request->isPost() !== null):
            $arr_post = $request->isPost();
            $res = $function->isCommentFormValid($arr_post);
            if ($res !== null):
                header("location: index.php?route=comment/index&msg=$res");
                die;
            else:
                $comments_form->add($arr_post);
                $user = $arr_post['username'];
                header("location: index.php?route=comment/index&msg=add&user={$user}");
                die;
            endif;
        endif;


        if ($request->isGetOf('delete')):
            $comments_form->delete($request->isGet());
            header("location: index.php?route=comment/index&msg=delete");
            die;
        endif;

        if ($request->isGetOf('r_plus') || $request->isGetOf('r_minus')):
            $comments_form->rating_change($request->isGet());
            header("location: index.php?route=comment/index");
            die;
        endif;


        $find_comments = $comments_form->find_all();
        $array = array(
            'find_comments' => $find_comments
        );

        return $this->render('index.phtml', $array);

    }

}