<?php

function find_comments_all()
{
    global $pdo;
    $result_query_find = $pdo -> query("SELECT * FROM comment");
    return $result_query_find->fetchAll(PDO::FETCH_ASSOC);
}

function validation_comments_form (array $array)
{
    $notice_username = '';
    $notice_email = '';
    $notice_comment_text = '';
    if ($array['username'] == ''):
        $notice_username = '"Логін"';
    endif;
    if ($array['email'] == ''):
        $notice_email = '"E-mail"';
    endif;
    if ($array['comment_text'] == ''):
        $notice_comment_text = '"Текст коментаря"';
    endif;
    if ($notice_username == '' && $notice_email == '' && $notice_comment_text == ''):
        return;
    else:
        return "<h3>Не заповнено поле - {$notice_username}  {$notice_email}  {$notice_comment_text}</h3>";
    endif;
}

function add_comment(array $add_comment)
{
    global $pdo;
        $add_comment_user = $add_comment['username'];
        $add_comment_email = $add_comment['email'];
        $add_comment_text = $add_comment['comment_text'];
        $sql_query_string_insert = $pdo->prepare("INSERT INTO book (username, email, comment_text) 
                                                  VALUES ( :add_comment_user, :add_comment_email,
                                                           :add_comment_text)");
        $sql_query_string_insert->execute(compact('add_comment_user', 'add_comment_email', 'add_comment_text'));
}