<?php

namespace Controller;

use \Library\Controller;
use \Model\CommentForm;
use \Library\Request;
use \Library\Session;

class CommentController extends Controller
{

    function indexAction (Request $request)
    {
        $comments_form = new CommentForm();
        if ($request->isPost() !== null):
            $arr_post = $request->isPost();
            $res = parent::isCommentFormValid($arr_post);
            if ($res !== null):
                header("location: index.php?route=comment/index");
                die;
            else:
                $comments_form->add($arr_post);
                Session::setMessage('add');
                Session::setContent('user', $arr_post['username']);
                header("location: index.php?route=comment/index");
                die;
            endif;
        endif;


        if ($request->isGetOf('delete')):
            $comments_form->delete($request->isGet());
            Session::setMessage('delete');
            Session::setContent('user_delete', $request->isGetOf('user_delete'));
            header("location: index.php?route=comment/index");
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