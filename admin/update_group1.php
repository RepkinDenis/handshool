<?php

global $connect;
require_once 'config/connect.php';

$user_id = $_GET['id'];
$user = mysqli_query($connect,"SELECT * FROM `groups1` WHERE `user_id`= '$user_id'");
$user = mysqli_fetch_assoc($user);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./admin.css" rel="stylesheet" />
    <title>Изменение</title>
</head>
<body>
    <h2>Измение данных</h2>
    <form action="vendor/update_group1.php" method="post" id="form_update_group1">
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?= $user['name']?>">
        <p>Почта</p>
        <input type="text" name="email" value="<?= $user['email']?>">
        <p>Телефон</p>
        <input type="text" name="phone" value="<?= $user['phone']?>">
        <button type="submit" class="btn">Изменить</button>
    </form>
</body>
</html>