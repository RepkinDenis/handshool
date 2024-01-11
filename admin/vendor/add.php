<?php
global $connect;
require_once '../config/connect.php';


$user_id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['adds']=='indiv') {
        
        $users = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`id` = '$user_id'");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user){
            $name=$user[1];
            $email=$user[2];
            $phone=$user[3];
            $type_lesson=$user[4];
        }
        $users = mysqli_query($connect, "SELECT * FROM `Schedule` WHERE `Schedule`.`student_id` = '$user_id'");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user){
            $teacher=$user[4];
        }
        mysqli_query($connect, "INSERT INTO `students` (`id`, `name`, `email`,`phone`,`type_lesson`,`teacher`,`user_id`) VALUES (NULL, '$name', '$email', '$phone', '$type_lesson', '$teacher','$user_id')");


    } else if($_POST['adds']=='pair1') {
        $users = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`id` = '$user_id'");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user){
            $name=$user[1];
            $email=$user[2];
            $phone=$user[3];
            $type_lesson=$user[4];
        }
            echo $name;
            echo $email;
            echo $phone;
            echo $type_lesson;
        mysqli_query($connect, "INSERT INTO `pair1` (`id`, `name`, `email`,`phone`,`type_lesson`,`teacher`,`user_id`) VALUES (NULL, '$name', '$email', '$phone', '$type_lesson', 'нет','$user_id')");
    }else if($_POST['adds']=='group1') {
        $users = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`id` = '$user_id'");
        $users = mysqli_fetch_all($users);
        foreach ($users as $user){
            $name=$user[1];
            $email=$user[2];
            $phone=$user[3];
            $type_lesson=$user[4];
        }
        mysqli_query($connect, "INSERT INTO `groups1` (`id`, `name`, `email`,`phone`,`type_lesson`,`teacher`,`user_id`) VALUES (NULL, '$name', '$email', '$phone', '$type_lesson', 'нет','$user_id')");
    }
}

mysqli_query($connect,"DELETE FROM `users_singup` WHERE `users_singup`.`id` = '$user_id'");

header('Location: ../admin.php');