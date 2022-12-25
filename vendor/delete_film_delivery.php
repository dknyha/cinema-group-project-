<?php 
require_once '../connect.php';
$delivery=filter_var($_GET['delivery_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($delivery, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect,  "DELETE FROM film_delivery WHERE `film_delivery`.`delivery_id` = '$delivery'");

header('Location: ../film_delivery.php');