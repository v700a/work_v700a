<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 02.03.2017
 * Time: 0:25
 */

namespace Controller;


use Library\Controller;
use Model\Site;

class BusinessController extends Controller
{
    public static $limit = 10;
    public static $page = 0;

    function indexAction ()
    {
            $site = new Site();
            $count = $site->find_count_all('business');
            $array_site = $site->read_limit('business', $count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
                'business' => $array_site,
                'count_pages' => $count_pages
            );
        return $this->render('index.phtml', $array);
    }

    function readAction ($id, $request)
    {
        $s = new Site();
        $array_s = $s->find_by_id($id, 'business');
        $array = array(
            'array_s' => $array_s,
        );

        return $this->render('read.phtml', $array);

    }

}
