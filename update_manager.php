<?php 
require_once 'connect.php';

$manager=filter_var($_GET['manager_id'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($manager, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$m = mysqli_query ($connect, "SELECT * FROM `manager` WHERE manager_id = '$manager'");
$m = mysqli_fetch_assoc($m);
print_r($m);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update manager</title>
</head>
<body>
	<h2>Update manager</h2>
	<form action="vendor/update_manager.php" method="post">
		<input type="hidden" name="manager_id" value="<?= htmlspecialchars($manager)?>"> 
		
		<p>email</p>
		<input type="text" name="email" value="<?=htmlspecialchars($m['email']) ?>">
		<p>username</p>
		<input type="text" name="username" value="<?=htmlspecialchars($m['username']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>