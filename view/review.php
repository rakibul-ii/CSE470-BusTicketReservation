<?php include('../controller/historyfetchreview.php'); ?>
<?php session_start()?>
<?php $num = $_SESSION["number"]?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus Reservation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: auto;
			font-family: Arial, Helvetica, sans-serif;
		}
    .mbody {
      width: 900px;
      margin: auto;
      text-align: center;
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

	</style>
</head>
<body>
<div class="mbody">


	<div class="topnav">
		<a id="home" class="content" href="dashboard.php" onclick="topactive('home')">Home</a>
		<a id="profile" class="content" href="profile.php" onclick="topactive('profile')">Profile</a>
		<a id="history" class="content" href="history.php" onclick="topactive('history')">History</a>
    <a id="review" class="content active" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content" href="about.php" onclick="topactive('about')">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>
  <?php
	$table = new historyfetch();
	echo $table->getResult($num);
	?>
  	<a class="button" href="../controller/reviewdata.php">Add new Review</a>
  </div>
</body>
</html>
