<?php


function find_user_all()
{
    global $link;
    $result_fetch_find_arr = null;
    $sql_query_string_find = "SELECT * FROM user";
//    $sql_query_string_find = "SELECT * FROM user WHERE name = '{$name}' AND password = '{$pass}' AND email = '{$email}'";
    $result_query_find = mysqli_query($link, $sql_query_string_find);
    while (($s = mysqli_fetch_assoc($result_query_find))!== null):
        $result_fetch_find_arr[] = $s;
    endwhile;
    return $result_fetch_find_arr;
}
function find_user($log, $pass, $email)
{
    global $link;
    $sql_query_string_find = "SELECT * FROM user WHERE name = '$log' AND password = '$pass' AND email = '$email'";
//    $sql_query_string_find = "SELECT * FROM user WHERE name = '{$name}' AND password = '{$pass}' AND email = '{$email}'";
    $result_query_find = mysqli_query($link, $sql_query_string_find);
    $result_fetch_find = mysqli_fetch_assoc($result_query_find);
    return $result_fetch_find;
}

function insert_user ($name, $pass, $email)
{
    global $link;
    $sql_query_string_insert = "INSERT INTO user (name, password, email) VALUES ('$name', '$pass', '$email')";
    $sql_query_string_insert_esc = mysqli_real_escape_string ($link, $sql_query_string_insert);
    echo "$sql_query_string_insert";
//    $result_query_insert =
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться: %s\n", mysqli_connect_error());
        exit();
    }
//      mysqli_query($link, $sql_query_string_insert_esc);
//    $result_fetch_insert = mysqli_fetch_assoc($result_query_insert);
    return mysqli_query($link, $sql_query_string_insert);
}