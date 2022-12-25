<?php

session_start();

if(!isset($_SESSION["session_username"])):
	header("location:login.php");
else:
	?>
	
	<?php include("header.php"); ?>
	<div id="welcome">
		<h2>Welcome, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
		<p><a href="logout.php">Exit</a> from system</p>
		<a href="main_client.html" class="bebra"> Go to the main page</a>
	</div>
	
	<?php include("vendor/footer.php"); ?>
	
<?php endif; ?>
