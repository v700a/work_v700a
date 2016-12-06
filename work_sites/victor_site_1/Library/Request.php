<?php

namespace Library;

class Request
{

    private $server = array();
    private $get = array();
    private $post = array();
    private $session = array();

    function __construct()
    {
        $this->server = $_SERVER;
        $this->get = $_GET;
        $this->post = $_POST;
        $this->session = $_SESSION;
    }

    function isMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }

    function isPostOf ($a, $b = null)
    {
        return isset($this->post[$a]) ? $this->post[$a] : $b;
    }

    function isGetOf ($c, $d = null)
    {
        return isset($this->get[$c]) ? $this->get[$c] : $d;
    }

    function isSsessionOf ($e, $f=null)
    {
        return isset($this->session[$e]) ? $this->session[$e] : $f;
    }

    function issetSsession ()
    {
        return isset($this->session) ? $this->session : null;
    }

}