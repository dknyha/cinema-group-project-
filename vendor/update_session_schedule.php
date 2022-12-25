<?php

require_once '../connect.php';

$time_of_session = $_POST['time_of_session'];
$film_id = filter_var($_POST['film_id'], FILTER_SANITIZE_NUMBER_INT);
$id = filter_var($_POST['session_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($film_id, FILTER_VALIDATE_INT) || !filter_var($id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "UPDATE `session_schedule` SET `time_of_session` = '$time_of_session', `film_id` = '$film_id' WHERE `session_schedule`.`session_id` = '$id'");

header('Location: ../session_schedule.php');