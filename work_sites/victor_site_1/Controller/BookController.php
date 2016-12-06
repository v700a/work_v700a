<?php

namespace Controller;

use \Library\Controller;
use \Model\BookModel;

class BookController extends Controller
{

    function indexAction ()
    {
        $book = new BookModel();
        $book_list = $book->find_all();
     //   print_r($book_list);
        return $this->render('index.phtml', $book_list);

    }
}