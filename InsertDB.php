<?php
error_reporting();
//Creates new record as per request
    //Connect to database
    $servername = "localhost";		//example = localhost or 192.168.0.0
    $username = "root";		//example = root
    $password = "";	
    $dbname = "parking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
    if($conn)
      { echo"hufrhufj";}

    //Get current date and time
    date_default_timezone_set('Asia/Calcutta');
    $d = date("Y-m-d");
    $t = date("H:i:s");
$c="";
echo "chal ja yrr";
    if(!empty($_POST['ldrvalue']))
    {   
      echo "string";
		$c = $_POST['ldrvalue'];
		explode(',', $c);
         echo $c;
         $ip=explode(',', $c);
          $s1=(int)$ip[0];
          $s2=(int)$ip[1];
          $s3=(int)$ip[2];
          $s4=(int)$ip[3];
          $s5=(int)$ip[4];
          $t = $s1+$s2+$s3+$s4+$s5;
          $e = 5-$t;
          echo $t;
          echo $e;
$sql = "UPDATE `main` SET `fp`= '$t',`ep`='$e' Where id=18 ";

       
		if($result= mysqli_query($conn,$sql))
 		{ 
		    echo "Helloo";
            //echo $ldrvalue;
		} else {
		    echo "Error: " . $sql3 . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>