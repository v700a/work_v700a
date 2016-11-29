
<?php

//$link = mysqli_connect("127.0.0.1","root","","mvc_group_1009");

//$dsn = 'mysql: host=localhost; dbname=mvc_group_1009';
//$user = 'root';
//$pass = '';

$pdo = new PDO('mysql: host=localhost; dbname=mvc_group_1009', 'root', '');
//$a = $pdo->query('SELECT * FROM book');
//var_dump($a);
session_start();

function __autoload($class_name)
{
    $file = "classes/$class_name.php";
    if (!file_exists($file)):
        die("Файл {$file} не знайдено");
    endif;

    require $file;
}

$request = new Request_functions();


require ('include_files/functions.php');
require ('header.php');
require ('models/user.php');
require ('models/book.php');
require ('models/comment.php');


//echo session_status();

//print_r($_COOKIE);


$page_content = is_get('page');
if ($page_content !== null):
require ('/include_files/' . $page_content . '.php');
endif;


require ('primary_layout.php');

if ($_GET == null):
?>

<h1><u><i>Тестовий сайт</i></u></h1>

<?php
endif;

