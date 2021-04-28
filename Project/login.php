<?php 
     require_once "controllers/login_controller.php";
     if(isset($_GET["logout"]) && $_GET["logout"] == "true"){
        session_start();
        session_destroy();
     }
?>

<html>
<head>
<style>
body{
    background-color: #20B2AA ; 
}
input[type=submit] {
 
  background-color: blue;
  color: white;
  padding: 8px 26px;
  margin: 15px 0;
}
</style>
</head>
<body>
</head>
<form action="" method = "POST">
<fieldset>
<body>
        <table>

            <tr>
                <td><h2 style="color:#00008B;" >Admin login</h2></td>
                <td><img src="images/img_1.jpg" alt="Encryption picture" width="400" height="200"></td>
            </tr>
            <tr>
             <td><h2>Login here</h2></td>
            </tr>
            </table>
            <form action="" method="post">
            <table>
                 <tr>
                    <td><span>Username:</span></td>
                    <td><input type="text"  name="username" value="<?php echo $username; ?>"placeholder="Username">
                    <span><?php echo $err_username; ?></span>
                    </td>
                 </tr>
                 <tr>
                    <td><span>Password: </h4></span></td>
                    <td><input type="password" name="password" placeholder="Password">
                    <span><?php echo $err_password; ?></span>
                    </td>
                 </tr>
                 <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                 </tr>
                 <!--tr> 
                    <td><br><br>First time!!!!!<br><a href="reg.php">Sign Up</a></td>
                 </tr-->

        </body>
        </fieldset>
        </form>
        </html>