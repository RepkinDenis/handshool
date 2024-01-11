<?php
global $connect;
$connect = mysqli_connect('localhost', 'root', '', 'profile');

if(!$connect){
    die('Error connect to database!');
}
