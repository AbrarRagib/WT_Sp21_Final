<?php
require_once "controllers/dashboard_controller.php";
?>




<html>
	<head>
		<style>
			 body{
			 background-color:#20B2AA;
			 }
						 a:link, a:visited {
			  background-color: blue;
			  color: white;
			  padding: 14px 25px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			}

			a:hover, a:active {
			  background-color: red;
			}
		</style>
	</head>
<body>
	

<h1>Dashboard Welcome:<?php echo $_SESSION["users"];?></h1>
	<fieldset>
		<legend><b><h3>Select</h3></b></legend>


			<br><a href="seller.php" ><b>Seller</b></a></br>
			<br><a href="delivery_man.php" ><b>Delivery Man</b></a></br>
			<br><a href="books.php" ><b>Books</b></a></br>
			<br><a href="buyers_info.php" ><b>Buyers Info</b></a><br>
			<br><a href="logout.php" ><b>logout</b></a><br>
			
			
			

</body>
</html>