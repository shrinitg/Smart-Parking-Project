<?php

session_start();
error_reporting(0);

$db = mysqli_connect('localhost', 'root', '', 'parking');


 $a=$_SESSION['uname'];
 $b=$_SESSION['password'];

if(isset($_SESSION['uname'])){


?>
<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <link rel="stylesheet" type="text/css" href="loocation.css">
</head>
<body>

   <div class="topnav" id="myTopnav">
     <li style="float:left"><a href="#">Parking Finder</a></li>
    <a id= "shri" href="logout.php">Log Out</a>
    <a href="about us.html">About Us</a>
    <a href="b.html" class="active">Home</a>
     <a href="#">Profile</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
  <br>
  <br>
 <h1 class="location">Find Your Parking...</h1>
  <div class="container">
    <div class="login-box">
    
    <form method="POST" action="location1.php">
        <p>Pincode</p>
        <input type="text" name="pincode" placeholder="Enter your pincode" required>
         
         <input type="submit" name="find" value="Find">
        <br>
        <br>
             
    </form>
    </div> 
  </div>

</body>
</html>
<?php
}

else 
{
  header("location:login.php");
  echo "Login First";
}
?>