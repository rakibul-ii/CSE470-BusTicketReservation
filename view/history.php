<?php include('../controller/historyfetch.php'); ?>
<?php session_start()?>
<?php $num = $_SESSION["number"]?>
<!DOCTYPE html>
<html>
<head>
	<title>User Bookings</title>
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
		.mbody{
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
		<a id="profile" class="content" href="profile.php">Profile</a>
		<a id="history" class="content active" href="history.php">History</a>
		<a id="review" class="content" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content" href="about.php">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>

	<?php
	$table = new historyfetch();
	echo $table->getResult($num);
	?>
	</div>
</body>
