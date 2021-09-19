

<?php 

$error = NULL;
require_once('connectionTest.php');
session_start();



    if(isset($_POST['LoggingIn']))
    {
	
	$u = $mysqli->real_escape_string($_POST['UName']);
	$p = $mysqli->real_escape_string($_POST['PWord']);
	$p = md5($p);
	
	
		
		
       if(empty($_POST['UName']) || empty($_POST['PWord']))
       {
            header("location:../LogIn.php?Empty= Please Fill in the Blanks");

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
				$_SESSION['Password']=$_POST['PWord'];
				$_SESSION['tag']=$row['tag'];
                header("location:../dash2.php");
				}
				else if ($row['tag'] == '2'){
				//if ($row['clearance_approve'] == 'Y'){
                $_SESSION['User']=$_POST['UName'];
				$_SESSION['Password']=$_POST['PWord'];
				$_SESSION['tag']=$row['tag'];
				
				
				if ($row['existing_folder'] == 'Y'){
                header("location:../dash.php");
				}
				else if ($row['existing_folder'] != 'Y'){
				
				$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
				$username = $_SESSION['User'];
				//folder creation - 1
				$Pic = "../uploads/Dex/".$username."/Pic";
	
				$Dir = "../uploads/Dex/".$username."/Student/Registrar";
				$Dirx = "../uploads/Dex/".$username."/Student/Finance";

				$Dirz = "../uploads/Dex/".$username."/Admin/Registrar";
				$Dirzx = "../uploads/Dex/".$username."/Admin/Finance";
				$announcement = $username;
				
				if (!file_exists($Dir) and !file_exists($Dirz)) {

				mkdir($Dir, 0777, true);
				mkdir($Dirx, 0777, true);

				mkdir($Dirz, 0777, true);
				mkdir($Dirzx, 0777, true);

				mkdir($Pic, 0777, true);

				echo "Folders created";

				}
				else {
				$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");
				echo "The directories for $announcement already exist.";

				}
				//folder creation - 2
				$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");
				header("location:../dash.php");
				}
				
				//}
				//else if ($row['tag'] == '2' and $row['clearance_approve'] != "Y"){
				//$_SESSION['User']=$_POST['UName'];
				//$_SESSION['Password']=$_POST['PWord'];
				//$_SESSION['tag']=$row['tag'];
				//header("location:../tempologin.php");
				//header("location:../LogIn.php?Invalid= Please make sure the registrar has approved your enrollment ");
				//}
				
				}
				else
				{
                header("location:../LogIn.php?Invalid= Please Enter Correct User Name and Password ");
				}
					
					
			}	
			else {
			$error = "Account not yet verified. Email was sent to $email";
			echo $error;
			header("location:../LogIn.php?Invalid= Account not yet verified. Email was sent to $email ");
			}
				
				
				
            }
            else
            {
                header("location:../LogIn.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
		header("location:../LogIn.php?Invalid= Something went wrong. Login in again. ");
    }
?>


