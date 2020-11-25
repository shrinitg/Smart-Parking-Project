<?php
session_start();
session_destroy();
unset($_SESSION['uname']);
$_SESSION['message']="Loged Out Successfully";

header('location:customer/c_login.php')
?>