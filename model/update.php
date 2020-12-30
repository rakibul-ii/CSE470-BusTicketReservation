<?php include('conn.php');?>
<?php session_start()?>
<?php
$id = $_SESSION['id'];
$name= $_SESSION['name'];
$number= $_SESSION['number'];
$t = new conn();
$connect = $t->connection();
if($_POST['name']==="" or $_POST['name']===$_SESSION['name']){}
	else{
	$n = $_POST['name'];
	$query = "UPDATE user SET name = '$n' WHERE id = '$id'";
	$q = "UPDATE history SET name = '$n' WHERE name = '$name'";
	mysqli_query($connect,$query);
	mysqli_query($connect,$q);
}
if($_POST['number']==="" or $_POST['number']===$_SESSION['number']){}
	else{
	$p = $_POST['number'];
	$query = "UPDATE user SET number = '$p' WHERE id = '$id'";
	$q = "UPDATE history SET number = '$p' WHERE number = '$number'";
	mysqli_query($connect,$query);
	mysqli_query($connect,$q);
}
if($_POST['pwd']===""){}
	else{
	$pwd = $_POST['pwd'];
	$query = "UPDATE user SET pwd = '$pwd' WHERE id = '$id'";
	mysqli_query($connect,$query);
}
	header('location: ../index.php');
?>