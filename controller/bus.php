<?php include('../model/conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.bus {
			padding-left: 20%;
			padding-top: 100px;
		}

		.bus td, .bus th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		.bus tr:nth-child(even){background-color: #f2f2f2;}

		.bus tr:hover {background-color: #ddd;}

		.bus th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #2B3856;
			color: white;
		}
	</style>
</head>
</html>
<?php
class bus{
    private $date;
    private $location;
    private $coach;

    public function setTest($d,$l,$c){
      $this->date = $d;
      $this->location = $l;
      $this->coach = $c;
    }

	public function getResult(){
		$t= new conn();
		$connect = $t->connection();
		$query = $t->selectallbus();
		$count= mysqli_num_rows($query);
		?>
				<table class="bus">
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Type</th>
				<th>Date</th>
				<th>Cost</th>
				<th>Departure Time</th>
				<th>Arrival Time</th>
				<th>Total Seat</th>
			</tr>
			<?php
			$n=1;
			while($n<=$count){
				$q= $t->selectbus($n);
				$row= mysqli_fetch_array($q);
				if($row[2]===$this->location and $row[3]===$this->coach and $row[4]===$this->date){
				?>
				<tr>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
					<td><?php echo $row[7];?></td>
					<td><?php echo $row[8];?></td>
					<td><a href="../view/bookform.php?id=<?php echo $n; ?>">Book</a></td>
				</tr>
				<?php
			}
				$n=$n+1;
			}
			?>
			</table>
			<?php
		}
	}
	?>
