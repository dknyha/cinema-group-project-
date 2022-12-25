<?php
require_once '../connect.php';

$delivery_id = filter_var($_POST['delivery_id'], FILTER_SANITIZE_NUMBER_INT);
$name_of_film = $_POST['name_of_film'];
$film_genre = $_POST['film_genre'];
$state_of_production = $_POST['state_of_production'];
$date_release = $_POST['date_release'];
$duration_of_film = $_POST['duration_of_film'];
$description_of_film = $_POST['description_of_film'];

if (!filter_var($delivery_id, FILTER_SANITIZE_NUMBER_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "INSERT INTO `film_list` (`film_id`, `delivery_id`, `name_of_film`, `film_genre`, `state_of_production`, `date_release`, `duration_of_film`, `description_of_film`) VALUES (NULL, '$delivery_id', '$name_of_film', '$film_genre', '$state_of_production', '$date_release', '$duration_of_film', '$description_of_film')");

header('Location: ../film_list.php');