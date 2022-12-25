<?php
require_once '../connect.php';

$username = $_POST['username'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані! Перевірте пошту та номер телефону');
}

mysqli_query($connect, "INSERT INTO `cashier` (`cashier_id`, `username`, `email`, `phone_number`) VALUES (NULL, '$username', '$email', '$phone_number') ");

header('Location: ../cashier.php');