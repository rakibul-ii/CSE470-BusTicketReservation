<?php include('../model/conn.php');?>
<?php
$t= new conn();
$connect= $t->connection();

$name= $_POST['uname'];
$number= $_POST['unum'];
$pwd= $_POST['psw'];

$flag=$t->signup($name,$number,$pwd);
if($flag)
{
echo '<script type="text/javascript">'; 
echo 'alert("signup successful");'; 
echo 'window.location.href = "../index.php";';
echo '</script>';	
}
else{
echo '<script type="text/javascript">'; 
echo 'alert("Number Already exists");'; 
echo 'window.location.href = "../index.php";';
echo '</script>';
}
?>