<?php

global $connect;
require_once '../configtest/connect.php';

$task = $_POST['task'];
$user_id = $_POST['user_id'];


if (isset($_POST['button1'])) {
    $textarea = $_POST['button1'];
    mysqli_query($connect, "UPDATE `$task` SET `textarea_point`='$textarea' WHERE `user_id`='$user_id'");
  } else if (isset($_POST['button2'])) {
    $textarea = $_POST['button2'];
    mysqli_query($connect, "UPDATE `$task` SET `textarea_point`='$textarea' WHERE `user_id`='$user_id'");
  }
header('Location: /profile/profile_teacher.php');