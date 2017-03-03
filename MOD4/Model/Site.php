<?php

namespace Model;

use \Library\ConnectionPDO;

class Site
{

    function find_all($table)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $re = $pdo->query("SELECT * FROM $table");
        $w = $re->fetch(\PDO::FETCH_ASSOC);
        return $w;
    }
    function find_count_all($table)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $re = $pdo->query("SELECT COUNT(*) as count FROM $table");
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
    function read_limit($db, $count, $limit=1, $page = 0, $sort = '', $sortValue = '')
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        if ($page !== 0):
            $offset = ($page - 1) * $limit;
        else:
            $offset = $page;
        endif;
        $c = round($count/$limit);
        $sortField = 'time_stamp';
        $sortType = 'DESC';

        $result_query_find = $pdo -> query("SELECT * FROM $db ORDER BY $sortField $sortType LIMIT $offset, $limit");
        return $result_query_find->fetchAll(\PDO::FETCH_ASSOC);
    }

    function find_by_id($id, $table)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_find = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
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

    function find_feed_by_id($id_news, $category)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_find = $pdo->query("SELECT * FROM feedback WHERE category_news = '$category' AND id_news = '$id_news'
        ORDER BY `feedback`.`time_stamp` DESC");
        if ($sql_query_string_find !== false):
           return $sql_query_string_find->fetchAll(\PDO::FETCH_ASSOC);
        else:
            return null;
        endif;
    }


    function save_feed_by_id(array $update_feed)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
//        $update_feed_id = $update_feed['id'];
//        $sql_query_string_find = $pdo->prepare("SELECT id FROM book WHERE id = :update_book_id");
//        $sql_query_string_find->execute(compact('update_book_id'));
//        $result_fetch_assoc = $sql_query_string_find->fetch(\PDO::FETCH_ASSOC);
//        if ($result_fetch_assoc !== false):
//            $update_feed_title = $update_feed['title'];
//            $update_feed_description = $update_feed['description'];
//            $update_feed_price = $update_feed['price'];
//            $update_feed_is_active = $update_feed['is_active'];
//            $sql_query_string_update = $pdo->prepare("UPDATE book SET title = :update_book_title, description = :update_book_description,
//                                  price = :update_book_price, is_active = :update_book_is_active 
//                                  WHERE id = :update_book_id");
//            $sql_query_string_update->execute(compact('update_book_title','update_book_description','update_book_price','update_book_is_active','update_book_id'));
//        else:
//            if (isset($update_feed['title'])):
//                if ($update_feed['title'] !== '' && $update_feed['title'] !== null):
//        echo 555555555555555;
//        var_dump($update_feed);
//        var_dump($pdo);
                    $insert_feed_id_news = $update_feed['id_news'];
                    $insert_feed_category_news = $update_feed['category_news'];
                    $insert_feed_id_user = $update_feed['id_user'];
                    $insert_feed_user_comment = $update_feed['feed'];
                    $insert_feed_user_rating_user = 0; //$update_feed['feed'];
                    $insert_feed_name_user = $update_feed['name_user'];

                    $sql_query_string_insert = $pdo->prepare("INSERT INTO feedback (id_news, category_news, id_user, user_comment,
                        rating_user, name_user) VALUES ( :insert_feed_id_news, :insert_feed_category_news, :insert_feed_id_user, 
                        :insert_feed_user_comment, :insert_feed_user_rating_user, :insert_feed_name_user)");
                    $sql_query_string_insert->execute(compact('insert_feed_id_news', 'insert_feed_category_news',
                        'insert_feed_id_user', 'insert_feed_user_comment', 'insert_feed_user_rating_user', 'insert_feed_name_user'));
//                endif;
//            endif;
//        endif;
    }


}

