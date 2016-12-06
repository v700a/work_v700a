<?php

//$pdo = new PDO('mysql: host=localhost; dbname=mvc_group_1009', 'root', '');
$pdo = \Library\ConnectionPDO::getInstance()->getPDO();
session_start();
//var_dump($pdo);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS );
define('VIEW_DIR', ROOT . 'View' . DS);

$content = '';


function __autoload($class_name)
{
    $a = str_replace(['Model', '\\'], '', $class_name);
//    echo $a;    echo '<br>';

    if ($a !== 'PDO'):
    $file = "$class_name.php";
    if (!file_exists($file)):
        echo("Файл {$file} не знайдено");
    endif;

    require $file;
    endif;
}

try {
    $request = new \Library\Request();
//$functions = new functions();

    $route = $request->isGetOf('route', 'site/index');
    $route = explode('/', $route);
    $controller = 'Controller\\' . ucfirst($route[0]) . 'Controller';
    $action = $route[1] . 'Action';
    $controller = new $controller ();
    $content = $controller->$action();
}
catch (\Exception $exception) {

}


require VIEW_DIR . 'layout.phtml';

//echo '<pre>';
//print_r($route);
//echo '<br><br>';
//var_dump($controller);
//echo '<br><br>';
//echo $action;
//echo '</pre>';


//$page_content = $functions->is_get('page');
//if ($page_content !== null):
//require ('/include_files/' . $page_content . '.php');
//endif;
//require ('primary_layout.php');

