
<?php
require_once 'config/connect.php';
$ticket_list = mysqli_query($connect, "SELECT * FROM `ticket_list`");
$ticket_list = mysqli_fetch_all($ticket_list);
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
						<li><a href="film_list_client.php">Список фільмів</a></li>
						<li><a href="tickets_client.php">Продажа білетів</a></li>
						<div class="bebra1">
							<li><a href="login.php">Вхід</a></li>
						</div>
						<div class="bebra2">
							<li><a href="register.php">Зареєструватися</a></li>
						</div>
					</div>
				</ul>
			</div>
		</div>
		</header>
	<table ><tr>
		<th>TICKET_ID</th>
		<th>PAYMENT_ID</th>
		<th>SESSION_ID</th>
		<th>ROW_ID</th>
		<th>SEAT_ID</th>
		<th>HALL_ID</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($ticket_list as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><?= htmlspecialchars($item[4]) ?></td>
			<td><?= htmlspecialchars($item[5]) ?></td>
			
			<td><a href="update.php?ticket_id=<?= $item[0] ?>">UPDATE</a></td>
			<td><a href="vendor/delete.php?ticket_id=<?= $item[0] ?>">DELETE</a></td>
		</tr>
		<?php
	}
	?>
	</table>
	<h2>Add new ticket</h2>
	<form action="vendor/create.php" method="post">
		
		<p>payment_id</p>
		<input type="number" name="payment_id"> 
		<p>session_id</p>
		<input type="number" name="session_id">
		<p>row_id</p>
		<input type="number" name="row_id">
		<p>seat_id</p>
		<input type="number" name="seat_id">
		<p>hall_id</p>
		<input type="number" name="hall_id">

		<button type="submit">  <div class="btn_order">Add</div> </button>
	</form>
</body>
</html>