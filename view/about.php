<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
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
			background-color: #4CAF50;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: auto;
			padding: 20px;
			text-align: center;
			font-family: arial;
		}

		.title {
			color: black;
			font-size: 18px;
		}
		a{
			color: black;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a id="home" class="content" href="dashboard.php">Home</a>
		<a id="profile" class="content" href="profile.php">Profile</a>
		<a id="history" class="content" href="history.php">History</a>
		<a id="review" class="content" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content active" href="about.php">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>
	<div class="card">
		<p class="title">
			Thank You for visiting my website. This is a test website for Booking Bus tickets in Bangladesh. The site is still have bugs and under development and more features are going to be added soon in future. For any queries regarding the site please contact <a href="https://mail.google.com/mail/?view=cm&fs=1&to=rakibul.islam2@g.bracu.ac.bd@g.bracu.ac.bd">rakibul.islam2@g.bracu.ac.bd</a>
		</p>
	</div>
</body>
