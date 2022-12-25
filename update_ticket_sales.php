<?php 
require_once 'connect.php';

$ticket_sales=filter_var($_GET['payment_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($ticket_sales, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$tt = mysqli_query ($connect, "SELECT * FROM `ticket_sales` WHERE payment_id = '$ticket_sales'");
$tt = mysqli_fetch_assoc($tt);
print_r($tt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update ticket sales</title>
</head>
<body>
	<h2>Update ticket sales</h2>
	<form action="vendor/update_ticket_sales.php" method="post">
		<input type="hidden" name="payment_id" value="<?= htmlspecialchars($ticket_sales)?>"> 
		
		<p>client_id</p>
		<input type="number" name="client_id" value="<?=htmlspecialchars($tt['client_id']) ?>">
		<p>cashier_id</p>
		<input type="number" name="cashier_id" value="<?=htmlspecialchars($tt['cashier_id']) ?>">
		<p>date_of_payment</p>
		<input type="date" name="date_of_payment" value="<?=htmlspecialchars($tt['date_of_payment']) ?>">
		<p>time_of_payment</p>
		<input type="time" name="time_of_payment" value="<?=htmlspecialchars($tt['time_of_payment']) ?>">
		<p>price_of_ticket</p>
		<input type="double" name="price_of_ticket" value="<?=htmlspecialchars($tt['price_of_ticket']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>