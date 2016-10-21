<?php
$value = 0;

echo '<h3>Сторінка - лічильник відвідувань самої себе</h3><br><br>';


if (!$_COOKIE):
setcookie('counter', $value, time()+60*60*24*30 );
else:
    $value = $_COOKIE['counter'];
    $value++;
    setcookie('counter', $value, time()+60*60*24*30 );
    echo '<h4>Кількість відвідувань - ',$value;
endif;