
 <?php
  $sid=$_POST['s_id'];
  $sn=$_POST['s_n'];
  $bid=$_POST['b_id'];
  $bn=$_POST['b_n'];
  $ba=$_POST['b_a'];
  $days=$_POST['d_t'];
  if( $days>30)
  {
	  $fine=($days-30)*2;
  }
  else
	  $fine=0;
  $con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'project')or die('not connected');
  $q="insert into student(std_id,std_name) values($sid,'$sn')";
  $r="insert into Book(bk_id,bk_name,bk_author) values($bid,'$bn','$ba')";
  $s="insert into b_fine(std_id,bk_id,no_days,fine_pay) values($sid,$bid,$days,$fine)";
 
  $result=mysqli_query($con,$q);
  $result1=mysqli_query($con,$r);
  $result2=mysqli_query($con,$s);
   if(isset($result2))
  {
 echo 'Entry succesfull';
 
 header("refresh:3,url=librarian.php");
  }
  else
  {
	  echo 'error ccured';
	   header("refresh:3,url=newentry.php");
  
	  
  }

?>
<html>


 <head>
    <style type="text/css">
	     div{
	    border: solid red;
		width: 40%;
		border-radius:20px;
		padding: 50px;
		margin:200px auto;
	  
	}
	<style>
 </head>
 <body>

    </body>
</html>