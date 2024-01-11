<?php
global $connect;
require_once '../config/connect.php';

$user_id = $_GET['id'];

mysqli_query($connect,"DELETE FROM `pair1` WHERE `pair1`.`user_id` = '$user_id'");
header('Location: ../admin.php');