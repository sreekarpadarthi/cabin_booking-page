<!DOCTYPE html>
<html>
<head>
	<title>
		LOGIN
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background:"book_lead.jpg">
	
	<div class="header">
		<h1>Login</h1>
	</div>
	<form method="POST" action="process2.php" >
		<div class="input-group">
			<label> Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label> Password</label>
			<input type="password" name="password_1" required>
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		
		<p>
			Not a member?<a href="signup.php">sign up</a>
		</p>
	</form>
	
</body>
</html>