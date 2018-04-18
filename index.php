<?php include('process.php'); ?>


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
		<h1>Home</h1>
	</div>
	<div class="header">
		<?php if (isset($_SESSION['success'])):; ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
		<?php endif ?>
		<?php if (isset($_SESSION["username"])) : ?>
		<p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
		<p><a href="index.php" style="color: red;" > Logout</a></p>
	</div>
</body>
</html>