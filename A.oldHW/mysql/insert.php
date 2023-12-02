<?php

$con = require 'form.php';

$email = $_POST['email'];
$name = "123";

if(!isset($email)) {
    echo 'Введите значение';
    header("location:/mysql/index.php");
}

$query = 'INSERT INTO abc(email, name) VALUES (?,?)';

$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt,'ss', $email, $name);

mysqli_stmt_execute($stmt);
$locationHeader = sprintf("location:/mysql/index.php?email=%s", $email);
header($locationHeader);