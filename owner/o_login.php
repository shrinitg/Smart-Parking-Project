<?php include('clogin.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="b.css">
</head>
<body>

 <div class="topnav" id="myTopnav">
     <li class="newtop" style="float:left"><a><img src="logo2.jpg" height="23px" width="23px"></a></li>
     <li class="newtop" style="float:left; margin-left: -30px"><a href="http://localhost/parking%20final/b.html">Parking Finder</a></li>
    <a href="http://localhost/parking%20final/login.php">Login</a>
    <a href="our team.html">Our Team</a>
    <a href="about us.html">About Us</a>
    <a href="b.html" class="active">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  <div class="container">
    <div class="login-box">
      <h1 class="text">Login Now</h1>
      <br>
      <br>
    <form method="POST">
        <p>Username</p> 
        <input type="text" name="username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter password">
        
        <input type="submit" name="o_login" value="Login">
        <span>Forget password?<a href="#" style="text-decoration: underline;"> Click here</a>
        <br>
        <br>
        <span>Don't have an account?<a href="http://localhost/parking%20final/registration.html#" style="text-decoration: underline;"> Register here</a></span>
        
    </form>
    </div> 
  </div>

</body>
</html>
<?php
session_start(); 


$db = mysqli_connect('localhost', 'root', '', 'parking');

if (isset($_POST['o_login'])) {

  $a= mysqli_real_escape_string($db, $_POST['username']);
  $b = mysqli_real_escape_string($db, $_POST['password']);

  
    
    
    $query5="SELECT * FROM `parking` WHERE uname='$a' AND password='$b'";
    $results5 = mysqli_query($db, $query5);
    $g=mysqli_num_rows($results5) ;
    if ($g== 1) 
    {
     $_SESSION['uname'] = $a;
   $_SESSION['password'] = $b;
 
  header('location: farmer profile.php');

    }
    else {
      echo "<p style='margin-top:300px; text-align:center; font-size:30px; background: red; color:white; '>"."Wrong Details!"."</p>";
    }
}



?>