<?php
	$name = "";
	$err_name = "";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$c_pass = "";
	$err_c_pass = "";
	$email = "";
	$err_email = "";
	$p_code = "";
	$err_p_code = "";
	$number = "";
	$err_number = "";
	$address = "";
	$s_add = "";
	$err_s_add = "";
	$city = "";
	$err_city = "";
	$state = "";
	$err_state = "";
	$zip = "";
	$err_zip = "";
	$day = "";
	$month = "";
	$year = "";
	$bio = "";
	$err_bio="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$hobbies="";
	$err_hobbies="";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["name"]))
		{
			$err_name = "Name Required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"]))
		{
			$err_pass = "Password Required";
		}

		else
		{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["c_pass"]))
		{
			$err_c_pass = "Password Required";
		}
		else
		{
			$c_pass = $_POST["c_pass"];
		}
		if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["number"]))
		{
			$err_number = "Number Required";
		}
		else
		{
			$number = $_POST["number"];
		}
		if(empty($_POST["p_code"]))
		{
			$err_p_code = "Code Required";
		}
		else
		{
			$p_code = $_POST["p_code"];
		}
		if(empty($_POST["s_add"]))
		{
			$err_s_add = "Street Required";
		}
		else
		{
			$s_add = $_POST["s_add"];
		}
		if(empty($_POST["city"]))
		{
			$err_city = "City Required";
		}
		else
		{
			$city = $_POST["city"];
		}
		if(empty($_POST["state"]))
		{
			$err_state = "State Required";
		}
		else
		{
			$state = $_POST["state"];
		}
		if(empty($_POST["zip"]))
		{
			$err_zip = "Zip/Postal Code Required";
		}
		else
		{
			$zip = $_POST["zip"];
		}
		if(empty($_POST["bio"]))
		{
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = $_POST["bio"];
		}


		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
		} 
		else
		{
			$gender = $_POST["gender"];
		}

		if(!isset($_POST["hobbies"]))
		{ 
			$err_hobbies = "No buttons were checked."; 
		} 
		else
		{
			$hobbies = $_POST["hobbies"];
		}

		if(!isset($_POST["profession"]))
		{ 
			$err_profession = "No buttons were chosen."; 
		} 
		else
		{
			$profession = $_POST["profession"];
		}

		echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Confirmed Password: ". $_POST["c_pass"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Post Code: ". $_POST["p_code"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Gender: ". $_POST["gender"]."<br>";
		echo "Profession: ". $_POST["profession"]."<br>";
		echo "Bio: ". $_POST["bio"]."<br>";


		$var = $_POST["hobbies"];
		echo "Hobbies: ";
		for($i=0; $i<count($var); $i++)
		{
			echo $var[$i]. ", ";
		}

	}



?>

<html>
	<head></head>
	<body>

		<fieldset>
		<legend><h1><b>Club Member Registration</b></h1></legend>

		<form action="" method="post">
			<center><table>
				<tr>
					<td><span><b>Name</b>:</span></td>
					<td>:<input type="text" name="name" value = "<?php echo $name;?>" ><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" ><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td>:<input type="password" name="c_pass" value = "<?php echo $c_pass;?>"><br>
					<td><span><?php echo $err_c_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td>:<input type="text" name="email" value = "<?php echo $email;?>" ><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone</b>:</span></td>
					<td>:<input type="text" name="p_code" size="3" placeholder = "Code" value = "<?php echo $p_code;?>"> - <input type="text" name="number" size = "9" value = "<?php echo $number;?>" placeholder = "Number"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>

					<td><span><b>Address</b>:</span></td>

					<td>:<input type="text" name="s_add" placeholder = "Street Address" value = "<?php echo $s_add;?>"><br>
					<td><span><?php echo $err_s_add;?></span></td>

				<tr>
				<td></td>
					<td>:<input type="text" name="city" size = "6" value = "<?php echo $city;?>" placeholder = "City"> - <input type="text" name="state" size = "6" value = "<?php echo $state;?>" placeholder = "State"><br>
					<td><span><?php echo $err_city;?></span></td>
					<td><span><?php echo $err_state;?></span></td>

					<tr>
					<td></td>
					<td>:<input type="text" name="zip" placeholder = "Postal/Zip Code" value = "<?php echo $zip;?>"><br>
					<td><span><?php echo $err_zip;?></span></td>
					</tr>
					</tr>
					</tr>

				<tr>
					<td><span><b>Birth Date<b>:</span></td>
					<td><select name = "day">
						:<option disabled selected>Day</option>
						<option> <?php for ($i=0;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
						?>
						</select>
					<select name = "month">
					<option disabled selected>Month</option>
					<?php
						$month= array("Jan" => "1", "Feb" => "2", "Mar" => "3", "Apr" => "4","May" => "5","Jun" => "6","Jul" => "7","Aug" => "8","Sep" => "9","Oct" => "10","Nov" => "11","Dec" => "12");
						foreach($month as $j=>$j_val)
						{
							echo "<option> $j($j_val)<option>";
						}
						?>
						</select>
						<select name = "year">
						<option disabled selected>Year</option>
						<option> <?php for ($i=1985;$i<=2002;$i++)
						{
							echo "<option>$i</option>";
						}
						?>
						</select>




				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where did you hear about us?</b>:</span></td>
					<td>:<input type="checkbox" value = "A Fried or Collegue" name = hobbies[] > A Fried or Collegue <br>
					    <input type="checkbox" value = "Google" name = hobbies[] > Google <br>
						<input type="checkbox" value = "Blog Post" name = hobbies[] > Blog Post <br>
						<input type="checkbox" value = "News Article" name = hobbies[] > News Article <br>
						<td><span><?php echo $err_hobbies;?></span></td>
				</tr>


				<tr>
					<td><span><b>Bio</b>:</span></td>
					<td>:<textarea name="bio" value = "<?php echo $uname;?>"></textarea><br>
					<td><span><?php echo $err_bio;?></span></td>
				</tr>

			</table>
			</center>
			<br>
			<center><input type="submit" name="Register"></center>
		</form>
		</fieldset>
	</body>
</html> 