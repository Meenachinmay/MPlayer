<?php 
	include("includes/classes/Account.php");

	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to MPlayer</title>
</head>
<body>
	<div id="inputContainer">
		<form class="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUserName">UserName</label>
				<input type="text" name="loginUserName" id="loginUserName" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input type="password" name="loginPassword" id="loginPassword" required>
			</p>

			<button type="submit" name="loginButton">Login</button>
		</form>


		<form class="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
				<label for="username">UserName</label>
				<input type="text" name="username" id="username" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="firstName">First name</label>
				<input type="text" name="firstName" id="firstName" placeholder="e.g. Bert" required>
			</p>
			<p>
				<label for="lastName">Last name</label>
				<input type="text" name="lastName" id="lastName" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="e.g. meenachinmay@gmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm email</label>
				<input type="email" name="email2" id="email2" placeholder="e.g. meenachinmay@gmail.com" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</p>
			<p>
				<label for="password2">Confirm password</label>
				<input type="password" name="password2" id="password2" required>
			</p>

			<button type="submit" name="registerButton">Sign UP</button>
		</form>
	</div>
</body>
</html>