<?php

global $connect;
require_once '../config/connect.php';

$search = $_POST['search'];

mysqli_query($connect,"SELECT * FROM `authorization` WHERE `authorization`.`login` LIKE '%$search%'");

header('Location: ../index.php');