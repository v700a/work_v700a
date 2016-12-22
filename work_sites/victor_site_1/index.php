<?php

$pdo = \Library\ConnectionPDO::getInstance()->getPDO();
session_start();
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
    $request = new \Library\Request();
    $route = $request->isGetOf('route', 'site/index');
    $id = $request->isGetOf('id');
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
    elseif ($request->isPostOf('cancel') !== null):
        $action = 'indexAction';
        $content = $controller->$action();
    elseif ($request->isGetOf('page') !== null):
        \Controller\BookController::$page = $request->isGetOf('page');
        $action = 'indexAction';
        $content = $controller->$action();
    elseif ($id !== null):
        $content = $controller->$action($id);
    else:
        $content = $controller->$action();
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

print_r($_GET);
echo '<br><br>';
print_r($_POST);

