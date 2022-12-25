<?php 
require_once '../connect.php';
$ticket_sales=filter_var($_GET['payment_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($ticket_sales, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect, "DELETE FROM ticket_sales WHERE `ticket_sales`.`payment_id` = '$ticket_sales'");

header('Location: ../ticket_sales.php');