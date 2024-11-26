<?php
include("Admin/includes/function.php");

if(isset($_SESSION['LoggedInUser'])){
    unset($_SESSION['LoggedInUser']);
    logoutSession();
    echo "<script>window.open('login','_self')</script>";
    $_SESSION['danger'] = "You've Logged Out.";
}

?>