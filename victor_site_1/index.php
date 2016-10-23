
<?php

session_start();

require ('include_files/functions.php');
require ('header.php');

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

