<?php
// remove all session variables
session_start();
unset($_SESSION["users"]);

// destroy the session
session_destroy();
header("location:login.php");

echo "All session variables are now removed, and the session is destroyed."

?>

<?php/* 
    session_start();
    if(!isset($_SESSION["users"]))   // Destroying All Sessions
    { 
        header("Location: login.php"); // Redirecting To Home Page
    }*/
?>
