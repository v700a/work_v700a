<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 02.03.2017
 * Time: 13:05
 */

namespace Controller;

use Library\Controller;
use Model\Site;


class ScienceController extends Controller
{
    public static $limit = 10;
    public static $page = 0;

    function indexAction ()
    {
        $site = new Site();
        $count = $site->find_count_all('science');
        $array_site = $site->read_limit('science', $count, self::$limit, self::$page);
        $count_pages = round($count/self::$limit);
        $array = array(
            'science' => $array_site,
            'count_pages' => $count_pages
        );
        return $this->render('index.phtml', $array);
    }

    function readAction ($id, $request)
    {
        $s = new Site();
        if (isset($_COOKIE['username_in'])):
            $d = explode('-', $_COOKIE['username_in']);
            $name_user = $d['0'];
        endif;
        $id_news_feed = $request->isGetOf('description');
        $id_news = $request->isPostOf('id_news');
        $feed = $request->isPostOf('feed');
        $category_news = $request->isPostOf('category_news');
        $id_user = $request->isPostOf('id_user');
        if ($feed !== null && $feed !== ''):
            $array_feed_for_save = array(
                'id_news' =>  $id_news,
                'feed' => $feed,
                'category_news' => $category_news,
                'id_user' => $id_user,
                'name_user' => $name_user
            );
            $s->save_feed_by_id($array_feed_for_save);
        endif;
        $array_s = $s->find_by_id($id, 'science');
        $array_feed = $s->find_feed_by_id($id_news_feed, 'science');
        $array = array(
            'array_s' => $array_s,
            'array_feed' => $array_feed
        );

        return $this->render('read.phtml', $array);
    }


}