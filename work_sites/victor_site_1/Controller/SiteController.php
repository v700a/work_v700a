<?php

namespace Controller;

use \Library\Controller;

class SiteController extends Controller
{
    function indexAction ()
    {

        return $this->render('index.phtml');
    }

    function loginAction ()
    {
        return $this->render('login.phtml');

    }

    function registerAction ()
    {
        return $this->render('registration.phtml');

    }

    function useroutAction ()
    {

    }


}