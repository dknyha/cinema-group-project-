<?php 
require_once 'connect.php';

$session=$_GET['session_id'];

$session=filter_var($_GET['session_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($session, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$s = mysqli_query ($connect, "SELECT * FROM `session_schedule` WHERE session_id = '$session'");
$s = mysqli_fetch_assoc($s);
print_r($s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update session schedule</title>
</head>
<body>
	<h2>Update session</h2>
	<form action="vendor/update_session_schedule.php" method="post">
		<input type="hidden" name="session_id" value="<?= htmlspecialchars($session)?>"> 
		
		<p>time_of_session</p>
		<input type="datetime-local" name="time_of_session" value="<?=htmlspecialchars($s['time_of_session']) ?>">
		<p>film_id (зміни вносяться відповідно до існуючого фільму)</p>
		<input type="number" name="film_id" value="<?=htmlspecialchars($s['film_id']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>