<?php include('../controller/bus.php'); ?>
<?php
$date = $_POST['date'];
$location = $_POST['location'];
$coach = $_POST['coach'];
?>
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
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<a href="dashboard.php#home" class="button">Go Back</a>
	<?php 
	$table = new bus();
	$table->setTest($date,$location,$coach);
	echo $table->getResult();
	?>

</body>
</html>