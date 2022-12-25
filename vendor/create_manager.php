<?php
require_once '../connect.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$username = $_POST['username'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `manager` (`manager_id`, `email`, `username`) VALUES (NULL, '$email', '$username')");

header('Location: ../manager.php');