<?php

global $connect;
require_once '../configtest/connect.php';

// $user_id = $_GET['id'];

// $q1 = $_POST['result1'];
// $q2 = $_POST['result2'];
// $textarea = $_POST['message'];


// mysqli_query($connect, "INSERT INTO `task1` (`q1`, `q2`, `textarea`,`user_id`) VALUES ('$q1', '$q2', '$textarea','$user_id')");

// header('Location: /profile/profile.php?id='.$_GET['id']);

$user_id = $_POST['user_id'];
$q1 = $_POST['result1'];
$q2 = $_POST['result2'];
$textarea = $_POST['message'];

mysqli_query($connect, "INSERT INTO task1 (q1, q2, textarea, user_id) VALUES ('$q1', '$q2', '$textarea', '$user_id')");