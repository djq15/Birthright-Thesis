<?php 

require_once('connection.php');
session_start();

    if(isset($_POST['LoggingIn']))
    {
       if(empty($_POST['UName']) || empty($_POST['PWord']))
       {
            header("location:../LogIn.php?Empty= Please Fill in the Blanks");

       }
       else
       {
            $query="select * from login where username='".$_POST['UName']."' and password='".$_POST['PWord']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:../dash.php");
            }
            else
            {
                header("location:../LogIn.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {

    }


?>