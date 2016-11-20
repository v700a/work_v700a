<?php

require "user.php";
class Car
{

public $brand;
public $model;
public $year;
public $driver;

}

$toyota_corolla_2000 = new Car();
$toyota_corolla_2000 -> brand = 'Toyota';
$toyota_corolla_2000 -> model = 'Corolla';
$toyota_corolla_2000 -> year = '2000';
$toyota_corolla_2000 -> driver = $Victor -> login;

$mazda_6_2015 = new Car();
$mazda_6_2015 -> model = '6';
$mazda_6_2015 -> brand = 'Mazda';
$mazda_6_2015 -> year = '2015';
$mazda_6_2015 -> driver = $Serhio -> login;

$ford_taurus_1995 = new Car();
$ford_taurus_1995 -> model = 'Taurus';
$ford_taurus_1995 -> brand = 'Ford';
$ford_taurus_1995 -> year = '1995';
$ford_taurus_1995 -> driver = $Lola ->login;



var_dump($toyota_corolla_2000);
echo '<br>';
var_dump($mazda_6_2015);
echo '<br>';
var_dump($ford_taurus_1995);
