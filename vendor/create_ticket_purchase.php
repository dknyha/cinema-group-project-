<?php
require_once '../connect.php';

$name_of_film = $_POST['name_of_film'];
$date = $_POST['date'];
$time = $_POST['time'];
$row = $_POST['row'];
$seat = $_POST['seat'];


mysqli_query($connect, "INSERT INTO `ticket_purchase` (`name_of_film`, `date`, `time`, `row`, `seat`) VALUES ('$name_of_film', '$date', '$time', '$row', '$seat') ");

header('Location: ../purchase.html');

