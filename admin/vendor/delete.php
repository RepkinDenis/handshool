<?php
global $connect;
require_once '../config/connect.php';

$user_id = $_GET['id'];

mysqli_query($connect,"DELETE FROM `students` WHERE `students`.`user_id` = '$user_id'");
header('Location: ../admin.php');