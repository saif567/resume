<html>
 <head>
    <script type="text/javascript">
	  function buttonclick()
	  {
		  //window.location="www.";
		  alert('you');
	  }
    </script>	
   <style type="text/css">
    body{
		background-image:url(Student.jpeg);
		font-size:10px;
	}
    div{
	
		width: 50%;
		border-radius:20px;
		padding: 50px;
		margin:200px auto;
	  
	}
	
	
	#btn{
		margin-left:90%;
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
	  <form action="newentrydata.php" method="post">
	  <table>
      <p>
	    <tr>
          <td><label>Student ID :</label></td>
     	  <td><input type="Number" name="s_id" id="id1"/></td>
		</tr>  
		<tr>
		  <td><label>Student Name :</label></td> 
		  <td><input type="Text" name="s_n"  id="s_name"/></td>
		</tr>
        <tr>		
		  <td><label>Book Id :</label></td>
		  <td><input type="Number" name="b_id"  id="id2"/></td>
		 </tr>
  		<tr> 
		  <td><label>Book Name :</label></td>
		  <td><input type="Text" name="b_n"  id="b_name"/></td>
		</tr>
		<tr> 
		  <td><label>Book_author :</label></td>
		  <td><input type="Text" name="b_a"  id="b_author"/><td>
        </tr>
        <tr> 
		  <td><label>No of Days :</label></td>
		  <td><input type="number" name="d_t"  id="d" /><td>
        </tr>		  		
		<tr> 
		  <td><label>No of Days :</label></td>
		  <td><input type="date" name="d_t1"  id="d1" /><td>
        </tr>		  		
		<tr  >
		  <th colspan="2"><input type="Submit" name="Submit" value="Submit" id="btn" onclick=""/></th>
		</tr>		
	  </p>
	  </table>
	  </form>
    </div>
 </body>
</html>