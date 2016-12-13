<?php

namespace Controller;

use \Library\Controller;
use \Model\CommentFormModel;
use \Library\Functions;

class CommentController extends Controller
{

    function indexAction ()
    {
        $comments_form = new CommentFormModel();
        $function = new Functions();
        $arr_post = '';
        if (!$_POST){
            $_POST = null;
        }


        if ($_POST !== null):
            $arr_post = $_POST;
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


        if (isset($_GET['delete'])):
            $comments_form->delete($_GET);
            header("location: index.php?route=comment/index&msg=delete");
            die;
        endif;

        if (isset($_GET['r_plus']) || isset($_GET['r_minus'])):
            $comments_form->rating_change($_GET);
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