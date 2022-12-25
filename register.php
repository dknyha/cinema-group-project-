<!DOCTYPE html>
<?php include("header.php"); ?>
<div class="container mregister">
	<div id="login">
		<h1>Register</h1>
		<form action="register.php" id="registerform" method="post"name="registerform">
			<p><label for="user_pass">Login<br>
				<input class="input" id="username" name="username"size="32" type="text" value=""></label></p>
			<p><label for="user_pass">email<br>
				<input class="input" id="email" name="email" size="32"type="text" value=""></label></p>
				<p><label for="user_pass">phone_number<br>
				<input class="input" id="phone_number" name="phone_number" size="10" type="text" value="" max=10></label></p>
				<p><label for="user_pass">Full name<br>
				<input class="input" id="full_name" name="full_name"size="32" type="text" value=""></label></p>
				<p><label for="user_pass">password<br>
				<input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
				<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Create an account"></p>
							<p class="regtext">Already have an account? <a href= "login.php"> Sign in!</a></p>
						</form>
					</div>
				</div>
				<?php
				
				if(isset($_POST["register"])){

					if(!empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['full_name'])) {
						$full_name = htmlspecialchars($_POST['full_name']);
						$email= filter_var(htmlspecialchars($_POST['email']), FILTER_SANITIZE_EMAIL);
						$phone_number=filter_var(htmlspecialchars($_POST['phone_number']), FILTER_SANITIZE_NUMBER_INT);
						
						if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT)) {
							exit("Неправильні дані! Перевірте пошту та телефон");
						}

						$username=htmlspecialchars($_POST['username']);
						$password=htmlspecialchars($_POST['password']);
						$query=mysqli_query($connect, "SELECT * FROM client WHERE username='".$username."'");
						$numrows=mysqli_num_rows($query);
						if($numrows==0)
						{
							$sql="INSERT INTO `client` (`client_id`, `email`, `phone_number`, `username`, `password`, `full_name`) VALUES (NULL, '$email', '$phone_number', '$username', '$password', '$full_name') ";
							$result=mysqli_query($connect, $sql);
							if($result){
								$message = "Account Successfully Created";
							} else {
								$message = "Failed to insert data information!";
							}
						} else {
							$message = "That username already exists! Please try another one!";
						}
					} else {
						$message = "All fields are required!";
					}
				}

				?>
				<?php
				// $phone_number = filter_var($phone_number, FILTER_VALIDATE_INT);
				// $email = filter_var($email, FILTER_SANITIZE_EMAIL);
			?>

				<?php if (!empty($message)) {echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";} ?>

				<?php include("vendor/footer.php"); ?>
