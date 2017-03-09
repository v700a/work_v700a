<?php

namespace Controller;

use \Library\Controller;
use Library\Session;
use \Model\Book;
use \Library\Request;

class BookController extends Controller
{
    public static $limit = 10;
    public static $page = 0;

    //function indexAction ($limit = 20, $page = 0)
    function indexAction ($request)
    {
        if (Session::get('count') == null):
            Session::set('count', 10);
        endif;
        if ($request->isGetOf('count') !== null):
            Session::set('count', $request->isGetOf('count'));
        endif;
        $limit_ = Session::get('count');
        $book = new Book();
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, $limit_, self::$page);
        $count_pages = round($count/$limit_);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }

    function addAction ($request, $page=0)
    {
        //$book = new BookModel();
        $array = array();
        return $this->render('add.phtml', $array);
    }

    function editAction ($id, $request, $page = 0)
    {
        $book = new Book();
        $count = $book->find_count_all();
        $array_book = $book->find_by_id($id);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('edit.phtml', $array);
    }

    function saveAction ($request, $page = 0)
    {
        if ($request['title'] == ''):
            $array = array();
            return $this->render('add.phtml', $array);
        endif;
        $book = new Book();
        //$book->save_by_id($request);
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }


    function deleteAction ($id, $request=[], $page_current = 0)
    {
        $book = new Book();
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
    function readAction ($id, $request)
    {
        $book = new Book();
        $count = $book->find_count_all();
        $array_book = $book->find_by_id($id);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );

        return $this->render('read.phtml', $array);

    }
    function sortAction ($request)
    {
        $book = new Book();
//        $request = new Request();
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