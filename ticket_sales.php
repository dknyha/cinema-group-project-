<?php
require_once 'connect.php';
$ticket_sales = mysqli_query($connect, "SELECT * FROM `ticket_sales`");
$ticket_sales = mysqli_fetch_all($ticket_sales);
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<link rel="stylesheet"  type="text/css" href="css/style2.css">
	<title>Cinema</title>
</head>
<body>
	<!-- <a  href="film_list.php"> <img class="klochko" width="40px" height="50px" src="img/04.svg" alt="Apple"> </a>
	<a  href="film_delivery.php"> <img class="klochko1" width="40px" height="50px" src="img/05.svg" alt="Apple"> </a> -->
<header>

		<!-- <img id="logotip" width="50px"  src="img/1.png" alt="Movie"> -->
			<div class="All_header_menu">
				<div class="Logo">
				</div>
				<div class="Top_menu">
					<ul>
						<div class="bebra">
                       <li><a href="index.html">Головна</a></li>
                       <li><a href="tickets.php">Список білетів</a></li>
                       <li><a href="session_schedule.php">Розклад сеансів</a></li>
                       <li><a href="film_list.php">Список фільмів</a></li>
                       <li><a href="ticket_sales.php">Продажа білетів</a></li>
                       <li><a href="film_delivery.php">Доставка фільмів</a></li>
                       <li><a href="provider_list.php">Список постачальників</a></li>
                       <li><a href="cashier.php">Касири</a></li>
                       <li><a href="manager.php">Менеджери</a></li>
                   </div>
					</ul>
				</div>
			</div>
		</header>
	<table ><tr>
		<th>PAYMENT_ID</th>
		<th>CLIENT_ID</th>
		<th>CASHIER_ID</th>
		<th>DATE_OF_PAYMENT</th>
		<th>TIME_OF_PAYMENT</th>
		<th>PRICE_OF_TICKET</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($ticket_sales as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><?= htmlspecialchars($item[4]) ?></td>
			<td><?= htmlspecialchars($item[5]) ?></td>
			<td><a href="update_ticket_sales.php?payment_id=<?= $item[0] ?>">UPDATE</a></td>
			<td><a href="vendor/delete_ticket_sales.php?payment_id=<?= $item[0] ?>">UPDATE</a></td>
		</tr>
		<?php
	}
	?>
	</table>
	<h2>Add new ticket</h2>
	<form action="vendor/create_ticket_sales.php" method="post">
		
		<p>client_id</p>
		<input type="number" name="client_id"> 
		<p>cashier_id</p>
		<input type="number" name="cashier_id">
		<p>date_of_payment</p>
		<input type="date" name="date_of_payment">
		<p>time_of_payment</p>
		<input type="time" name="time_of_payment">
		<p>price_of_ticket</p>
		<input type="double" name="price_of_ticket">
		<button type="submit"> <div class="btn_order">Add</div> </button>
	</form>
</body>
</html>