<?php  class conn{
		private $c;
		public function connection(){
			$c = mysqli_connect("localhost","root","","bus_list");
			return $c;
		}

		public function selectallbus(){
			$c = mysqli_connect("localhost","root","","bus_list");
			$q = "SELECT * FROM bus";
			return mysqli_query($c,$q);
		}
		public function selectcoupon($id){
			$c = mysqli_connect("localhost","root","","bus_list");
			$q = "SELECT * FROM coupon WHERE code='$id' ";
			return mysqli_query($c,$q);
		}

		public function selectallhistory(){
			$c = mysqli_connect("localhost","root","","bus_list");
			return mysqli_query($c,"SELECT * FROM history");
		}

		public function selecthistory($n){
			$c = mysqli_connect("localhost","root","","bus_list");
			return mysqli_query($c,"SELECT * FROM history WHERE id=$n");
		}

		public function selectbus($n){
			$c = mysqli_connect("localhost","root","","bus_list");
			return mysqli_query($c,"SELECT * FROM bus WHERE id=$n");
		}

		public function updateseat($id,$i){
			$c = mysqli_connect("localhost","root","","bus_list");
			mysqli_query($c,"UPDATE bus SET seat_available='$i' WHERE id='$id'");
		}

		public function updatecoupon($id,$ib){
			$c = mysqli_connect("localhost","root","","bus_list");
			mysqli_query($c,"UPDATE coupon SET used='$ib' WHERE code='$id'");
		}

		public function updatehistory($user,$number,$coupon,$payment,$r){
			$c = mysqli_connect("localhost","root","","bus_list");
			$fill = "INSERT INTO history SET name='$user',number='$number',bus='$r[1]',location='$r[2]',type='$r[3]',date='$r[4]',cost='$r[5]',discount='$coupon', departing_time='$r[6]',arrival_time='$r[7]',payment='$payment'";
			mysqli_query($c,$fill);
		}

		public function signup($na,$nu,$p){
			$c = mysqli_connect("localhost","root","","bus_list");
			$q= "INSERT into user SET name='$na',number='$nu',pwd='$p'";
			if(mysqli_query($c,$q))
			{
				return true;
			}
				else{
					return false;
				}
		}

		public function forgot($n,$p){
			$c = mysqli_connect("localhost","root","","bus_list");
			mysqli_query($c,"UPDATE user SET pwd='$p' WHERE number='$n'");
		}
	}
?>
