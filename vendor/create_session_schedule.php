<?php

require_once '../connect.php';
$time_of_session = $_POST['time_of_session'];
$film_id = filter_var($_POST['film_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($film_id, FILTER_VALIDATE_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `session_schedule` (`session_id`, `time_of_session`, `film_id`) VALUES (NULL, '$time_of_session', '$film_id')");
header('Location: ../session_schedule.php');