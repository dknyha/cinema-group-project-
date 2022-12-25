<?php 
require_once 'config/connect.php';

$ticket_id=filter_var($_GET['ticket_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($ticket_id, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$t = mysqli_query ( $connect, "SELECT * FROM `ticket_list` WHERE ticket_id = '$ticket_id'");
$t = mysqli_fetch_assoc($t);
//print_r($t);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update ticket list</title>
</head>
<body>
	<h2>Update ticket</h2>
	<form action="vendor/create.php" method="post">
		
		<p>payment_id</p>
		<input type="number" name="payment_id" value="<?=htmlspecialchars($t['payment_id']) ?>">
		<p>session_id</p>
		<input type="number" name="session_id" value="<?=htmlspecialchars($t['session_id']) ?>">
		<p>row_id</p>
		<input type="number" name="row_id" value="<?=htmlspecialchars($t['row_id']) ?>">
		<p>seat_id</p>
		<input type="number" name="seat_id" value="<?=htmlspecialchars($t['seat_id']) ?>">
		<p>hall_id</p>
		<input type="number" name="hall_id" value="<?=htmlspecialchars($t['hall_id']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>