<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 06.12.2016
 * Time: 1:41
 */

namespace Library;


class ConnectionPDO
{
    private $pdo;
    private static $instance = null;
    private function __construct()
    {
//        до розьіщення на сервері
        $this->pdo = new \PDO('mysql: host=localhost; dbname=modul_4', 'root', '');

//        $this->pdo = new \PDO('mysql:host=db19.freehost.com.ua;dbname=vpjuns_module4', 'vpjuns_module4', '60pFbcA9R');
    }

    static function getInstance ()
    {
        if (self::$instance === null):
            self::$instance = new ConnectionPDO();
        endif;

        return self::$instance;
    }

    function getPDO ()
    {
        return $this->pdo;
    }
}