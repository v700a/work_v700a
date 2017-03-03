<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 02.03.2017
 * Time: 12:34
 */

namespace Controller;

use Library\Controller;
use Model\Site;

class PolicyController extends Controller
{
    public static $limit = 10;
    public static $page = 0;

    function indexAction()
    {
        $site = new Site();
        $count = $site->find_count_all('policy');
        $array_site = $site->read_limit('policy', $count, self::$limit, self::$page);
        $count_pages = round($count / self::$limit);
        $array = array(
            'policy' => $array_site,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }

    function readAction ($id, $request)
    {
        $s = new Site();
        $array_s = $s->find_by_id($id, 'policy');
        $array = array(
            'array_s' => $array_s,
        );

        return $this->render('read.phtml', $array);

    }

}