<?php

namespace Library;

class Request
{

    private $server = array();
    private $get = array();
    private $post = array();
    private $session = array();
    private $files = array();

    function __construct()
    {
        $this->server = $_SERVER;
        $this->get = $_GET;
        $this->post = $_POST;
        $this->session = $_SESSION;
        $this->files = $_FILES;
    }

    function isMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }


    function isGet ()
    {
        return isset($this->get) ? $this->get : null;
    }

    function isGetOf ($c, $d = null)
    {
        return isset($this->get[$c]) ? $this->get[$c] : $d;
    }


    function isPost ()
    {
        return isset($this->post) ? $this->post : null;
    }

    function isPostOf ($a, $b = null)
    {
        return isset($this->post[$a]) ? $this->post[$a] : $b;
    }


    function isFiles ()
    {
        return isset($this->files) ? $this->files : null;
    }

    function isFilesOf ($g, $f = null)
    {
        return isset($this->files[$g]) ? $this->files[$g] : $f;
    }


    function isServer ()
    {
        return isset($this->server) ? $this->server : null;
    }

    function isServerOf ($i, $j = null)
    {
        return isset($this->server[$i]) ? $this->server[$i] : $j;
    }


    function isSsession ()
    {
        return isset($this->session) ? $this->session : null;
    }

    function isSsessionOf ($e, $f=null)
    {
        return isset($this->session[$e]) ? $this->session[$e] : $f;
    }



}