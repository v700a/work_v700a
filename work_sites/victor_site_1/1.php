<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24.10.2016
 * Time: 7:58
 */
$a['name1'] = 'vas1';
$a['name2'] = 'vas2';
$a['name3'] = 'vas3';

echo '<pre>';
print_r($a);
echo '</pre>';
echo '<br><br>';
$b = serialize($a);
echo $b;
echo '<br><br>';
$c = unserialize($b);
echo '<pre>';
print_r($c);
echo '</pre>';
