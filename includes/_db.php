<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'statcou';

$con = mysql_connect($host, $user, $password);

if(!$con) {
    echo 'Error: Could not connect to database';
    die();
}
mysql_select_db($database);
