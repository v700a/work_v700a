<?php

/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 27.11.2016
 * Time: 22:20
 */
class Request_functions
{

    private $server = array();

    function __construct()
    {
        $this->server = $_SERVER;
    }

    function is_method()
    {
        return $this->server['REQUEST_METHOD'];
    }
}