<?php

require_once '../connect.php';

$id_provider = filter_var($_POST['id_provider'], FILTER_SANITIZE_NUMBER_INT);
$date_delivery = $_POST['date_delivery'];
$premiere_date = $_POST['premiere_date'];
$date_end = $_POST['date_end'];
$price_delivery = $_POST['price_delivery'];
$manager_id = filter_var($_POST['manager_id'], FILTER_SANITIZE_NUMBER_INT);
$contract_id = filter_var($_POST['contract_id'], FILTER_SANITIZE_NUMBER_INT);
$id = filter_var($_POST['delivery_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($id_provider, FILTER_VALIDATE_INT) || !filter_var($manager_id, FILTER_VALIDATE_INT) || !filter_var($contract_id, FILTER_VALIDATE_INT || !filter_var($id, FILTER_VALIDATE_INT))) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "UPDATE `film_delivery` SET `id_provider` = '$id_provider', `date_delivery` = '$date_delivery', `premiere_date` = '$premiere_date', `date_end` = '$date_end', `price_delivery` = '$price_delivery ', `manager_id` = '$manager_id', `contract_id` = '$contract_id' WHERE `film_delivery`.`delivery_id` = '$id'");

header('Location: ../film_delivery.php');