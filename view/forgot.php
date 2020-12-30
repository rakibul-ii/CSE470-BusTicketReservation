<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.card {
			background-color: #4CAF50;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: auto;
			padding: 2px;
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
		body {font-family: Arial, Helvetica, sans-serif;}
		form {border: 3px solid #f1f1f1;}

		input {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: red;
			border-radius: 10px;
			color: white;
			font-size: 18px;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			margin-left: 2%;
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
	<div class="card">
		<p class="title">
			This page will create an OTP and send it to the currently logged user's number. As setting up OTP is is expensive so I am not showing that procedure here. Here I am just taking the changed password and updating it on the database.
		</p>
	</div>
<div class="card">
	<form action="../controller/forgotupdate.php" method="post">
		<label for="number">Enter user number</label>
		<input type="number" name="num">
		<label for="psw">Enter New Password</label>
		<input type="password" name="psw">
		<label for="cpsw">Re Enter Password</label>
		<input type="password" name="cpsw">
		<button type="submit">Submit</button>
	</form>
</div>
</body>