<?php
require_once '../connect.php';

$client_id = filter_var($_POST['client_id'], FILTER_SANITIZE_NUMBER_INT);
$cashier_id = filter_var($_POST['cashier_id'], FILTER_SANITIZE_NUMBER_INT);
$date_of_payment = $_POST['date_of_payment'];
$time_of_payment = $_POST['time_of_payment'];
$price_of_ticket = $_POST['price_of_ticket'];

if (!filter_var($client_id, FILTER_VALIDATE_INT) || !filter_var($cashier_id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `ticket_sales` (`payment_id`, `client_id`, `cashier_id`, `date_of_payment`, `time_of_payment`, `price_of_ticket`) VALUES (NULL, '$client_id', '$cashier_id', '$date_of_payment', '$time_of_payment', '$price_of_ticket') ");

header('Location: ../ticket_sales.php');