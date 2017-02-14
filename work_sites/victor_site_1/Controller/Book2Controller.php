<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 06.02.2017
 * Time: 12:41
 */

namespace Controller;

use \Library\Controller;
use \Model\Book2Repositiry;
use \Library\Request;


class Book2Controller extends Controller
{
    public static $limit = 14;
    public static $page = 0;

    //function indexAction ($limit = 20, $page = 0)
    function indexAction ($request)
    {
        $book = new Book2Repositiry();
        $count = $book->find_count_all();
        $array_book = $book->read_limit($count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'array_book' => $array_book,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }

    function addAction ($request, $page)
    {
        //$book = new BookModel();
        $array = array();
        return $this->render('add.phtml', $array);
    }

    function editAction ($id, $request, $page = 0)
    {
        $book = new Book2Repositiry();
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
        $book = new Book2Repositiry();
        $book->save_by_id($request);
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
        $book = new Book2Repositiry();
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
        $book = new Book2Repositiry();
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
        $book = new Book2Repositiry();
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