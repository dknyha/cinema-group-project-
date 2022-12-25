<?php
require_once '../config/connect.php';
$ticket_id = filter_var($_POST['ticket_id'], FILTER_SANITIZE_NUMBER_INT);
$payment_id = filter_var($_POST['payment_id'], FILTER_SANITIZE_NUMBER_INT);
$session_id = filter_var($_POST['session_id'], FILTER_SANITIZE_NUMBER_INT);
$row_id = filter_var($_POST['row_id'], FILTER_SANITIZE_NUMBER_INT);
$seat_id = filter_var($_POST['seat_id'], FILTER_SANITIZE_NUMBER_INT);
$hall_id = filter_var($_POST['hall_id'], FILTER_SANITIZE_NUMBER_INT);

/*if (!filter_var($ticket_id, FILTER_VALIDATE_INT) || !filter_var($payment_id, FILTER_VALIDATE_INT) || !filter_var($session_id, FILTER_VALIDATE_INT) || !filter_var($row_id, FILTER_VALIDATE_INT) || !filter_var($seat_id, FILTER_VALIDATE_INT) || !filter_var($hall_id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}*/

mysqli_query($connect, "INSERT INTO `ticket_list` (`ticket_id`, `payment_id`, `session_id`, `row_id`, `seat_id`, `hall_id`) VALUES (NULL, '$payment_id', '$session_id', '$row_id', '$seat_id', '$hall_id')");
header('Location: ../tickets.php');