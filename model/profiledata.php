<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		form {border: 3px solid #f1f1f1;}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: white;
			font-size: 18px;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			margin-left: 25%;
		}

		button:hover {
			opacity: 0.8;
		}
		.container {
			padding: 16px;
		}
	</style>
</head>
<body>
<div class="container">
	<form action="../controller/update.php" method="post">
		<label for="name">Enter name</label>
		<input type="text" name="name" value="<?php echo $_SESSION["name"]?>">
		<label for="number">Enter number</label>
		<input type="text" name="number" value="<?php echo $_SESSION["number"]?>">
		<label for="pwd">Enter Password</label>
		<input type="password" name="pwd">
		<button type="submit">Submit</button>
	</form>
</div>
</body>
</html>