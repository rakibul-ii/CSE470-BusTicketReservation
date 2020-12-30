<?php include('../model/conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.bus {
			margin: auto;
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
class historyfetch{

	public function getResult($number){
		$t= new conn();
		$query = $t->selectallhistory();
		$count= mysqli_num_rows($query);
		?>
				<table class="bus">
			<tr>

				<th>Bus</th>
				<th>Location</th>
				<th>Type</th>
				<th>Rating</th>
				<th>Review</th>

			</tr>
			<?php
			$n=1;
			while($n<=$count){
				$q= $t->selecthistory($n);
				$row= mysqli_fetch_array($q);
				if($row[2]==$number)
				{
				?>
				<tr>

					<td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[13];?> Star</td>
					<td><?php echo $row[12];?></td>
				</tr>
				<?php
			}
				$n=$n+1;
			  }?>
			  </table>
			  <?php
			}
   }
?>
