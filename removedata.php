<?php
 $id=$_POST['id'];

  
 $con= mysqli_connect('localhost','root','');
 
  mysqli_select_db($con,'project')or die('not connected');
  $a="select bk_id from b_fine where std_id=$id";
  $result2=mysqli_query($con,$a);
  $row=mysqli_fetch_array($result2);
  $q="delete  from student where std_id=$id";
  $r="delete  from b_fine where std_id=$id";
  $s="delete from book where bk_id=$row[0]";
  $result=mysqli_query($con,$q);
  $result1=mysqli_query($con,$r);
  $result1=mysqli_query($con,$s); 
  
  if(!isset($row))
  {
 
  echo "yo man";
  }
?>
<html>
 <head>
    <style type="text/css">
	 body{
		background-image:url(Student.jpeg);
		font-size:10px;
	}
    div{
	     
	     width: 20%;
	     border-radius:10px;
	     margin: 100px auto;
	     
	     padding:50px;
	    
	    }
	#btn{
		margin-left:90%;
		background: #FFA500;
		border-radius:20%;
	}
	</style>
 </head>
 <body>
     <div>
        <input type="button" id="btn"  value="Want to delete more data" onclick="window.location='remove.php'"/>
     </div>
 </body>
</html>