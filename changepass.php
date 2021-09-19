<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>
<!-- <a href="profile.php?edit=<?php echo $_SESSION['User']; ?>">Back</a> -->
<a href="profile.php">Back</a>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
</head>

<body>

	<form action="" method="POST" name="changepass">
		<div class="form-group">
			<input type="password" class="form-control form-control-user" id="Password" name="PWord" placeholder="Current Password">
		</div>
		<div class="form-group">
			<input type="password" class="form-control form-control-user" id="Password" name="NPWord" placeholder="New Password">
		</div>
		<div class="form-group">
			<input type="password" class="form-control form-control-user" id="Password" name="CNPWord" placeholder="Confirm New Password">
		</div>
								
		<button type = "submit" name = "update" class = "btn">Change Password</button>
		
<div>		

<!-- php portion -->
<?php 

$error = NULL;
$primeerror = NULL;
require_once('injection/connectionTest.php');
//session_start();



    if(isset($_POST['update']))
    {
	
	$u = $mysqli->real_escape_string($_POST['UName']);
	$p = $mysqli->real_escape_string($_POST['PWord']);
	$np = $mysqli->real_escape_string($_POST['NPWord']);
	$cnp = $mysqli->real_escape_string($_POST['CNPWord']);
	
	$p = md5($p);
	//$np = md5($np);
	$currentuser = $_SESSION['User'];
	$currentpassword = $_SESSION['Password'];
	$currentpassword = md5($currentpassword);
	   
       //if(empty($_POST['UName']) || empty($_POST['PWord']))
	   if(empty($_POST['PWord']) || empty($_POST['NPWord']) || empty($_POST['CNPWord']))
       {
		    
			//$primeerror = $currentpassword;
			$primeerror = "Please Fill in the Blanks";
			
		    
            //header("location:changepass.php?Empty= Please Fill in the Blanks");
			
       }
       else
       {
            //$query="select * from login where username='".$_POST['UName']."' and password='".$_POST['PWord']."'";
			
			//$resultSet = $mysqli->query("select * from login where username='".$_POST['UName']."' and password='".$_POST['PWord']."' LIMIT 1");
			//$resultSet = $mysqli->query("SELECT * FROM login WHERE username = '$u' AND password = '$p' LIMIT 1");
			$resultSet = $mysqli->query("SELECT * FROM birthright_db.login WHERE password = '$p' LIMIT 1");
			//$resultSet = $mysqli->query("SELECT * FROM login WHERE username = '$u' AND password = '$p' LIMIT 1 and username='$currentuser'");

			
            //$result=mysqli_query($mysqli,$query);

            //if(mysqli_fetch_assoc($result)) {
			if($resultSet->num_rows !=0){
				
			$row = $resultSet->fetch_assoc();
			//if ($u == $currentuser) {
			if ($p == $currentpassword) {
			//$verified = $row['verified'];
			//$email = $row['email'];
			//$date = $row['createdate'];
			//$date = strtotime($date);
			//$date = date('M d Y', $date);	
            //$_SESSION['User']=$_POST['UName'];
			//$_SESSION['tag']=$row['tag'];
			
			
			if(strlen($np) > 4) {			
			$np = md5($np);
			$cnp = md5($cnp);
			
			if ($cnp == $np) {
			$resultSet = $mysqli->query("UPDATE birthright_db.login SET password='$np' WHERE username='$currentuser'");
			//$resultSet = $mysqli->query("UPDATE birthright_db.login SET evaluation='$np' WHERE username='$currentuser'");
			
			echo "Password Has Been Changed";
			header('location: LogIn.php?Empty= Password changed. Login again with your new password.');
			}
			else 
			{	
			echo "Your new passwords do not match";	
			}
			
			
			}
			
			else
			{
			echo "Password Too Short.";
			echo '<br>';
			echo "You need a minimum of 5 characters for your password.";	
			}
			//header("location:dash.php");
			}	
			else
			{
				$primeerror = "Please Enter Correct Password";

			}
			
				
            }
            else
            {
				$primeerror = "Please Enter Correct Password";

                //header("location:changepass.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
	   echo $primeerror;

    }
    else
    {

    }


?>
		
<!-- php portion -->
</div>			
		
	</form>
	
</body>

</html>




<?php
	include_once("./web-page-parts/footer.php");
?>