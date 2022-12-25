<?php 
require_once 'connect.php';

$provider=filter_var($_GET['id_provider'], FILTER_SANITIZE_NUMBER_INT);

if (!filter_var($provider, FILTER_VALIDATE_INT)) {
    exit('Помилково введені дані!');
}

$p = mysqli_query ($connect, "SELECT * FROM `provider_list` WHERE id_provider = '$provider'");
$p = mysqli_fetch_assoc($p);
print_r($p);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<title>Update provider list</title>
</head>
<body>
	<h2>Update provider</h2>
	<form action="vendor/update_provider_list.php" method="post">
		<input type="hidden" name="id_provider" value="<?= htmlspecialchars($provider)?>"> 
		
		<p>username</p>
		<input type="text" name="username" value="<?=htmlspecialchars($p['username']) ?>">
		<p>email</p>
		<input type="text" name="email" value="<?=htmlspecialchars($p['email']) ?>">
		<button type="submit"> Update </button>
	</form>
</body>
</html>
