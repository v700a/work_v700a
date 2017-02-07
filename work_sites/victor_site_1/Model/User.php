<?php

namespace Model;

use Library\ConnectionPDO;

class User
{

    function find_all()
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $result_find_all = null;
        $result_find_all = $pdo->query("SELECT * FROM user");
        return $result_find_all->fetchAll(\PDO::FETCH_ASSOC);
    }

    function find($name, $pass, $email)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_find = $pdo->prepare("SELECT * FROM user WHERE name = :name AND password = :pass 
                                            AND email = :email");
        $sql_query_string_find->execute(compact('name', 'pass', 'email'));
        return $sql_query_string_find->fetch(\PDO::FETCH_ASSOC);
    }

    function insert ($name, $pass, $email)
    {
        $pdo = ConnectionPDO::getInstance()->getPDO();
        $sql_query_string_insert = $pdo->prepare("INSERT INTO user (name, password, email) VALUES (:name, :pass, :email)");
        $sql_query_string_insert->execute(compact('name','pass','email'));
    }

}
