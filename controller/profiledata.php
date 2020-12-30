<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		form {border: 3px solid #f1f1f1;}

		.topnav {
			overflow: hidden;
			background-color: #333;
			margin-bottom: 10%;
			width: 100%;
			display: flex;
			justify-content: center;
			margin: auto;
			padding: 20px;
		}

		.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover {
			background-color: #444;
			color: white;
		}

		.topnav a.active {
			background-color: #4CAF50;
			color: white;
		}

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
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font-family: arial;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a id="home" class="content" href="..\view/dashboard.php">Home</a>
		<a id="profile" class="content active" href="..\view/profile.php">Profile</a>
		<a id="history" class="content" href="..\view/history.php">History</a>
		<a id="about" class="content" href="..\view/about.php">About</a>
		<a id="logout" class="content" href="logout.php">Logout</a>
	</div>
		<div class="card">
<div class="container">
	<form action="../model/update.php" method="post">
		<label for="name">Enter name</label>
		<input type="text" name="name" value="<?php echo $_SESSION["name"]?>">
		<label for="number">Enter number</label>
		<input type="text" name="number" value="<?php echo $_SESSION["number"]?>">
		<label for="pwd">Enter Password</label>
		<input type="password" name="pwd">
		<button type="submit">Submit</button>
	</form>
</div>
	</div>
</body>
</html>
