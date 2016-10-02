<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Повторення матеріалу</title>
</head>
<body>
<?php
    $bb = & $bc;
    $ba = & $bb;
    $ba = 72;
    echo '<br>';
    echo '<pre>';
    var_dump ($ba);
    echo '<br>';
    var_dump ($bb);
    echo '<br>';
    var_dump ($bc);
    echo '</pre>';
    $bc++;
    echo '<br>';
    echo '<pre>';
    echo $ba,'<br>','<br>', $bb,'<br>','<br>', $bc;
    echo '</pre>';
?>
</body>
</html>