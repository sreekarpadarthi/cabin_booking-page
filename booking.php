<!DOCTYPE html>
<html>
<head>
	<title>
		Booking
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="header">
		<h1>Cabins</h1>
	</div>
	<form  method="post" action="process1.php"  >
		<div class="selection">
			<select name="cabin">
				<option value="">Cabin</option>
				<option value="1">Cabin-1</option>
				<option value="2">Cabin-2</option>
				<option value="3">Cabin-3</option>
				<option value="4">Cabin-4</option>
				<option value="5">Cabin-5</option>
				<option value="6">Cabin-6</option>
				<option value="7">Cabin-7</option>
				<option value="8">Cabin-8</option>
				<option value="9">Cabin-9</option>
				<option value="10">Cabin-10</option>
			</select>
			<select name="time">
				<option value="">Time</option>
				<option value="11">10:00-12:00</option>
				<option value="12">12:00-14:00</option>
				<option value="13">14:00-16:00</option>
				<option value="14">16:00-18:00</option>
				<option value="15">18:00-20:00</option>
				<option value="16">20:00-22:00</option>
				<option value="17">22:00-24:00</option>
				
			</select>
			</div>
			<div class="input-group">
				<button type="submit" name="save" class="btn">save</button>
			</div>
			<a href="login.php">Logout</a>
	</form>
	
	
</body>
</html>