<?php

require_once __DIR__ . '/../helpers.php';


$avatarPath = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;
$teacher_id = null;


if (empty($name)) {
    setValidationError('name', 'Неверное имя');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Указана неправильная почта');
}

if (empty($password)) {
    setValidationError('password', 'Пароль пустой');
}

if ($password !== $passwordConfirmation) {
    setValidationError('password', 'Пароли не совпадают');
}

if (!empty($avatar)) {
    $types = ['image/jpeg', 'image/png'];

    if (!in_array($avatar['type'], $types)) {
        setValidationError('avatar', 'Изображение профиля имеет неверный тип');
    }

    if (($avatar['size'] / 1000000) >= 1) {
        setValidationError('avatar', 'Изображение должно быть меньше 1 мб');
    }
}


if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('email', $email);
    redirect('/registration.php');
}

if (!empty($avatar)) {
    $avatarPath = uploadFile($avatar, 'avatar');
}


global $connect;
$connect = mysqli_connect('localhost', 'root', '', 'singup');

global $connect_user;
$connect_user = mysqli_connect('localhost', 'root', '', 'profile');

if(!$connect){
    die('Error connect to database!');
}
if(!$connect_user){
    die('Error connect to database!');
}

$user = mysqli_query($connect, "SELECT * FROM `students` WHERE `students`.`email` = '$email'");
$user_group1 = mysqli_query($connect, "SELECT * FROM `groups1` WHERE `groups1`.`email` = '$email'");
$user_pair1 = mysqli_query($connect, "SELECT * FROM `pair1` WHERE `pair1`.`email` = '$email'");
if (mysqli_num_rows($user) > 0) {
    $row = mysqli_fetch_array($user);
    $teacher_name = $row[5];
    $teacher = mysqli_query($connect_user, "SELECT * FROM `teacher` WHERE `teacher`.`teacher_name` = '$teacher_name'");
    $row2 = mysqli_fetch_array($teacher);
    $teacher_id = $row2[0];
} else if(mysqli_num_rows($user_group1) > 0) {
    $row = mysqli_fetch_array($user_group1);
    $teacher_name = $row[5];
    $teacher = mysqli_query($connect_user, "SELECT * FROM `teacher` WHERE `teacher`.`teacher_name` = '$teacher_name'");
    $row2 = mysqli_fetch_array($teacher);
    $teacher_id = $row2[0];
} else if(mysqli_num_rows($user_pair1) > 0) {
    $row = mysqli_fetch_array($user_pair1);
    $teacher_name = $row[5];
    $teacher = mysqli_query($connect_user, "SELECT * FROM `teacher` WHERE `teacher`.`teacher_name` = '$teacher_name'");
    $row2 = mysqli_fetch_array($teacher);
    $teacher_id = $row2[0];
}


$pdo = getPDO();

$query = "INSERT INTO users (name, email, avatar, password, teacher_id) VALUES (:name, :email, :avatar, :password, :teacher_id)";

$params = [
    'name' => $name,
    'email' => $email,
    'avatar' => $avatarPath,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'teacher_id' => $teacher_id
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/registration.php');
