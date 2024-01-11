<?php

global $connect;
require_once '../config/connect.php';

$login = $_POST['name'];
$password = $_POST['password'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `password`) VALUES (NULL, '$login', '$password')");

header('Location: ../admin.php');