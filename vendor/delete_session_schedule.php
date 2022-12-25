<?php 
require_once '../connect.php';
$session = filter_var($_GET['session_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($session, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect,  "DELETE FROM session_schedule WHERE `session_schedule`.`session_id` = '$session'");

header('Location: ../session_schedule.php');