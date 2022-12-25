<?php 
require_once '../connect.php';
$provider=filter_var($_GET['id_provider'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($provider, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect,  "DELETE FROM provider_list WHERE `provider_list`.`id_provider` = '$provider'");

header('Location: ../provider_list.php');