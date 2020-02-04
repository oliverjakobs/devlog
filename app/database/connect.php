<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$db_name = 'devlog';

$connection = new MySQLi($host, $user, $passwd, $db_name);

if ($connection->connect_error) 
{
    die('Database connection error: ' . $connection->connect_error);
}