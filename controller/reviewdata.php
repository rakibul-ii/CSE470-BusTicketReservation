<?php include('../model/conn.php'); ?>
<?php session_start()?>
<?php $num = $_SESSION["number"]?>
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
			margin: auto;
			text-align: center;
			font-family: arial;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a id="home" class="content" href="..\view/dashboard.php">Home</a>
		<a id="profile" class="content " href="..\view/profile.php">Profile</a>
		<a id="history" class="content" href="..\view/history.php">History</a>
    <a id="review" class="content active" href="review.php" onclick="topactive('review')">Review</a>
		<a id="about" class="content" href="..\view/about.php">About</a>
		<a id="logout" class="content" href="logout.php">Logout</a>
	</div>
		<div class="card">
<div class="container">

	<form action="../model/updatereview.php" method="post">
		<label for="journey">Select Journey</label>

    <select id="journey" name="journey">
      <?php
      class historyfetch1{

      	public function getResult($number){
      		$t= new conn();
      		$query = $t->selectallhistory();
      		$count= mysqli_num_rows($query);
      		?>
      <?php
			$n=1;
			while($n<=$count){
				$q= $t->selecthistory($n);
				$row= mysqli_fetch_array($q);
				if($row[2]==$number)
				{
				?>
 	<option value="<?php echo $row[0];?>"><?php echo $row[0];?>. <?php echo $row[3];?></option>
  <?php
}
  $n=$n+1;
  }?>
  <?php
  }
  }
  ?>
  <?php
	$table = new historyfetch1();
	echo $table->getResult($num);
	?></select>

		<h3>Rating</h3>

    <input type="radio" id="id1" name="star" value="1">
      <label for="1">1 Start</label><br>
      <input type="radio" id="id2" name="star" value="2">
      <label for="2">2 Star</label><br>
      <input type="radio" id="id3" name="star" value="3">
        <label for="3">3 Start</label><br>
        <input type="radio" id="id4" name="star" value="4">
        <label for="4">4 Star</label><br>
        <input type="radio" id="id5" name="star" value="5">
        <label for="5">5 Star</label><br>
          <label for="comment">Write Your Comment</label><br>
<input type="text" name="comment" required>
		<button type="submit">Submit</button>
	</form>
</div>
	</div>
</body>
</html>
