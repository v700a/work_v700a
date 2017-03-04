<?php


namespace Library;


class ConnectionPDO
{
    private $pdo;
    private static $instance = null;
    private function __construct()
    {

        $this->pdo = new \PDO('mysql:host=db19.freehost.com.ua;dbname=vpjuns_module4', 'vpjuns_module4', '60pFbcA9R');
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