<?php
   session_start();
   $uname="";
   $pass="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $uname=$_POST["uname"];
	   $pass=$_POST["pass"];
	   if($uname == "ragib" && $pass == "1234"){
		   session_start();
			$_SESSION["user"]=$uname;
			header("Location: Dashboard.php");
	   }
   }

?>
<html>
    <head></head>
	<body>
	     <form method="post">
			<input type="text" name="uname" placeholder="username"><br>
			<input type="password" name="pass" placeholder="password"><br>
			<input type="submit" value="Log In"><br>
		</form>
		
<?php
	session_destroy();
?>		
	</body>		
</html>