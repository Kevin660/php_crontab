<?php
$db_host = 'localhost';
$db_name = 'project';
$db_user = 'root';
$db_pass = '';
$db_charset = "utf8";

// data source name
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch (PDOException $ex) {
    echo 'Ex:' . $ex->getMessage();
}
