<?php 
    session_start();
    if(isset($_GET['logout']))
    {
		unset($_SESSION['User']);  
        session_destroy();
        header("location:../LogIn.php");
		exit;
    }

?>