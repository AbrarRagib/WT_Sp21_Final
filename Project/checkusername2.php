<?php
	require 'controllers/deliveryman_reg_controller.php';
	$username = $_GET["uname"];
	$rs = checkUsername($username);
	if($rs){
		echo "true";
	}
	else echo "false";
?> 