<?php

require_once '../connect.php';

$email = $_POST['email'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$id = filter_var($_POST['manager_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "UPDATE `manager` SET `email` = '$email', `username` = '$username' WHERE `manager`.`manager_id` = '$id'");

header('Location: ../manager.php');