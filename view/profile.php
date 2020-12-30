<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

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
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font-family: arial;
			padding: 20px;
		}

		.title {
			color: grey;
			font-size: 18px;
		}

		.button {
			text-decoration: none;
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: black;
			background-color: #4CAF50;
			text-align: center;
			cursor: pointer;
			width: 15%;
			font-size: 18px;
		}

		.button:hover {
			opacity: 0.7;
		}
		.mbody {
			width: 900px;
			margin: auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="mbody">


	<div class="topnav">
		<a id="home" class="content" href="dashboard.php">Home</a>
		<a id="profile" class="content active" href="profile.php">Profile</a>
		<a id="history" class="content" href="history.php">History</a>
		<a id="review" class="content" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content" href="about.php">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>

	<div class="card">
		<br>
		<p class="title">Name: <?php echo $_SESSION["name"];?></p>
		<br>
		<p class="title">Number: <?php echo $_SESSION["number"];?></p>
		<br>
		<a class="button" href="../controller/profiledata.php">Edit</a>
		<br>
	</div>
	</div>
</body>
</html>
