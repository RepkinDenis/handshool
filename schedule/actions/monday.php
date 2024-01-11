<?php

global $connect;
$connect = mysqli_connect('localhost', 'root', '', 'singup');

if(!$connect){
    die('Error connect to database!');
}

$start = $_POST['start'];
$end = $_POST['end'];
$teacher = $_POST['teacher'];
$user_id = $_GET['id'];

$user = mysqli_query($connect, "SELECT * FROM `users_singup` WHERE `users_singup`.`id` = '$user_id'");
if (mysqli_num_rows($user) > 0) {
    $row = mysqli_fetch_array($user);
    $name_user = $row[1];
    $type_lesson = $row[4];
} else{
    $user = mysqli_query($connect, "SELECT * FROM `students` WHERE `students`.`user_id` = '$user_id'");
    $row = mysqli_fetch_array($user);
    $name_user = $row[1];
    $type_lesson = $row[4];
}


if($user_id==999){
    mysqli_query($connect, "INSERT INTO Schedule (`start`, `end`, type_lesson, teacher, student_name, day_of_week,  student_id) 
    VALUES ('$start', '$end', 'групповое занятие', '$teacher','Группа1', 'monday', '$user_id')");
}else if($user_id==1001){
    mysqli_query($connect, "INSERT INTO Schedule (`start`, `end`, type_lesson, teacher, student_name, day_of_week,  student_id) 
    VALUES ('$start', '$end', 'парное занятие', '$teacher','Пара1', 'monday', '$user_id')");
}
else{
    mysqli_query($connect, "INSERT INTO Schedule (`start`, `end`, type_lesson, teacher, student_name, day_of_week,  student_id) 
    VALUES ('$start', '$end', '$type_lesson', '$teacher','$name_user', 'monday', '$user_id')");
}

header('Location: ../index.php?id='.$_GET['id']);