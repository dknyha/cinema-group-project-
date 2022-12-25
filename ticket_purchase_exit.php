<?php
require_once 'connect.php';
$ticket_purchase = mysqli_query($connect, "SELECT * FROM `ticket_purchase`");
$ticket_purchase = mysqli_fetch_all($ticket_purchase);
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<link rel="stylesheet"  type="text/css" href="css/style2.css">
	<!-- <link rel="stylesheet"  type="text/css" href="css/purchase.css"> -->

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
                       <li><a href="main_client.html">Головна</a></li>
                       <li><a href="film_list_client_exit.php">Список фільмів</a></li>
                       <li><a href="ticket_purchase_exit.php">Продажа білетів</a></li>
                       <div class="bebra1">
                       <li><a href="index.html">Вихід</a></li>
                       </div>
                   </div>
					</ul>
				</div>
			</div>
		</header>
	<table ><tr>
		<th>Назва фільму</th>
		<th>Дата сеансу</th>
		<th>Час сеансу</th>
		<th>Ряд</th>
		<th>Місце</th>
	</tr>
	<?php
	foreach ($ticket_purchase as $item ) {
		?>
		
		<tr>
			<td><?= htmlspecialchars($item[0]) ?></td>
			<td><?= htmlspecialchars($item[1]) ?></td>
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><?= htmlspecialchars($item[4]) ?></td>
			
		</tr>
		<?php
	}
	?>
</table>
<h2>Купівля білету</h2>
<!-- <form action="create_ticket_purchase.php" method="post" enctype="multipart/form-data"> -->
	<form action="vendor/create_ticket_purchase.php" method="post">
	
	
	<p>Назва фільму</p>
	<select class = "sidor" type="text" name="name_of_film">
		<option value="Зелена книга">"Зелена книга"</option>
		<option value="Вовк з Уолл Стріт">"Вовк з Уолл Стріт"</option>
		<option value="Красиво піти">"Красиво піти"</option>
		<option value="Чудо-жінка: 1984">"Чудо-жінка: 1984"</option>
		<option value="Захар Беркут">"Захар Беркут"</option>
		<option value="Слендермен">"Слендермен"</option>
		<option value="Дім дивних дітей Міс Перегрін">"Дім дивних дітей Міс Перегрін"</option>
		<option value="Месники">"Месники"</option>
		</select>
	<p>Дата</p>
	<input type="date" name="date">
	<p>Час</p>
	<select class = "sidor" type="text" name="time">
		<option value="10:10 - 100 грн">10:10 - 100 грн</option>
		<option value="10:40 - 100 грн">10:40 - 100 грн</option>
		<option value="11:10 - 100 грн">11:10 - 100 грн</option>
		<option value="12:10 - 110 грн">12:10 - 110 грн</option>
		<option value="12:50 - 110 грн">12:50 - 110 грн</option>
		<option value="13:50 - 110 грн">13:50 - 110 грн</option>
		<option value="14:20 - 110 грн">14:20 - 110 грн</option>
		<option value="14:50 - 110 грн">14:50 - 110 грн</option>
		<option value="15:50 - 110 грн">15:50 - 110 грн</option>
		<option value="16:30 - 110 грн">16:30 - 110 грн</option>
		<option value="17:30 - 110 грн">17:30 - 110 грн</option>
		<option value="18:00 - 120 грн">18:00 - 120 грн</option>
		<option value="18:30 - 120 грн">18:30 - 120 грн</option>
		<option value="19:10 - 120 грн">19:10 - 120 грн</option>
		<option value="19:40 - 120 грн">19:40 - 120 грн</option>
		<option value="20:20 - 120 грн">20:20 - 120 грн</option>
		<option value="21:00 - 120 грн">21:00 - 120 грн</option>
		<option value="21:30 - 120 грн">21:30 - 120 грн</option>
		<option value="22:00 - 120 грн">22:00 - 120 грн</option>
	</select>
	<p>Ряд</p>
	<select class = "sidor" type="text" name="row">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>
	<p>Місце</p>
	<select class = "sidor" type="text" name="seat">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
	</select>
	</select>
	<button type="submit"> Оплатити </button>

</form>
</body>
</html>