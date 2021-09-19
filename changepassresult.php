<?php 

$error = NULL;
require_once('injection/connectionTest.php');
session_start();



    if(isset($_POST['update']))
    {
	
	$u = $mysqli->real_escape_string($_POST['UName']);
	$p = $mysqli->real_escape_string($_POST['PWord']);
	$p = md5($p);
	
	
		
		
       if(empty($_POST['UName']) || empty($_POST['PWord']))
       {
		    
            header("location:changepass.php?Empty= Please Fill in the Blanks");
			echo "Please Fill in the Blanks";
       }
       else
       {
            //$query="select * from login where username='".$_POST['UName']."' and password='".$_POST['PWord']."'";
			
			//$resultSet = $mysqli->query("select * from login where username='".$_POST['UName']."' and password='".$_POST['PWord']."' LIMIT 1");
			$resultSet = $mysqli->query("SELECT * FROM login WHERE username = '$u' AND password = '$p' LIMIT 1");

			
            //$result=mysqli_query($mysqli,$query);

            //if(mysqli_fetch_assoc($result)) {
			if($resultSet->num_rows !=0){
				
			$row = $resultSet->fetch_assoc();
			$verified = $row['verified'];
			$email = $row['email'];
			$date = $row['createdate'];
			$date = strtotime($date);
			$date = date('M d Y', $date);	
				
				
			if($verified == 1) {
				if ($row['tag'] == '1' or $row['tag'] == '3' or $row['tag'] == '4'){
                $_SESSION['User']=$_POST['UName'];
				$_SESSION['tag']=$row['tag'];
                header("location:../dash.php");
				}
				else if ($row['tag'] == '2'){
				if ($row['clearance_approve'] == 'Y'){
                $_SESSION['User']=$_POST['UName'];
                header("location:../dash.php");
				}
				else{
				header("location:changepass.php?Invalid= Please make sure the registrar has approved your enrollment ");
				}
				}
				else
				{
                header("location:changepass.php?Invalid= Please Enter Correct User Name and Password ");
				}
					
					
			}	
			else {
			$error = "Account not yet verified. Email was sent to $email on $date";
			echo $error;
			}
				
				
				
            }
            else
            {
                header("location:changepass.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {

    }


?>