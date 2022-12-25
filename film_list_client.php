<?php
require_once 'connect.php';
$film_list = mysqli_query($connect, "SELECT * FROM `film_list`");
$film_list = mysqli_fetch_all($film_list);
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
                       <li><a href="ticket_purchase.php">Продажа білетів</a></li>
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
		<th>Назва</th>
		<th>Жанр</th>
		<th>Країна виробник</th>
		<th>Дата виходу</th>
		<th>Тривалість фільму</th>
		<th>Опис фільму</th>
		<th>Постер</th>
	</tr>
	<?php
	foreach ($film_list as $item ) {
		?>
		
		<tr>
			
			<td><?= htmlspecialchars($item[2]) ?></td>
			<td><?= htmlspecialchars($item[3]) ?></td>
			<td><?= htmlspecialchars($item[4]) ?></td>
			<td><?= htmlspecialchars($item[5]) ?></td>
			<td><?= htmlspecialchars($item[6]) ?></td>
			<td><?= htmlspecialchars($item[7]) ?></td>
			<td><?= '<img src = "data:image/png;base64,' . base64_encode($item[8]) . '" width = "100px" height = "100px"/>' ?></td>
		</tr>
		<?php
	}
	?>
</table>
</form>
</body>
</html>