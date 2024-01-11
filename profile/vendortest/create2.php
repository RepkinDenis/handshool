<?php

global $connect;
require_once '../configtest/connect.php';

// $user_id = $_GET['id'];
// $q1 = $_POST['result12'];
// $q2 = $_POST['result22'];
// $textarea = $_POST['message'];


// mysqli_query($connect, "INSERT INTO `task2` (`q1`, `q2`, `textarea`,`user_id`) VALUES ('$q1', '$q2', '$textarea','$user_id')");

// header('Location: /profile/profile.php?id='.$_GET['id']);
$user_id = $_POST['user_id2'];
$q1 = $_POST['result12'];
$q2 = $_POST['result22'];
$textarea = $_POST['message2'];

mysqli_query($connect, "INSERT INTO task2 (q1, q2, textarea, user_id) VALUES ('$q1', '$q2', '$textarea', '$user_id')");