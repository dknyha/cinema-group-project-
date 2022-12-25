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
                       <li><a href="main_work.html">Головна</a></li>
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
		<th>film_id</th>
		<th>delivery_id</th>
		<th>name_of_film</th>
		<th>film_genre</th>
		<th>state_of_production</th>
		<th>date_release</th>
		<th>duration_of_film</th>
		<th>description_of_film</th>
		<th>poster_film</th>
		<th>&#9998</th>
		<th>&#10006</th>
	</tr>
	<?php
	foreach ($film_list as $item ) {
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
			<td><?= '<img src = "data:image/png;base64,' . base64_encode($item[8]) . '" width = "100px" height = "100px"/>' ?></td>
			<td><a href="update_film_list.php?film_id=<?= $item[0] ?>">Update</a></td>
			<td><a href="vendor/delete_film_list.php?film_id=<?= $item[0] ?>">Delete</a></td>
		</tr>
		<?php
	}
	?>
</table>
<h2>Add new film</h2>
<form action="vendor/create_film_list.php" method="post" enctype="multipart/form-data">
	
	<p>delivery_id</p>
	<input type="number" name="delivery_id"> 
	<p>name_of_film</p>
	<input type="text" name="name_of_film">
	<p>film_genre</p>
	<select class = "sidor" type="text" name="film_genre">
		<option value="Бойовик">Бойовик</option>
		<option value="Вестерн">Вестерн</option>
		<option value="Гангстерский фільм">Гангстерский фільм</option>
		<option value="Детектив">Детектив</option>
		<option value="Драма">Драма</option>
		<option value="Історичний фильм">Історичний фильм</option>
		<option value="Комедія">Комедія</option>
		<option value="Мелодрама">Мелодрама</option>
		<option value="Музичний">Музичний фільм</option>
		<option value="Нуар">Нуар</option>
		<option value="Політичний фільм">Політичний фільм</option>
		<option value="Пригодницький фільм">Пригодницький фільм</option>
		<option value="Казка">Казка</option>
		<option value="Трагедія">Трагедія</option>
		<option value="Трагікомедія">Трагікомедія</option>
		<option value="Трилер">Трилер</option>
		<option value="Фантастичний">Фантастичний фільм</option>
		<option value="Фільм жахів">Фільм жахів</option>
		<option value="Фільм-катастрофа">Фільм-катастрофа</option>
	</select>
	<p>state_of_production</p>
	<select class = "sidor" type="text" name="state_of_production">
		<option value="США">США</option>
		<option value="Франція">Франція</option>
		<option value="Велика Британія">Велика Британія</option>
		<option value="Південна Корея">Південна Корея</option>
		<option value="Японія">Японія</option>
		<option value="Індія">Індія</option>
		<option value="Нігерія">Нігерія</option>
		<option value="Китай">Китай</option>
		<option value="Україна">Україна</option>
		<option value="Польща">Польща</option>
		<option value="Німеччина">Німеччина</option>
		<option value="Канада">Канада</option>
		<option value="Тайланд">Тайланд</option>
	</select>
	<p>date_release</p>
	<input type="date" name="date_release">
	<p>duration_of_film</p>
	<input type="time" name="duration_of_film">
	<p>description_of_film</p>
	<input type="text" name="description_of_film">
	<p>poster_film</p>
	<input type="file" name="poster_film">
	<input type="submit" value="Загрузить">
	<button type="submit"> Add </button>
</form>
</body>
</html>