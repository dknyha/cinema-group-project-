<?php 
require_once '../connect.php';
$film=filter_var($_GET['film_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($film, FILTER_SANITIZE_NUMBER_INT)) {
    exit("Перевірте правильність вводу данних!");
}

mysqli_query ($connect,  "DELETE FROM film_list WHERE `film_list`.`film_id` = '$film'");

header('Location: ../film_list.php');