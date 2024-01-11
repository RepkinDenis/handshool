<?php

global $connect;
require_once '../config/connect.php';

$id = $_POST['id'];
$login = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($connect,"UPDATE `students` SET `name` = '$login', `email` = '$email', `phone` = '$phone' WHERE `students`.`user_id` = '$id'");

header('Location: ../admin.php');