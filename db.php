<?php 

$db_name = "wymovies";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$connect = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

// Habilitando exibição de erros
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);