<?php

namespace Model;

class CommentFormModel
{

    function find_all()
    {
        global $pdo;
        $result_query_find = $pdo -> query("SELECT * FROM comment");
        return $result_query_find->fetchAll(\PDO::FETCH_ASSOC);
    }


    function add(array $add_comment)
    {
        global $pdo;
        $add_comment_user = $add_comment['username'];
        $add_comment_email = $add_comment['email'];
        $add_comment_text = $add_comment['comment_text'];
        $add_timestamp = date(DATE_RFC822);
        if (isset($add_comment['email_on'])):
            $add_comment_email_on = $add_comment['email_on'];
            $sql_query_string_insert = $pdo->prepare("INSERT INTO comment (username, email, comment_text, 
                                                                            checkbox_state, time_stamp) 
                                                  VALUES ( :add_comment_user, :add_comment_email,
                                                           :add_comment_text, :add_comment_email_on, :add_timestamp)");
            $sql_query_string_insert->execute(compact('add_comment_user', 'add_comment_email', 'add_comment_text',
                'add_comment_email_on', 'add_timestamp'));
        else:
            $sql_query_string_insert = $pdo->prepare("INSERT INTO comment (username, email, comment_text, time_stamp) 
                                                  VALUES ( :add_comment_user, :add_comment_email,
                                                           :add_comment_text, :add_timestamp)");
            $sql_query_string_insert->execute(compact('add_comment_user', 'add_comment_email', 'add_comment_text', 'add_timestamp'));
        endif;
    }

    function rating_change(array $rating)
    {
        global $pdo;
        if (isset($rating['r_plus'])):
            $comment_id = $rating['r_plus'];
            $find_comment_by_id =$pdo->prepare("SELECT * FROM comment WHERE id = :comment_id");
            $find_comment_by_id->execute(compact('comment_id'));
        elseif (isset($rating['r_minus'])):
            $comment_id = $rating['r_minus'];
            $find_comment_by_id =$pdo->prepare("SELECT * FROM comment WHERE id = :comment_id");
            $find_comment_by_id->execute(compact('comment_id'));
        endif;
        $res_find = $find_comment_by_id->fetch(\PDO::FETCH_ASSOC);

//    print_r($res_find);

        if (isset($rating['r_plus'])):
            $rating_comment = $res_find['rating'];
            $rating_comment = $rating_comment + 1;
            $rating_comment_cahge = $pdo->prepare("UPDATE comment SET rating = :rating_comment WHERE id = :comment_id");
            $rating_comment_cahge->execute(compact('rating_comment','comment_id'));
        elseif (isset($rating['r_minus'])):
            $rating_comment = $res_find['rating'];
            $rating_comment = $rating_comment - 1;
            $rating_comment_cahge = $pdo->prepare("UPDATE comment SET rating = :rating_comment WHERE id = :comment_id");
            $rating_comment_cahge->execute(compact('rating_comment','comment_id'));
        endif;
    }

    function delete(array $delete_comment)
    {
        global $pdo;
        if (isset($delete_comment['delete'])):
            $delete_comment_id = $delete_comment['delete'];
            $sql_query_string_insert = $pdo->prepare("DELETE FROM comment WHERE id = :delete_comment_id");
            $sql_query_string_insert->execute(compact('delete_comment_id'));
        else:
        endif;
    }
}