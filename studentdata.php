<?php

 $id=$_POST['id'];
   
?>
<?php
  
   $con= mysqli_connect('localhost','root','');
   mysqli_select_db($con,'project')or die('not connected');
  
   ?>
  <?php
    $q="Select * from b_fine where std_id=$id";
	$a="select std_name from student where std_id=$id";
    $result=mysqli_query($con,$q);
	$result1=mysqli_query($con,$a);
	
	
?>
<html>
 <head>
  <style type="text/css">
     div{
	    border: ;
		width: 40%;
		border-radius:20px;
		padding: 50px;
		margin:200px auto;
	  
	}
	  body{   background-image:url(hot.jpeg);
	        background-position:50% ; 
			background-repeat:repeat;
	     }
  </style>
 </head>
 <body>
  
  <div>
  <table border='1' cellpadding='10'>
  <tr>
    <th>Student ID</th>
	<th>Student Name</th>
	<th>BOOK ID</th>
	<th>Number of days</th>
	<th>Fine</th>
  </tr>
   <?php
    $num=mysqli_num_rows($result);
    for($i=0;$i<$num;$i++)
	{
     
	  $row=mysqli_fetch_array($result);
	  $row1=mysqli_fetch_array($result1);
	
  
   ?>
   <tr>
     <td><?php echo $row['std_id'];?></td>
	 <td><?php echo $row1['std_name'];?></td>
	 <td><?php echo $row['bk_id'];?></td>
	 <td><?php echo $row['No_days'];?></td>
	 <td><?php echo $row['fine_pay'];?></td>  
   </tr>
	<?php  } ?>
   </table>
  </div>
  </body>
</html>