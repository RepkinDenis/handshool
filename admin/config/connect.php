<?php
global $connect;
$connect = mysqli_connect('localhost', 'root', '', 'singup');

if(!$connect){
    die('Error connect to database!');
}
