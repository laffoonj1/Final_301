<?php

include_once('functions.php');

$user = 'laffoonj1';
$password = 'ka7udrUB';

$database = new PDO('mysql:host=localhost;dbname=db_spring19_laffoonj1', $user, $password);



function autoloader($class) {
    include "class." . $class . ".php";
}

spl_autoload_register('autoloader');

session_start();

?>