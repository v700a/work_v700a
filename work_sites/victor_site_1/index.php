<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">


</head>
<body>

<?php
require ('include_files/functions.php');

//print_r($_COOKIE);


$page_content = is_get('page');
if ($page_content !== null):
require ('/include_files/' . $page_content . '.php');
endif;
?>

<?php require ('primary_layout.php'); ?>


<!-- JavaScript-ядро Bootstrap
================================================== -->
<!-- Розміщуйте підключення JavaScript в кінці документа щоб сторінки завантажувались швидше -->
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>