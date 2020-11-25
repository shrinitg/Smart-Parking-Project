<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$response = array();
if (isset($_GET['username'])&&isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3'])
&& isset($_GET['s4'])&& isset($_GET['s5']) ) {
 $username = $_GET['username'];
 $s1 = $_GET['s1'];
  $s2 = $_GET['s2'];
   $s3 = $_GET['s3'];
    $s4 = $_GET['s4'];
     $s5 = $_GET['s5'];
 
 
$d1 = mysqli_connect('localhost','root','','database')
 $db = new DB_CONNECT();
 $result = mysqli_query("UPDATE table_name SET s1 = s1, s2 = s2, s3 = s3, s4 = s4, s5 = s5;");
 if ($result!=0) {
 	echo "sucessfully update";
 }
?>