<?php
session_start();
error_reporting(0);

$db = mysqli_connect('localhost', 'root', '', 'parking');


 $a=$_SESSION['uname'];
 $b=$_SESSION['password'];

if(isset($_SESSION['uname'])){


$ac ="SELECT `id`,`name`, `uname`, `cno`, `email`, `password` FROM `parking`  WHERE uname='$a' AND password='$b' ";
$x = $db->query($ac);
$row = $x->fetch_assoc();




if (isset($_POST['submit1']))
{
header('location: location.php');
}


?>




<!DOCTYPE html>
<html>
<head>
	<title>Farmer profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
	<link rel="stylesheet" type="text/css" href="c_profile.css">
   <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">

</head>
<body>
<style type="text/css">
	
	.text-large{
		font-size: 504%;
	}

	.img-fluid{

		height: 85%;
		width:  85%;
		padding-left: 90px;
	}

	.text-size{
		font-size: 25px;
		padding-right: 60px;
	}
</style>

	<!--top nav-->

   <div class="topnav" id="myTopnav">
     <li class="newtop" style="float:left"><a><img src="logo2.jpg" height="23px" width="23px"></a></li>
     <li class="newtop" style="float:left; margin-left: -30px"><a href="http://localhost/parking%20final/b.html">Parking Finder</a></li>
   
    
    <a href="../index.php">Log Out</a>
    <a href="c_profile.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!--end nav bar-->


<div class=" container-fluid">

      <h1 class=" text-center text-capitalize pt-5  text-white text-large m-3">Profile </h1>
     <br>
       <br>
      
       <div class=" row mb-5">
         <div class=" col-lg-6 col-md-6 col-12 img-fluid"> 
           <div class="profile-card">
    <div class="image-container">
      <!-- <img class="image" src="" style="width:100%"> -->
      <div class="title" style="color:white;">
        <h2><?php echo "Welcome! ".$row["name"]; ?></h2>
      </div>
    </div>



    <div class="main-container">
      
      <p><i class="fa fa-info circle info"> </i><?php echo "Your ID: ".$row["id"]; ?></p>
      <p><i class="fa fa-user info"> </i><?php echo "Your Username: ".$row["uname"]; ?></p>
      <p><i class="fa fa-phone info"> </i><?php echo "Your Contact number: ".$row["cno"]; ?></p>
      <p><i class="fa fa-envelope square info"> </i><?php echo "Your Email-id: ".$row["email"]; ?></p>
      <p style="color:black;"><i class="fa fa-calendar"  style="margin-right: 15px; color:blue"></i><?php date_default_timezone_set("Asia/Kolkata"); echo "Today is: ".date("Y/m/d, l   h:i:sa");?></p>
      

      

      

    </div>
  </div>

         </div>
          <div class=" col-lg-6 col-md-6 col-12">
             <p class="text-white text-center text-size"> <br> <br> You can update your profile by rentering the information by just clicking on the below button.</p>
             
             
             <form action="../location.php" method="POST">
             <input type="submit" name="submit1" value="Find parking"  style="background: transparent;color: white;font-size: 25px; margin-left: 230px;">
             <br>
           </form>
             
         
         <!-- The Modal -->
       <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
      

         <!-- Modal Header -->


           <div class="modal-header">
           <h4 class="modal-title">Sign Up</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
        
        <!-- Modal body -->
    <div class="modal-body">
      <form action="<?php echo htmlspecialchars($_SERVER["/action page.php"]);?>">
             <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email"  autocomplete ="off"placeholder="Enter email" name="email">
             </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
              </div>
             <div class="form-group form-check">
             <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
           </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
        
         <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>           
         </div>
       </div>
        </div>
      </div>
    </div>
  </div>

 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php }
else
{
  header('location:c_login.php');
}
 ?>
