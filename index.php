<?php 

        session_start();
        session_destroy();
        unset($_SESSION['uname']);
        $_SESSION['message']="Logged Out Successfully";
   ?>




<!DOCTYPE html>
<html>
<head>
    <title>Parking Finder</title>
    <link rel="stylesheet" href="b.css">
 
</head> 
 <body>

  
<!--top nav-->

  <div class="topnav" id="myTopnav">
     <li class="newtop" style="float:left"><a><img src="logo2.jpg" height="23px" width="23px"></a></li>
     <li class="newtop" style="float:left; margin-left: -30px"><a href="http://localhost/parking%20final/b.html">Parking Finder</a></li>
    <a href="customer/c_login.php">Login</a>
    <a href="team/our team.html">Our Team</a>
    <a href="about us.html">About Us</a>
    <a href="#" class="active">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!--end nav bar-->

<ul style="font-size: 30px;">
      <li>
        <a href="about us.html">
          <i class="fa fa-handshake-o" aria-hidden="true"></i>
        <span>AboutUs</span>
            </a>
      </li>
        <li>
        <a href="owner/owner.php">
          <i class="fa fa-user" aria-hidden="true"></i>   
        <span>Owner</span>
            </a>
      </li>
        <li>
        <a href="customer/customer.php">
        <i class="fa fa-user-circle" aria-hidden="true"></i>     
        <span>Customer</span>
            </a>
      </li>
        <li>
        <a href="services.html">
          <i class="fa fa-server" aria-hidden="true"></i>   
        <span>Services</span>
            </a>
      </li>

         
</ul>


<div id="newbox" style="font-size: 30px; ">
    <ul>
      <li>
        <a href="team/our team.html">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <span> Team</span>
            </a>
      </li>
        <li>
        <a href="team/mentor.html">
           <i class="fa fa-graduation-cap" aria-hidden="true"></i>  
        <span>Mentor</span>
            </a>
      </li>
        <li>
        <a href="help.html">
          <i class="fa fa-sign-in" aria-hidden="true"></i>    
        <span>Help</span>
            </a>
      </li>
      
         
</ul>

</div>
   
    <script type="text/javascript" src="b.js"></script>


  </body>
  </html>