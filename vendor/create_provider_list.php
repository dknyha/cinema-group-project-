<?php
require_once '../connect.php';

$username = $_POST['username'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `provider_list` (`id_provider`, `username`, `email`) VALUES (NULL, '$username', '$email')");

header('Location: ../provider_list.php');