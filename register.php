<?php
session_start();

$login = $_POST['login'];
$psw = $_POST['password'];


$_SESSION['username'] = $_POST['password'];
$_SESSION['username'] = $_POST['login'];


header('lacation:index.php');