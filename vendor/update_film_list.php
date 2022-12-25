<?php

require_once '../connect.php';

$delivery_id = filter_var($_POST['delivery_id'], FILTER_SANITIZE_NUMBER_INT);
$name_of_film = $_POST['name_of_film'];
$film_genre = $_POST['film_genre'];
$state_of_production = $_POST['state_of_production'];
$date_release = $_POST['date_release'];
$duration_of_film = $_POST['duration_of_film'];
$description_of_film = $_POST['description_of_film'];
$id=filter_var($_POST['film_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($delivery_id, FILTER_SANITIZE_NUMBER_INT) || !filter_var($id, FILTER_SANITIZE_NUMBER_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query($connect, "UPDATE `film_list` SET `delivery_id` = '$delivery_id', `name_of_film` = '$name_of_film', `film_genre` = '$film_genre', `state_of_production` = '$state_of_production', `date_release` = '$date_release', `duration_of_film` = '$duration_of_film', `description_of_film` = '$description_of_film' WHERE `film_list`.`film_id` = '$id'");

header('Location: ../film_list.php');