<?php
session_start();
$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$email = $_POST["email"];


$key = md5($name.$email);
$_SESSION["user"] = $key;
setcookie("session_id", session_id(), time() + 360);
header('Location: '."index.php");