<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <table align="center">
<tr>
    <th>name of owner</th>
    <th>name of parking</th>
    <th>oner mobile number</th>
    <th>pincode</th>
    <th>Total Slot</th>
    <th>empty slot</th>
    <th>filled slot</th>
  </tr>
</body>
</html>
<?php
error_reporting(0);
$db = mysqli_connect('localhost','root','','khad');

      
 //         while($rows = mysqli_fetch_assoc($id2))
 // { 

 //  $id = $rows['id'];
  

 
 // }

 if(isset($_POST['find'])){
  
   $pincode = mysqli_real_escape_string($_POST['pincode']);
   

    $data = "SELECT `ep` FROM `main` Where pincode = '$pincode' ";
    $result = mysqli_query($db, $data);

      while($rows = mysqli_fetch_assoc($result))
 {
  
  
  $p= $rows['ep'];
  
    $data = "SELECT  `oname`, `pname`, `ocno`, `pincode`, `tp`,`fp`,`ep` FROM `main` Where ep = '$p'";//select data from database
     $result1 = mysqli_query($db, $data);
  
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>parking</title>
  <style>
table, th, tr {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>



  
  <?php

  while($rows = mysqli_fetch_assoc($result1))
 {
  
      $name = $rows['oname'];
      $a = $rows['pname'];
      $b = $rows['ocno'];
      $c = $rows['pincode'];
      $d = $rows['tp'];
      $e = $rows['ep'];
      $f = $rows['fp'];
      
    ?>
  
    <tr>
      
      <th><?php echo $name; ?></th>
    <th><?php echo $a; ?></th>
    <th><?php echo $b; ?></th>
    <th><?php echo $c; ?></th> 
    <th><?php echo $d; ?></th>
    <th><?php echo $e; ?></th> 
    <th><?php echo $f; ?></th> 
  </tr>
  <?php 
  } } }?>
</table>




</body>
</html>