<?php
require_once 'connect.php';
$cashier = mysqli_query($connect, "SELECT * FROM `cashier`");
$cashier = mysqli_fetch_all($cashier);
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
	<header>
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
		<th>CASHIER_ID</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>PHONE_NUMBER</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($cashier as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><a href="update_cashier.php?cashier_id=<?= $item[0] ?>">UPDATE</a></td>
			<td><a href="vendor/delete_cashier.php?cashier_id=<?= $item[0] ?>">DELETE</a></td>
		</tr>
		<?php
	}
	?>
	</table>
	<h2>Add new cashier</h2>
	<form action="vendor/create_cashier.php" method="post">
		
		<p>username</p>
		<input type="text" name="username"> 
		<p>email</p>
		<input type="text" name="email">
		<p>phone_number</p>
		<input type="number" name="phone_number">
		<button type="submit"> <div class="btn_order">Add</div> </button>
	</form>
</body>
</html>