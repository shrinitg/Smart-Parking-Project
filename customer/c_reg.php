<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
	<img src="img.jpg" class="av">
    <div class="login-box">
    	<img src="parkinglogo.jfif" class="avatar">
    	<h1 class="text">Welcome!</h1>
    	<br>
    	<form method="POST">
    		<p>Name</p>
            <td><input type="text" name="name" placeholder="Enter your name" required></td>
            <p>USERNAME</p>
    		<td><input type="text" name="username" placeholder="Create Username" required></td>
    		<p>CONTACT NUMBER</p>
    		<td><input type="text" name="cno" placeholder="Enter your mobile number" required></td>
    		<p>E-MAIL</p>
    		<td><input type="text" name="email" placeholder="Enter Email" required></td>
    		<p>PASSWORD</p>
    	    <td><input type="password" name="password" placeholder="Create password" required></td>
    		
    		<input type="submit" name="c_reg" value="Register Here">
            <input type="reset" name="reset" value="Reset">
            <span>Already Registered?<a href="http://localhost/parking%20final/login.html" style="text-decoration: underline;"> Login here</a></span>
    	</form>

    </div>
    
</body>
</html>

<?php
//session_start();
        error_reporting(0);



        $db = mysqli_connect('localhost', 'root', '', 'parking');
        
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $name = filter_var($name, FILTER_SANITIZE_STRING);

            $uname = mysqli_real_escape_string($db, $_POST['username']);
            $uname = filter_var($uname, FILTER_SANITIZE_STRING);

            $cno = mysqli_real_escape_string($db, $_POST['cno']);
            $cno = filter_var($cno, FILTER_VALIDATE_INT);

            $email = mysqli_real_escape_string($db, $_POST['email']);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            $password = mysqli_real_escape_string($db, $_POST['password']);
            $password = htmlspecialchars($password);
            $password = trim($password);

                    $query="SELECT * FROM `parking` WHERE uname='$uname' AND password='$password'";
                    $results = mysqli_query($db, $query);
                    $c=mysqli_num_rows($results) ;

                    $query2="SELECT * FROM `parking` WHERE uname='$uname'";
                    $results2 = mysqli_query($db, $query2);
                    $d=mysqli_num_rows($results2) ;

                    $query4="SELECT * FROM `parking` WHERE email='$email'";
                    $results4 = mysqli_query($db, $query4);
                    $f=mysqli_num_rows($results4) ;
                    
                    $query3="SELECT * FROM `parking` WHERE cno='$cno'";
                    $results3 = mysqli_query($db, $query3);
                    $e=mysqli_num_rows($results3) ;
                    
                   
                        
                        if($d==1)
                        {
                            echo "Username exists";
                        }
                        else if($e==1)
                        {
                            echo "Mobile number exists";
                        }
                        else if($c==1)
                        {
                            echo "Already registered!";
                        }
                        else if($d==1 && $f==1)
                        {
                            echo "Please change Username and Email";
                        }

                        else if($d==1 && $e==1)
                        {
                            echo "Please change Username and Mobile Number";
                        }
                        else if($e==1 && $f==1)
                        {
                            echo "Please change Mobile Number and Email";
                        }
                        else if($d==1 && $e==1 && $f==1)
                        {
                            echo "Please change Username Mobile Number and Email";
                        }
                        else if(empty($_POST["name"]))
                        {
                            echo "Name is required!";
                        }
                        else if(empty($_POST["uname"]))
                        {
                            echo "Userame is required!";
                        }
                        else if(empty($_POST["cno"]))
                        {
                            echo "Mobile number is required!";
                        }
                        else if(empty($_POST["email"]))
                        {
                            echo "Email-id is required!";
                        }
                        else if(empty($_POST["password"]))
                        {
                            echo "Password is required!";
                        }

                        else
                        {
                            $sql = "INSERT INTO `parking`(`uname`,`name`, `cno`, `email`, `password`) VALUES ('$uname','$name','$cno','$email','$password')";
                    $p = mysqli_query($db,$sql);
                        }
}

if(isset($_POST['c_reg']))
{
    echo "Succcesfully registered.....";
    echo "Thanks for registering";
    header('location:..\index.php');
}

?>