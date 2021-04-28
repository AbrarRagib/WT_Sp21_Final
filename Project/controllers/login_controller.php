<?php
 require_once 'models/db_config.php';
$username = "";
$err_username = "";
$password = "";
$err_password = "";
// $err_message="";

 if(isset($_POST["login"])){ 
    if (empty($_POST["username"])) {
        $err_username = "Username Required";
    } else {
        $username =($_POST["username"]);
    }
    if (empty($_POST["password"])) {
        $err_password = "Password Required";
    } else {
        $password = ($_POST["password"]);
    }
    if(authenticateUser($username,$password)){
            session_start();
            $_SESSION["users"]=$username;
            header ("Location: dashboard.php");
        }
        else{
            echo "Invalid username or password";
        }
    }

    function authenticateUser($username,$password){
        $query ="select * from admin where username='$username' and password='$password'";
        $result = get($query);
        if( count($result)>0){
            return true;
    }
        return false;
  }
?>