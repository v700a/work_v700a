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
        if ((int)$this->get == 0):
            return null;
        else:
            return $this->get;
        endif;

    }

    function isGetOf ($c, $d = null)
    {
        return isset($this->get[$c]) ? $this->get[$c] : $d;
    }


    function isPost ()
    {
        if ((int)$this->post == 0):
            return null;
        else:
            return $this->post;
        endif;
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




}