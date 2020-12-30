<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
}
.mainbody {
  width: 900px;
  margin: auto;
}

.rowl {
  width: 400px;
  height: 500px;
  padding: 20px;
  float: left;
}
.row {
  width: 400px;
  height: 500px;
  padding: 20px;
  float: right;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #acc;
  box-sizing: border-box;
}

button {
  background-color: #2B3856;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 20px;
}

button:hover {
  opacity: 0.8;
}

.submitbtn {
  width: 50%;
  padding: 10px 18px;
  background-color: #9c3856;
}

.container {
  padding: 16px;
  margin: auto;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body>
<div class="mainbody">


<div class="rowl">


<form action="./model/login.php" method="post">
<center>  <h3>LOGIN</h3></center>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>

  </div>
<span class="psw"><a href="view/forgot.php">Forgot password?</a></span>
</form>
</div>
<div class="row">
<form action="controller/signup.php" method="post">
<center>   <h3>SIGNUP</h3></center>
  <div class="container" style="background-color:#f1f1f1">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="unum"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter Phone Number" name="unum" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="cpsw"><b>Re enter Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpsw" required>
    <button  class="submitbtn">Sign Up</button>

  </div>
</form>
</div>
</div>
</body>
</html>
