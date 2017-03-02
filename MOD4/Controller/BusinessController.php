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
        $array = array();
//        $db = 'business';
//        foreach ($array_db as $value):
            $site = new Site();
            $count = $site->find_count_all('business');
            $array_site = $site->read_limit('business', $count, self::$limit, self::$page);
//            $array_site_all[] = $array_site;
        $count_pages = round($count/self::$limit);
        $array = array(
                'business' => $array_site,
                'count_pages' => $count_pages
            );
//        $count_pages = round($count/self::$limit);
//        $array = array(
//            'array_book' => $array_book,
//            'count_pages' => $count_pages
//        );
//        endforeach;
//        var_dump($array);
//        $array = array(
//            'array_site_all' => $array_site_all
//        );

//        return $this->render('index.phtml', $array);
        return $this->render('index.phtml', $array);
    }

}