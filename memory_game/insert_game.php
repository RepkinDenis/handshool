<?php
   $connect = mysqli_connect('localhost', 'root', '', 'profile');

   if(!$connect){
       die('Error connect to database!');
   }

   $user_id = $_POST['user_id'];
   $moves = $_POST['moves'];
   $time_win = $_POST['time_win'];
   
   if($moves!=0){
        mysqli_query($connect, "INSERT INTO game (moves, time_win, user_id) VALUES ('$moves', '$time_win', '$user_id')");
   }
    // mysqli_query($connect, "INSERT INTO game (moves, time_win, user_id) VALUES ('$moves', '$time_win', '$user_id')");

   header("Location: /memory_game/game.php?id=" . $_GET['id']);

?>