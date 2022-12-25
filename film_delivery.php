<?php
require_once 'connect.php';
$film_delivery = mysqli_query($connect, "SELECT * FROM `film_delivery`");
$film_delivery = mysqli_fetch_all($film_delivery);
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
	<!-- <a  href="ticket_sales.php"> <img class="klochko" width="40px" height="50px" src="img/04.svg" alt="Apple"> </a>
	<a  href="provider_list.php"> <img class="klochko1" width="40px" height="50px" src="img/05.svg" alt="Apple"> </a>
	<header> --><div class="snow"></div>

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
		<th>DELIVERY_ID</th>
		<th>ID_PROVIDER</th>
		<th>DATE_DELIVERY</th>
		<th>PREMIERE_DATE</th>
		<th>DATE_END</th>
		<th>PRICE_DELIVERY</th>
		<th>MANAGER_ID</th>
		<th>CONTRACT_ID</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($film_delivery as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><?= htmlspecialchars($item[4]) ?></td>
			<td><?= htmlspecialchars($item[5]) ?></td>
			<td><?= htmlspecialchars($item[6]) ?></td>
			<td><?= htmlspecialchars($item[7]) ?></td>
			<td><a href="update_film_delivery.php?delivery_id=<?= $item[0] ?>">UPDATE</a></td>
			<td><a href="vendor/delete_film_delivery.php?delivery_id=<?= $item[0] ?>">DELETE</a></td>
		</tr>
		<?php
	}
	?>
	</table>
	<h2>Add new delivery</h2>
	<form action="vendor/create_film_delivery.php" method="post" enctype="multipart/form-data">
		
		<p>id_provider</p>
		<input type="number" name="id_provider"> 
		<p>date_delivery</p>
		<input type="date" name="date_delivery">
		<p>premiere_date</p>
		<input type="date" name="premiere_date">
		<p>date_end</p>
		<input type="date" name="date_end">
		<p>price_delivery</p>
		<input type="double" min="0" max="100000" name="price_delivery">
		<p>manager_id</p>
		<input type="number" min="0" name="manager_id">
		<p>contract_id</p>
		<input type="number" min="0" name="contract_id">
		<button type="submit"> Add </button>
	</form>
</body>
</html>