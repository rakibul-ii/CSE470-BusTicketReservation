<?php include('conn.php');?>
<?php session_start()?>
<?php
$id = $_POST['journey'];
$star = $_POST['star'];
$name= $_SESSION['name'];
$number= $_SESSION['number'];
$t = new conn();
$connect = $t->connection();
$n = $_POST['comment'];;
$q = "UPDATE history SET review = '$n',star='$star' WHERE id = '$id'";
mysqli_query($connect,$query);
mysqli_query($connect,$q);
echo '<script type="text/javascript">';
echo 'alert("Review has been added");';
echo 'window.location.href = "../view/review.php";';
echo '</script>';
?>
