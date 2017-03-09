<?php

namespace Model;

use \Library\ConnectionPDO;

class Book
{

    function find_count_all()
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $re = $pdo->query("SELECT COUNT(*) as count FROM book");
        $w = $re->fetch(\PDO::FETCH_ASSOC);
        return $w['count'];
    }
    function find_count_all_sort_by($sort, $sortValue)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();

        $re = $pdo->query("SELECT FROM book");

        if ($sort == 'sortById' && $sortValue == 'down'):
            $re = $pdo->query("SELECT * FROM book ORDER BY id DESC");
        elseif ($sort == 'sortByTitle' && $sortValue == 'down'):
            $re = $pdo->query("SELECT * FROM book ORDER BY title DESC");
        elseif ($sort == 'sortByPrice' && $sortValue == 'down'):
            $re = $pdo->query("SELECT * FROM book ORDER BY price DESC");
        elseif ($sort == 'sortByActive' && $sortValue == 'down'):
            $re = $pdo->query("SELECT * FROM book ORDER BY is_active DESC");
        endif;

        if ($sort == 'sortById' && $sortValue == 'up'):
            $re = $pdo->query("SELECT * FROM book ORDER BY id");
        elseif ($sort == 'sortByTitle' && $sortValue == 'up'):
            $re = $pdo->query("SELECT * FROM book ORDER BY title");
        elseif ($sort == 'sortByPrice' && $sortValue == 'up'):
            $re = $pdo->query("SELECT * FROM book ORDER BY price");
        elseif ($sort == 'sortByActive' && $sortValue == 'up'):
            $re = $pdo->query("SELECT * FROM book ORDER BY is_active");
        endif;
        $w = $re->fetch(\PDO::FETCH_ASSOC);
        return $w;
    }
    function read_limit($count, $limit=1, $page = 0, $sort = 'sortById', $sortValue = 'none')
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        if ($page !== 0):
            $offset = ($page - 1) * $limit;
        else:
            $offset = $page;
        endif;
        $c = round($count/$limit);
        $sortField = 'id';
        $sortType = '';
        //var_dump(self::$pdo);
        if ($sort == 'sortById' && $sortValue == 'down'):
            $sortField = 'id';
            $sortType = 'DESC';
        elseif ($sort == 'sortByTitle' && $sortValue == 'down'):
            $sortField = 'title';
            $sortType = 'DESC';
        elseif ($sort == 'sortByPrice' && $sortValue == 'down'):
            $sortField = 'price';
            $sortType = 'DESC';
//        elseif ($sort == 'sortByActive' && $sortValue == 'down'):
//            $sortField = 'is_action';
//            $sortType = 'DESC';
        endif;

        if ($sort == 'sortById' && $sortValue == 'up'):
            $sortField = 'id';
            $sortType = '';
        elseif ($sort == 'sortByTitle' && $sortValue == 'up'):
            $sortField = 'title';
            $sortType = '';
        elseif ($sort == 'sortByPrice' && $sortValue == 'up'):
            $sortField = 'price';
            $sortType = '';
//        elseif ($sort == 'sortByActive' && $sortValue == 'up'):
//            $sortField = 'is_action';
//            $sortType = '';
        endif;

        $result_query_find = $pdo -> query("SELECT * FROM book ORDER BY $sortField $sortType LIMIT $offset, $limit");
        return $result_query_find->fetchAll(\PDO::FETCH_ASSOC);
    }

    function find_by_id($id)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_find = $pdo->prepare("SELECT * FROM book WHERE id = :id");
        $sql_query_string_find->execute(compact('id'));
        return $sql_query_string_find->fetch(\PDO::FETCH_ASSOC);
    }

    function remove_by_id($id)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_find = $pdo->prepare("DELETE FROM book WHERE id = :id");
        $sql_query_string_find->execute(compact('id'));
        return $sql_query_string_find;
    }

    function save_by_id(array $update_book)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $update_book_id = $update_book['id'];
        $sql_query_string_find = $pdo->prepare("SELECT id FROM book WHERE id = :update_book_id");
        $sql_query_string_find->execute(compact('update_book_id'));
        $result_fetch_assoc = $sql_query_string_find->fetch(\PDO::FETCH_ASSOC);
        if ($result_fetch_assoc !== false):
            $update_book_title = $update_book['title'];
            $update_book_description = $update_book['description'];
            $update_book_price = $update_book['price'];
            $update_book_is_active = $update_book['is_active'];
            $sql_query_string_update = $pdo->prepare("UPDATE book SET title = :update_book_title, description = :update_book_description,
                                  price = :update_book_price, is_active = :update_book_is_active 
                                  WHERE id = :update_book_id");
            $sql_query_string_update->execute(compact('update_book_title','update_book_description','update_book_price','update_book_is_active','update_book_id'));
        else:
            if (isset($update_book['title'])):
                if ($update_book['title'] !== '' && $update_book['title'] !== null):
                    $insert_book_title = $update_book['title'];
                    $insert_book_description = $update_book['description'];
                    $insert_book_price = $update_book['price'];
                    $insert_book_is_active = $update_book['is_active'];
                    $sql_query_string_insert = $pdo->prepare("INSERT INTO book (title, description, price, is_active) VALUES ( :insert_book_title, :insert_book_description,
                                  :insert_book_price, :insert_book_is_active)");
                    $sql_query_string_insert->execute(compact('insert_book_title', 'insert_book_description', 'insert_book_price', 'insert_book_is_active'));
                endif;
            endif;
        endif;
    }


}

