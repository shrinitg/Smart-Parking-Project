<?php

 if(isset($_POST['submit'])){
	  
	  $pincode=$_POST['pincode'];//read tre pincode
	  $data = "SELECT* empty slot FROM `students` Where pincode = '$pincode'";
	   $result = mysqli_query($db, $data);
	    while($rows = mysqli_fetch_assoc($result))
 {
 	$c= $rows['empty slot'];
	  $data = "SELECT  `name of parking`, `addresh`, `toatal slot`, `filled slot`, `mobile` FROM `students` Where empty slot = '$c'";//select data from database
	   $result = mysqli_query($db, $data);  
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>parking</title>
</head>
<body>


<table>
	<tr>
		<th>name of parking</th>
		<th>addresh</th>
		<th>total slot </th>
		<th>empty slot</th>
		<th>felled slot</th>
		<th>mobile</th>
	</tr>
	<?php

  while($rows = mysqli_fetch_assoc($result))
 {
 	$name = $rows['name of hospital'];
			$a = $rows['addresh'];
			$b = $rows['total slot'];
			$c= $rows['empty slot'];
			$d = $rows['filled slot'];
			$e = $rows['mobile'];
			
	  ?>
	
	  <tr>
	  	
	  	<th><?php echo $name; ?></th>
		<th><?php echo $a; ?></th>
		<th><?php echo $b; ?></th>
		<th><?php echo $c; ?></th> 
		<th><?php echo $d; ?></th>
		<th><?php echo $e; ?></th> 
	</tr>
  <?php 
	 } } }?>
</table>




</body>
</html>

