<?php
$connect = mysqli_connect('localhost', 'root', '', 'profile');

if(!$connect){
    die('Error connect to database!');
}
$users = mysqli_query($connect, "SELECT * FROM task3 WHERE user_id=12");
$users = mysqli_fetch_all($users);

echo json_encode($users);
?>