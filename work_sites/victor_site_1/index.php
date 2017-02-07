<?php

//$pdo = \Library\ConnectionPDO::getInstance()->getPDO();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS );
define('VIEW_DIR', ROOT . 'View' . DS);

$content = '';

function __autoload($class_name)
{

    $file = "$class_name.php";
    if (!file_exists($file)):
        echo("Файл {$file} не знайдено");
    endif;

    require $file;
}

try {
    \Library\Session::sessionStart();
    $request = new \Library\Request();
    $route = $request->isGetOf('route', 'site/index');
    $id = $request->isGetOf('id');
    $page = $request->isGetOf('page');
    $route = explode('/', $route);
    $controller = 'Controller\\' . ucfirst($route[0]) . 'Controller';
    $action = $route[1] . 'Action';
    $controller = new $controller ();
    if ($request->isPostOf('save') !== null):
        if ($request->isPostOf('title') == ''):
            throw new Exception('Не заповнено поле "Назва книги"');
        endif;
        $action = 'saveAction';
        $content = $controller->$action($request->isPost());
    elseif ($request->isGetOf('description') !== null):
        $read = $request->isGetOf('description');
        $content = $controller->$action($read, $request);
    elseif ($request->isPostOf('cancel') !== null):
        $action = 'indexAction';
        $content = $controller->$action($request);
    elseif ($request->isGetOf('page') !== null && $request->isGetOf('id') == null):
        \Controller\BookController::$page = $request->isGetOf('page');
        \Controller\Book2Controller::$page = $request->isGetOf('page');
        $action = 'indexAction';
        $content = $controller->$action($request);
    elseif ($id !== null):
        $content = $controller->$action($id, $page, $request);
    else:
        $content = $controller->$action($request);
    endif;
}
catch (\Exception $exception_1) {
    echo $exception_1->getMessage();
    $action = 'addAction';
    $content = $controller->$action();

}


require VIEW_DIR . 'layout.phtml';

echo '<hr>';
echo '<pre>';
echo $action;echo '<br><br>';
echo 'SESSION', '<br>';
print_r($_SESSION);
echo '<br><br>';
echo 'GET', '<br>';
print_r($_GET);
echo '<br><br>';
echo 'POST', '<br>';
print_r($_POST);
echo '<br><br>';
echo 'SERVER', '<br>';
echo $_SERVER['REQUEST_URI'];
//print_r($_SERVER);
echo '<br><br>';
//print_r($_SESSION);

