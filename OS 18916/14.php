<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 25.09.2016
 * Time: 19:31
 */
$foo = 'bar';
$bar = 10;
$foo = & $bar;

echo $foo;