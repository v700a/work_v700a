<?php

namespace Controller;

use \Library\Controller;
use \Model\BookModel;

class BookController extends Controller
{

    function indexAction ()
    {
        $book = new BookModel();
        $array = $book->find_all();
     //   print_r($book_list);
        return $this->render('index.phtml', $array);

    }

    function editAction ($id)
    {

     //   echo 'edit',$id;
        $book = new BookModel();
        $array = $book->find_by_id($id);
        return $this->render('edit.phtml', $array);

        //   print_r($book_list);
     //   return $this->render('index.phtml', $book_list);

    }

    function deleteAction ($id)
    {
        echo 'delete - ',$id;

    }
}