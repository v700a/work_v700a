<?php

namespace Controller;

use \Library\Controller;
use \Model\BookModel;
use \Library\Request;

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
    function readAction ($id)
    {
        $book = new BookModel();
        $count = $book->find_count_all();
        $array_book = $book->find_by_id($id);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );

        return $this->render('read.phtml', $array);

    }
    function sortAction ()
    {
        $book = new BookModel();
        $request = new Request();
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        if ($request->isGetOf('sortById') == 'down'):
            $sortField = 'sortById';
            $sortType = 'down';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByTitle') == 'down'):
            $sortField = 'sortByTitle';
            $sortType = 'down';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByPrice') == 'down'):
            $sortField = 'sortByPrice';
            $sortType = 'down';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByActive') == 'down'):
            $sortField = 'sortByActive';
            $sortType = 'down';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        endif;

        if ($request->isGetOf('sortById') == 'up'):
            $sortField = 'sortById';
            $sortType = 'up';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByTitle') == 'up'):
            $sortField = 'sortByTitle';
            $sortType = 'up';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByPrice') == 'up'):
            $sortField = 'sortByPrice';
            $sortType = 'up';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        elseif ($request->isGetOf('sortByActive') == 'up'):
            $sortField = 'sortByActive';
            $sortType = 'up';
            $array_book = $book->read_limit($count, self::$limit, self::$page, $sortField, $sortType);
        endif;


//        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );

        return $this->render('index.phtml', $array);

    }
}