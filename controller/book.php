<?php include('../model/conn.php');?>
<?php session_start();?>
<?php
	class ticket{
		private $id;
		private $quantity;
		private $coupon;
		private $payment;

		public function setticket($i,$q,$cc,$p){
			$this->id = $i;
			$this->quantity = $q;
			$this->coupon = $cc ;
			$this->payment = $p;
		}

		public function update(){
			$user = $_SESSION["name"];
			$number = $_SESSION["number"];
			$payment = $this->payment;
			$cc =$this->coupon;
			$c = $this->id;
			$t = new conn();
			$q= $t->selectallbus();
			$count= mysqli_num_rows($q);
			$n=1;
			$auto = 2;
			while ($n<=$count) {
				if ($n==$c) {
					$query= $t->selectbus($n);
					$query1= $t->selectcoupon($cc);
					$r= mysqli_fetch_array($query);
					$r1= mysqli_fetch_array($query1);
					$percent = $r1[2];
					$used = $r1[3];
					$i= $r[8] - $this->quantity;
					$ib = $used + 1;
					$t->updateseat($this->id,$i);
					$t->updatehistory($user,$number,$percent,$payment,$r);
					$t->updatecoupon($cc,$ib);
					// mysqli_query($connect,$fill);
				}
				$n=$n+1;
			}
		}
	}

	$x= new ticket();
	$x-> setticket($_GET['id'],$_POST['quantity'],$_POST['coupon'],$_POST['payment']);
	$x->update();
	echo '<script type="text/javascript">';
	echo 'alert("ticket booked and discount added");';
	echo 'window.location.href = "../view/dashboard.php";';
	echo '</script>';
?>
