<?php

namespace Controller;

use \Library\Controller;
use \Model\BookModel;

class BookController extends Controller
{
    public static $limit = 20;
    public static $page = 0;

    //function indexAction ($limit = 20, $page = 0)
    function indexAction ()
    {
        $book = new BookModel();
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }

    function addAction ()
    {
        //$book = new BookModel();
        $array = array();
        return $this->render('add.phtml', $array);
    }

    function editAction ($id, $page = 0)
    {
        $book = new BookModel();
        $count = $book->find_count_all();
        $array_book = $book->find_by_id($id);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('edit.phtml', $array);
    }

    function saveAction ($id, $page = 0)
    {
        $book = new BookModel();
        $book->save_by_id($id);
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }


    function deleteAction ($id, $page_current = 0)
    {
        $book = new BookModel();
        $book->remove_by_id($id);
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages,
            'page_current' => $page_current
        );
        return $this->render('index.phtml', $array);
    }

}