<?php
require_once 'connect.php';
$session_schedule = mysqli_query($connect, "SELECT * FROM `session_schedule`");
$session_schedule = mysqli_fetch_all($session_schedule);
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
	<!-- <a  href="index.php"> <img class="klochko" width="40px" height="50px" src="img/04.svg" alt="Apple"> </a>
	<a  href="film_list.php"> <img class="klochko1" width="40px" height="50px" src="img/05.svg" alt="Apple"> </a> -->
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
		<th>SESSION_ID</th>
		<th>TIME_OF_SESSION</th>
		<th>FILD_ID</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($session_schedule as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><a href="update_session_schedule.php?session_id=<?= $item[0] ?>">UPDATE</a></td>
			<td><a href="vendor/delete_session_schedule.php?session_id=<?= $item[0] ?>">DELETE</a></td>
		</tr>
		<?php
	}
	?>
	</table>
	<h2>Add new session</h2>
	<form action="vendor/create_session_schedule.php" method="post">
		
		<p>time_of_session</p>
		<input type="datetime-local" name="time_of_session"> 
		<p>film_id (потрібно додати до вже існуючого film_id)</p>
		<input type="number" name="film_id">
		<button type="submit"> Add </button>
	</form>
</body>
</html>