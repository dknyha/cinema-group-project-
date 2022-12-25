<?php 
require_once 'connect.php';

$cashier=filter_var($_GET['cashier_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($cashier, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$c = mysqli_query ($connect, "SELECT * FROM `cashier` WHERE cashier_id = '$cashier'");
$c = mysqli_fetch_assoc($c);
print_r($c);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update cashier</title>
</head>
<body>
	<h2>Update cashier</h2>
	<form action="vendor/update_cashier.php" method="post">
		<input type="hidden" name="cashier_id" value="<?= htmlspecialchars($cashier)?>"> 
		
		<p>username</p>
		<input type="text" name="username" value="<?=htmlspecialchars($c['username']) ?>">
		<p>email</p>
		<input type="text" name="email" value="<?=htmlspecialchars($c['email']) ?>">
		<p>phone_number</p>
		<input type="number" name="phone_number" value="<?=htmlspecialchars($c['phone_number']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>