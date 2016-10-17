<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">


</head>
<body>

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




//</body>
//</html>