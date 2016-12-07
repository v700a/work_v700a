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
        return $this->render('index.phtml', $array);
    }

    function addAction ()
    {
        //$book = new BookModel();
        $array = array();
        return $this->render('add.phtml', $array);
    }

    function editAction ($id)
    {
        $book = new BookModel();
        $array = $book->find_by_id($id);
        return $this->render('edit.phtml', $array);
    }

    function saveAction ($id)
    {
        $book = new BookModel();
        $book->save_by_id($id);
        $array = $book->find_all();
        return $this->render('index.phtml', $array);
    }


    function deleteAction ($id)
    {
        $book = new BookModel();
        $book->remove_by_id($id);
        $array = $book->find_all();
        return $this->render('index.phtml', $array);
    }

    function cancelAction ()
    {
        $book = new BookModel();
        $array = $book->find_all();
        return $this->render('index.phtml', $array);
    }
}