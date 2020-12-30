<?php include('../model/conn.php');?>
<?php
$num = $_POST['num'];
$p = $_POST['psw'];

$t= new conn();
$connect= $t->forgot($num,$p);

echo '<script type="text/javascript">'; 
echo 'alert("modification successful");'; 
echo 'window.location.href = "../index.php";';
echo '</script>';
?>