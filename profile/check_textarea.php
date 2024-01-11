<?php
   $connect = mysqli_connect('localhost', 'root', '', 'profile');

   if(!$connect){
       die('Error connect to database!');
   }

if (isset($_POST['button111_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=1 WHERE user_id=5");
}else if (isset($_POST['button112_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=0 WHERE user_id=5");
}else if (isset($_POST['button121_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=1 WHERE user_id=5");
}else if (isset($_POST['button122_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=0 WHERE user_id=5");
}else if (isset($_POST['button131_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=1 WHERE user_id=5");
}else if (isset($_POST['button132_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=0 WHERE user_id=5");
}

if (isset($_POST['button211_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=1 WHERE user_id=1");
}else if (isset($_POST['button212_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=0 WHERE user_id=1");
}else if (isset($_POST['button221_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=1 WHERE user_id=1");
}else if (isset($_POST['button222_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=0 WHERE user_id=1");
}else if (isset($_POST['button231_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=1 WHERE user_id=1");
}else if (isset($_POST['button232_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=0 WHERE user_id=1");
}

if (isset($_POST['button311_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=1 WHERE user_id=12");
}else if (isset($_POST['button312_click'])) {
    mysqli_query($connect, "UPDATE task1 SET textarea_point=0 WHERE user_id=12");
}else if (isset($_POST['button321_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=1 WHERE user_id=12");
}else if (isset($_POST['button322_click'])) {
    mysqli_query($connect, "UPDATE task2 SET textarea_point=0 WHERE user_id=12");
}else if (isset($_POST['button331_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=1 WHERE user_id=12");
}else if (isset($_POST['button332_click'])) {
    mysqli_query($connect, "UPDATE task3 SET textarea_point=0 WHERE user_id=12");
}
?>