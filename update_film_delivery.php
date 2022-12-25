<?php 
require_once 'connect.php';

$delivery=filter_var($_GET['delivery_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($delivery, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$d = mysqli_query ($connect, "SELECT * FROM `film_delivery` WHERE delivery_id = '$delivery'");
$d = mysqli_fetch_assoc($d);
/*print_r($d);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update film delivery</title>
</head>
<body>
	<h2>Update delivery</h2>
	<form action="vendor/update_film_delivery.php" method="post">
		<input type="hidden" name="delivery_id" value="<?= htmlspecialchars($delivery)?>"> 
		
		<p>id_provider</p>
		<input type="number" name="id_provider" value="<?=htmlspecialchars($d['id_provider']) ?>">
		<p>date_delivery</p>
		<input type="date" name="date_delivery" value="<?=htmlspecialchars($d['date_delivery']) ?>">
		<p>premiere_date</p>
		<input type="date" name="premiere_date" value="<?=htmlspecialchars($d['premiere_date']) ?>">
		<p>date_end</p>
		<input type="date" name="date_end" value="<?=htmlspecialchars($d['date_end']) ?>">
		<p>price_delivery</p>
		<input type="double" name="price_delivery" value="<?=htmlspecialchars($d['price_delivery']) ?>">
		<p>manager_id</p>
		<input type="number" name="manager_id" value="<?=htmlspecialchars($d['manager_id']) ?>">
		<p>contract_id</p>
		<input type="number" name="contract_id" value="<?=htmlspecialchars($d['contract_id']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>
