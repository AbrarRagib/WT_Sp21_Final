<?php
require_once "controllers/deliveryman_reg_controller_js.php";
require_once "controllers/deliveryman_reg_controller.php";
require_once "controllers/dashboard_controller.php";
?>

<html>
	<head>
		<style>
			 body{
			 background-color:gray;
			 }
		</style>
	</head>
	<body>
		<h1>Add DeliveryMan</h1>
		<form action="" onsubmit="return validate()" method="post">
			<fieldset>
		<legend><b><h3>Add</h3></b></legend>
			<table>
			    <tr>
				<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="name"  id="name"  value="<?php echo $name;?>"placeholder="name">
					<span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" onfocusout="checkUsername(this)" id="uname"  value="<?php echo $uname;?>"placeholder="uname">
					<span id="err_uname"> <?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" id="pass" value="<?php echo $pass;?>"placeholder="password">
					<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" id="male"  value="Male"><span>Male</span>
					    <input type="radio" name="gender" id="female" value="Female"><span>Female</span>
						<span id="err_gender" ><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="email" name="email" id="email"  value="<?php echo $email;?>"placeholder="email">
					<span id="err_email" ><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Mobile</b></span></td>
					<td>:<input type="tel" name="mobile" id="mobile"  value="<?php echo $mobile;?>"placeholder="mobile">
					<span id="err_mobile_numb" ><?php echo $err_mobile_numb;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="submit" value="Register">
		</form>
	</body>
</html>



<script>//AJAX
	function checkUsername(uname){
		//alert(uname.value);
		var name = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				rs=rs.trim();
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "";
				}
				else document.getElementById("err_uname").innerHTML = "Not a valid username";
			}
		};
		xhttp.open("GET","checkusername2.php?uname="+name,true);
		xhttp.send();
	}
</script>