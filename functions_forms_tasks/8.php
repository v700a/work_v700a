<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>

<?php
echo '<pre>';
print_r($_SERVER);
//    print_r($_POST);
//    print_r($_FILES);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD']=='POST'){

    header("location:/functions_forms_tasks/8.php");

    die;

}
?>
    <form enctype="multipart/form-data" action="8.php" method="post" id = "gallery">

        <input name="file[]" type="file" multiple >
        <input type="submit">


</b>
</body>
</html>