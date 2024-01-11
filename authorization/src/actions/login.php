<?php

require_once __DIR__ . '/../helpers.php';
$connect = mysqli_connect('localhost', 'root', '', 'profile');

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    setMessage('error', 'Ошибка валидации, неверный формат электронной почты');
    redirect('/home_page.php');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь $email не найден");
    redirect('/home_page.php');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Неверный пароль');
    redirect('/home_page.php');
}

$_SESSION['user']['id'] = $user['id'];

$id=$user['id'];
$users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$id'");
$users = mysqli_fetch_all($users);
    foreach ($users as $user1){ 
        if ($user1[6]=='1') {
            redirect('/profile/profile_teacher.php');
        } else if ($user1[7]=='1'){
            redirect('/../admin/admin.php');
        }
} 

redirect('/profile/profile.php?id='.$user['id']);