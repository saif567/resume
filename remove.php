

<html>
 <head>
   <style type="text/css">
    body{
		background-image:url(Student.jpeg);
	}
    div{
	
		width: 70%;
		border-radius:20px;
		padding: 50px;
		margin:200px auto;
	  
	}
	
	#btn{
		margin-left:50%;
		background: #FFA500;
		border-radius:20px;
	}
	p{
		font-size:20px;
		color:#FF7F50;
	}
	</style>
 </head>
 <?php 

 ?>
 <body>
    <div>
	  <form action="removedata.php" method="post">
	  <h2>Enter the student id you want to delete </h2>
      <p>
        <label>Student ID :</label>
     	 <input type="Number" name="id" value="Enter Id" id="id1"/>
         <input type="Submit" name="Submit" value="Submit" id="btn"/>		
	  </p>
	  </form>
    </div>
 </body>
</html>