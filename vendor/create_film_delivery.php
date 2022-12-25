<?php
require_once '../connect.php';
$id_provider = filter_var($_POST['id_provider'], FILTER_SANITIZE_NUMBER_INT);
$date_delivery = $_POST['date_delivery'];
$premiere_date = $_POST['premiere_date'];
$date_end = $_POST['date_end'];
$price_delivery = $_POST['price_delivery'];
$manager_id = filter_var($_POST['manager_id'], FILTER_SANITIZE_NUMBER_INT);
$contract_id = filter_var($_POST['contract_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($id_provider, FILTER_VALIDATE_INT) || !filter_var($manager_id, FILTER_VALIDATE_INT) || !filter_var($contract_id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `film_delivery` (`delivery_id`, `id_provider`, `date_delivery`, `premiere_date`, `date_end`, `price_delivery`, `manager_id`, `contract_id`) VALUES (NULL, '$id_provider', '$date_delivery', '$premiere_date', '$date_end', '$price_delivery', '$manager_id', '$contract_id')");

header('Location: ../film_delivery.php');