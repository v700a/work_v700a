<?php

namespace Model;

use \Library\ConnectionPDO;

class BookModel
{
//    private static $pdo;
//
//    function __construct()
//    {
//        self::$pdo = ConnectionPDO::getInstance()->getPDO();
//    }

    function find_count_all()
    {
        global $pdo;
        //var_dump(self::$pdo);
        $re = $pdo->query("SELECT COUNT(*) as count FROM book");
        $w = $re->fetch(\PDO::FETCH_ASSOC);
        return $w['count'];
    }
    function read_limit($count, $limit=1, $page = 0)
    {
        global $pdo;
        if ($page !== 0):
            $offset = ($page - 1) * $limit;
        else:
            $offset = $page;
        endif;
        $c = round($count/$limit);
        echo $c;
        $result_query_find = $pdo -> query("SELECT * FROM book LIMIT $offset, $limit");
        return $result_query_find->fetchAll(\PDO::FETCH_ASSOC);
    }

    function find_by_id($id)
    {
        global $pdo;
        $sql_query_string_find = $pdo->prepare("SELECT * FROM book WHERE id = :id");
        $sql_query_string_find->execute(compact('id'));
        return $sql_query_string_find->fetch(\PDO::FETCH_ASSOC);
    }

    function remove_by_id($id)
    {
        global $pdo;
        $sql_query_string_find = $pdo->prepare("DELETE FROM book WHERE id = :id");
        $sql_query_string_find->execute(compact('id'));
        return $sql_query_string_find;
    }

    function save_by_id(array $update_book)
    {
        global $pdo;
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

