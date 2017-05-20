<html><?php
$id=$_POST['id'];
$password=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login');
$q="insert into user values($d,$password)";
mysqli_query($con,$q);
mysqli_close($con);
Echo you have enerted ;
?>
</html>