<?php
class book_model
{

    function find_all()
    {
        global $pdo;
        $result_query_find = $pdo -> query("SELECT * FROM book");
        return $result_query_find->fetchAll(PDO::FETCH_ASSOC);
    }

    function find_by_id($id)
    {
        global $pdo;
        $sql_query_string_find = $pdo->prepare("SELECT * FROM book WHERE id = :id");
        $sql_query_string_find->execute(compact('id'));
        return $sql_query_string_find->fetch(PDO::FETCH_ASSOC);
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
        $result_fetch_assoc = $sql_query_string_find->fetch(PDO::FETCH_ASSOC);
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

