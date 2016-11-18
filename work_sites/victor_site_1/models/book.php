<?php

function find_book_all()
{
    global $link;
    $result_fetch_find_arr = null;
    $sql_query_string_find = "SELECT * FROM book";
    $result_query_find = mysqli_query($link, $sql_query_string_find);
    while (($result_fetch_assoc = mysqli_fetch_assoc($result_query_find))!== null):
        $result_fetch_find_arr[] = $result_fetch_assoc;
    endwhile;
    return $result_fetch_find_arr;
}

function find_book_by_id($id_book)
{
    global $link;
    $result_fetch_find_arr = null;
    $sql_query_string_find = "SELECT * FROM book WHERE id = '$id_book'";
    $result_query_find = mysqli_query($link, $sql_query_string_find);
    $result_fetch_assoc = mysqli_fetch_assoc($result_query_find);
    $result_fetch_find_arr[] = $result_fetch_assoc;
    return $result_fetch_find_arr;
}

function remove_book_by_id($id_book)
{
    global $link;
    $result_fetch_find_arr = null;
    $sql_query_string_find = "DELETE FROM book WHERE id = '$id_book'";
    $result_query_delete = mysqli_query($link, $sql_query_string_find);
    //$result_fetch_assoc = mysqli_fetch_assoc($result_query_find);
    //$result_fetch_find_arr[] = $result_fetch_assoc;
    return $result_query_delete;
}

function save_book_by_id(array $update_book)
{
    global $link;
    $update_book_id = $update_book['id'];
    $sql_query_string_find = "SELECT id FROM book WHERE id = '$update_book_id'";
    $result_query_find = mysqli_query($link, $sql_query_string_find);
    $result_fetch_assoc = mysqli_fetch_assoc($result_query_find);
    if ($result_fetch_assoc !== null):
//        $i = 1;
//        foreach ($update_book as $key => $value):
//            $key.$i = $key;
//            $value.$i = $value;
//            $i++;
//        endforeach;
        $update_book_title = $update_book['title'];
        $update_book_description = $update_book['description'];
        $update_book_price = $update_book['price'];
        $update_book_is_active = $update_book['is_active'];
        $sql_query_string_update = "UPDATE book SET title = '$update_book_title', description = '$update_book_description',
                                  price = '$update_book_price', is_active = '$update_book_is_active' 
                                  WHERE id = '$update_book_id'";
        $result_query_find = mysqli_query($link, $sql_query_string_update);
    else:
        $insert_book_title = $update_book['title'];
        $insert_book_description = $update_book['description'];
        $insert_book_price = $update_book['price'];
        $insert_book_is_active = $update_book['is_active'];
        $sql_query_string_insert = "INSERT INTO book VALUES ( '$insert_book_title', '$insert_book_description',
                                  '$insert_book_price', '$insert_book_is_active')";
        $result_query_find = mysqli_query($link, $sql_query_string_insert);
    endif;
    return $result_query_find;
}

