<?php 
require_once '../connect.php';
$manager=filter_var($_GET['manager_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($manager, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect, "DELETE FROM manager WHERE `manager`.`manager_id` = '$manager'");

header('Location: ../manager.php');