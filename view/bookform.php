<?php include('../model/conn.php')?>
<?php
  $id = $_GET['id'];
  $t = new conn();
  $query = $t->selectbus($id);
  $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  font-size: 18px;
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  width: 50%;
  margin-left: 23%;
  margin-top: 10%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <form action="../controller/book.php?id=<?php echo $id;?>" method="post";>
    <label for="quantity">Number of Tickets</label>
    <input type="number" id="quantity" name="quantity" min="1" max="<?php echo $row[8];?>" required>
    <label for="quantity">Discount Code (Optional)</label>
    <input type="text" id="coupon" name="coupon" value='NONE' >
    <label for="payment">Enter Payment Method</label>
    <select id="payment" name="payment">
      <option>Bkash</option>
      <option>Nagad</option>
      <option>Rocket</option>
    </select>
    <input type="submit" value="Book Ticket">
  </form>
</div>

</body>
</html>
