<?php
global $connect;
require_once '../config/connect.php';

$user_id = $_GET['id'];

$users = mysqli_query($connect, "SELECT * FROM `Schedule` WHERE `Schedule`.`student_id` = '$user_id'");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user){
            $teacher=$user[4];
        }

if($user_id==999){
    mysqli_query($connect,"UPDATE `groups1` SET `teacher` = '$teacher'");
}else if($user_id==1001){
    mysqli_query($connect,"UPDATE `pair1` SET `teacher` = '$teacher'");
}else{
    mysqli_query($connect,"UPDATE `students` SET `teacher` = '$teacher' WHERE `students`.`user_id`='$user_id'");
}

header('Location: ../admin.php');