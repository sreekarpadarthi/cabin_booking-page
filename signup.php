<!DOCTYPE html>
<html>
<head>
	<title>
		LOGIN
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="header">
		<h1>SIGNUP</h1>
	</div>
	<form method="POST" action="process.php">
		<!-- <?php include('errors.php');?> -->
		<div class="input-group">
			<label> Username</label>
			<input type="text" name="username" required>
		</div>

		<div class="input-group">
			<label> Email</label>
			<input type="text" name="email" required>
		</div>

		<div class="input-group">
			<label> Password</label>
			<input type="password" name="password_1" required>
		</div>

		<div class="input-group">
			<label> Confirm Password</label>
			<input type="password" name="password_2" required>
		</div>

		<div class="input-group">
			<button type="submit" name="signup" class="btn">Sign in</button>
		</div>
		<p>
			Already a member?<a href="login.php">login</a>
		</p>
	</form>
</body>
</html>