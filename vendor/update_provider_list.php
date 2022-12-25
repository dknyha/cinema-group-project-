<?php

require_once '../connect.php';

$username = $_POST['username'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$id = filter_var($_POST['id_provider'], FILTER_SANITIZE_NUMBER_INT);


if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "UPDATE `provider_list` SET `username` = '$username', `email` = '$email' WHERE `provider_list`.`id_provider` = '$id'");

header('Location: ../provider_list.php');