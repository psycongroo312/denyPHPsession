<?php

mysqli_connect("localhost","root","","BOOKS");

$host = "localhost";

$db = 'BOOKS';

$user = 'root';

$password = '';

$charset = 'UTF8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, $user, $password, $option);

return $pdo;