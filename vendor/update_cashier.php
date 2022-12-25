<?php

require_once '../connect.php';

$username = $_POST['username'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);
$id = filter_var($_POST['cashier_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT) || !filter_var($id, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані! Перевірте пошту та номер телефону або айді');
}

mysqli_query($connect, "UPDATE `cashier` SET `username` = '$username', `email` = '$email', `phone_number` = '$phone_number' WHERE `cashier`.`cashier_id` = '$id' ");

header('Location: ../cashier.php');