<?php 
require_once '../connect.php';
$cashier= filter_var($_GET['cashier_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($cashier, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані! Такий айді недопустимий!');
}

mysqli_query ($connect, "DELETE FROM cashier WHERE `cashier`.`cashier_id` = '$cashier'");

header('Location: ../cashier.php');