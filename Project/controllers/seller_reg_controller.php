<?php
	require_once "models/db_config.php";
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$mobile="";
	$err_mobile_numb="";
	$hasError = false;
	
	
	 if(isset($_POST["submit"]))
	 {
		if(empty($_POST["name"]))
		{
			$err_name="[Name Required}]";
			$hasError = true;
		}
		else 
		{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
			 $hasError = true;
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
			 $hasError = true;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
			 $hasError = true;
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
			 $hasError = true;
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
			 $hasError = true;
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
			 $hasError = true;
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(empty($_POST["email"]))
		 {
			 $err_email="[Email Required]";
			 $hasError = true;
		 }else{
			 $email=htmlspecialchars($_POST["email"]);
		 }
		if(empty($_POST["mobile"]))
		{
			$err_mobile_numb="[Mobile Number Required]";
			$hasError = true;
		}else
		{
			$mobile=$_POST["mobile"];
		}
		if(!$hasError){
            insertUser($name,$uname,$pass,$gender,$email,$mobile);
        }
		 
	 }
	 
	 
		function insertUser($name,$uname,$pass,$gender,$email,$mobile)
		{
             $query="INSERT INTO `seller_add` (`id`, `name`, `uname`, `pass`, `gender`, `email`, `mobile`) VALUES (NULL, '$name', '$uname', '$pass', '$gender', '$email', '$mobile');";
             execute($query);
		}
		
		
		function checkUsername($username){
		$query = "select * from seller_add where uname='$username'";
		$result = get($query);
		if(count($result) > 0){
			return false;
		}
		return true;		
	}
		?>