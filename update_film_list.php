<?php 
require_once 'connect.php';

$film=filter_var($_GET['film_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($film, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$f = mysqli_query ($connect, "SELECT * FROM `film_list` WHERE film_id = '$film'");
$f = mysqli_fetch_assoc($f);
// print_r($f);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update film list</title>
</head>
<body>
	<h2>Update film</h2>
	<form action="vendor/update_film_list.php" method="post">
		<input type="hidden" name="film_id" value="<?= htmlspecialchars($film)?>"> 
		
		<p>delivery_id</p>
		<input type="number" name="delivery_id" value="<?=htmlspecialchars($f['delivery_id']) ?>">
		<p>name_of_film</p>
		<input type="text" name="name_of_film" value="<?=htmlspecialchars($f['name_of_film']) ?>">
		<p>film_genre</p>
		<input type="text" name="film_genre" value="<?=htmlspecialchars($f['film_genre']) ?>">
		<p>state_of_production</p>
		<input type="text" name="state_of_production" value="<?=htmlspecialchars($f['state_of_production']) ?>">
		<p>date_release</p>
		<input type="date" name="date_release" value="<?=htmlspecialchars($f['date_release']) ?>">
		<p>duration_of_film</p>
		<input type="time" name="duration_of_film" value="<?=htmlspecialchars($f['duration_of_film']) ?>">
		<p>description_of_film</p>
		<input type="text" name="description_of_film" value="<?=htmlspecialchars($f['description_of_film']) ?>">
		<!-- <p>poster_film</p>
		<input type="image" name="poster_film" value="<?=$f['poster_film'] ?>"> -->
		<button type="submit"> Update </button>
	</form>
</body>
</html>
