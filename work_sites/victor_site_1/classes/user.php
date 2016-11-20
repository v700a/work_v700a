<?php

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;

    function login()
    {
        echo 'Login';
    }

    function logout()
    {
        echo 'Logout';
    }
}

$Victor = new User;
$Serhio = new User;
$Vasya = new User;
$Lola = new User;

$Victor -> login = 'Victor';
$Victor -> password = '1234';
$Victor -> email = 'Victor@e.u';

$Serhio -> login = 'Serhio';
$Serhio -> password = '1234';
$Serhio -> email = 'Serhio@e.u';

$Vasya -> login = 'Vasya';
$Vasya -> password = '1234';
$Vasya -> email = 'Vasya@e.u';

$Lola -> login = 'Lola';
$Lola -> password = '1234';
$Lola -> email = 'Lola@e.u';

$Victor -> login();
$Lola -> logout();


$array_1['login'] = $Victor ->login;
$array_1['password'] = $Victor ->password;
$array_1['email'] = $Victor ->email;

$p = (object)$array_1;

var_dump($array_1);
var_dump($p);





















