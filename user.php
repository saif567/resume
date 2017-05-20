<?php
 $id= $_POST['id'];
 $pass=$_POST['pass'];
 mysqli_query("insert into user(id,password) values ('$id','$pass')");
/*$id=stripcslashes($id);*/
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
/*$q="insert into user(id,password) values($id,$password)";
mysqli_query($con,$q);
mysqli_close($con);
echo "you entered";*/
?>
