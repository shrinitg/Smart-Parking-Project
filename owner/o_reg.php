<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
   <style type="text/css">
       
    .footer{
      background-color: white;
     position: sticky;
      text-align: center;
    }
       
   </style>

	<img src="parking.jpg" class="av">
    <div class="login-box">
    	<img src="parkinglogo.jfif" class="avatar">
    	<h1 class="text"> Register Here</h1>
    	<br>
    	<form  method="POST" action="o_reg.php">
        <p>Name</p>
            <td><input type="text" name="oname" placeholder="Enter your name" required></td>
            <p>PARKING</p>
        <td><input type="text" name="pname" placeholder="Parking name" required></td>
        <p>CONTACT NUMBER</p>
        <td><input type="text" name="ocno" placeholder="Enter your mobile number" required></td>
        <p>TOTAL PARKINGS</p>
        <td><input type="number" name="tp" placeholder=" " required></td>
        <p>pincode</p>
          <td><input type="text" name="code" placeholder="pincode" required></td><br></br>
        
        <input type="submit" name="submit2" value="Register Here"></td><br></br>
            <input type="reset" name="reset" value="Reset">
</form>

    </div>
 
</body>
</html>

<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'parking');
    if (isset($_POST['submit2'])){
      
      $oname = mysqli_real_escape_string($db, $_POST['oname']);
       $oname = trim($oname);
       $oname = stripslashes($oname);
       $oname = htmlspecialchars($oname);

      $pname = mysqli_real_escape_string($db, $_POST['pname']);
       $pname = trim($pname);
       $pname = stripslashes($pname);
       $pname = htmlspecialchars($pname);

      $ocno = mysqli_real_escape_string($db, $_POST['ocno']);
       $ocno = trim($ocno);
       $ocno = stripslashes($ocno);
       $ocno = htmlspecialchars($ocno);

      $tp = mysqli_real_escape_string($db, $_POST['tp']);
       $tp = trim($tp);
       $tp = stripslashes($tp);
       $tp = htmlspecialchars($tp);

      $pincode = mysqli_real_escape_string($db, $_POST['code']);
        
     
                    $query="SELECT * FROM `main` WHERE pname='$pname' AND pincode='$pincode'";
                    $results = mysqli_query($db, $query);
                    $c=mysqli_num_rows($results) ;

                    $query2="SELECT * FROM `main` WHERE pname='$pname'";
                    $results2 = mysqli_query($db, $query2);
                    $d=mysqli_num_rows($results2) ;

                      
                   
                        
                        if($d==1)
                        {
                            echo "Parking name alredy exists";
                        }
                        else if($c==1)
                        {
                            echo "Already registered!";
                        }
                        else
                        {
                            $sql = "INSERT INTO `main`(`pname`,`oname`, `ocno`, `tp`, `pincode`) VALUES ('$pname','$oname','$ocno','$tp','$pincode')";
                    $p = mysqli_query($db,$sql);
                    header('location:..\index.php');
                        }
}




   ?>