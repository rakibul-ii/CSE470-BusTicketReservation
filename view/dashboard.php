<!DOCTYPE html>
<html>
<head>
	<title>Bus Reservation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}
		.mbody {
			width: 900px;
			margin: auto;
			text-align: center;
		}
		#coach,#location, input {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
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
	</style>
</head>
<body>
	<div class="mbody">
	<div class="topnav">
		<a id="home" class="content active" href="dashboard.php" onclick="topactive('home')">Home</a>
		<a id="profile" class="content" href="profile.php" onclick="topactive('profile')">Profile</a>
		<a id="history" class="content" href="history.php" onclick="topactive('history')">History</a>
		<a id="review" class="content" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content" href="about.php" onclick="topactive('about')">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>
	<div class="sidenav">
		<p>Book Ticket</p>
		<form action="result.php" method="post">
			<label for="Date">Select Date</label>
			<input type="date" name="date" required>
			<br>
			<label for="location">Select Destination</label>
			<select id="location" name="location">
				<option value="Bandarban">Bandarban</option>
				<option value="Barisal">Barisal</option>
				<option value="Chittagong">Chittagong</option>
				<option value="Comilla">Comilla</option>
				<option value="Cox's Bazar">Cox's Bazar</option>
				<option value="Jessore">Jessore</option>
				<option value="Khulna">Khulna</option>
				<option value="Rangamati">Rangamati</option>
				<option value="Rangpur">Rangpur</option>
				<option value="Sylhet">Sylhet</option>
			</select>
			<br>
			<label for="coach">Coach Type</label>
			<br>
			<select id="coach" name="coach" required>
				<option value="AC">AC</option>
				<option value="Non-AC">Non-AC</option>
			</select>
			<br>
			<input type="submit" name="submit">
		</form>
	</div>
		</div>
</body>
</html>
