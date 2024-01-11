<?php

global $connect;
require_once '../config/connect.php';

$id = $_POST['id'];
$login = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($connect,"UPDATE `groups1` SET `name` = '$login', `email` = '$email', `phone` = '$phone' WHERE `groups1`.`user_id` = '$id'");

header('Location: ../admin.php');