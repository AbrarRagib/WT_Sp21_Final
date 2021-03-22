<?php
   setcookie("test_cookie", "test", time() + 120, '/');
   $uname="";
   $pass="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $uname=$_POST["uname"];
	   $pass=$_POST["pass"];
	   if($uname == "ragib" && $pass == "1234" && count($_COOKIE) > 0){
		   echo "Cookies are enabled.";
		   header("Location: Dashboard.php");
        } 
		else {
           echo "Cookies are disabled.";
		  
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
		
		
	</body>		
</html>