<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Завдання</title>
</head>
<body>


<?php
define('ua', 'Україна');
define('pl', 'Польща');
define('ro', 'Румунія');
define('cz', 'Чехія');
define('sl', 'Словенія');
define('hg', 'Угорщина');
define('bl', 'Білорусія');

$krayiny = array(ua,pl,ro,cz,sl,hg,bl);

echo '<br>';
echo '<pre>';
var_dump($krayiny);
echo '</pre>';

?>

</body>
</html>