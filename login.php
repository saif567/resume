<html>
 <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css"href="logincss.css">
   
 </head>
 <body>
  <div id="frm">
    <form action="user.php" method="post">
	<p>
	  <label>Your id:</label>
      <input type="number" placeholder="Enter id" name="id"/><br/>
	</p>
	<p>
	   <label>Password:</label>
	   <input type="password" placeholder="Enter Password" name="pass"/><br/>
	 </p>
	 <p>
	   <input type="submit" id="btn" value="Login"name="submit"/>
	 </p>
	</form>
 </body>
</html>