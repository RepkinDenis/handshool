<?php

require_once __DIR__ . '/../helpers_singup.php';

// Выносим данных из $_POST в отдельные переменные
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;

// Выполняем валидацию полученных данных с формы

if (empty($name)) {
    setValidationError('name', 'Неверное имя');
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Указана неправильная почта');
}

if (empty($phone)) {
    setValidationError('phone', 'Укажите телефон');
}

if($_POST['adds']=='indiv'){
    $type_lesson='индивидуальное занятие';
}else if($_POST['adds']=='group'){
    $type_lesson='групповое занятие';
}else if($_POST['adds']=='pair'){
    $type_lesson='парное занятие';
}

$pdo = getPDO();

$query = "INSERT INTO users_singup (name, email, phone, type_lesson) VALUES (:name, :email, :phone, :type_lesson)";

$params = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'type_lesson' => $type_lesson
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/singup.php');
