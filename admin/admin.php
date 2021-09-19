<!doctype html>

<?php /*
	session_start();


	if(isset($_SESSION["User"])){ //Form Submitted
		header("location: dash.php");
	} */
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/flatpickr.min.css">

	<!-- Custom styles for this template-->
	<link rel="stylesheet" type="text/css"  href="../assets/css/sb-admin-2.min.css">
	
	<link rel="SHORTCUT ICON" href="../img/ieti.ico">
    <title>IETI - Login</title>
  </head>

  <body class="bg-primary">
	  <div class="container">

			<div class="row justify-content-center">

				<div class="col-xl-8 col-lg-12 col-md-9">

					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col ml-4 mr-4">
									<div class="p-5">
										<div class="text-center">
											<img class="mb-4" src="../assets/img/birthrightlogo.png" width="125px"/>
											<h1 class="h4 text-gray-900 mb-4">THE BIRTHRIGHT SCHOOL<br/>Admin Login</h1>
											<div id="msg"></div>
											
											
					<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
					
										</div>
										
										<!-- (restore if needed) <form action="injection/process.php" method="POST" name="LogInForm"> -->
										<form action="processTest.php" method="POST" name="LogInForm">
											<div class="form-group">
												<input type="text" autocomplete="off" class="form-control form-control-user" id="Username" name="UName" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control form-control-user" id="Password" name="PWord" placeholder="Password">
											</div>
											<!--div class="form-group">
												<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" id="customCheck">
												<label class="custom-control-label" for="customCheck">Remember Me</label>
												</div>
											</div--->
											
											<!-- <a href="./dash.php" class="btn btn-primary btn-user btn-block" name="LoggingIn" id="LogIn">Login<a>-->
											<button class="btn btn-primary btn-user btn-block" name="LoggingIn" id="LogIn">Login</button>

											
											<!-- <a href="./dash.php" > -->
											<!-- <button class="btn btn-primary btn-user btn-block" name="LoggingIn" id="LogIn">Login</button> -->
											<!-- </a> -->
											

										</form>
										
										
										
										<!--hr>
										<div class="text-center">
											<button class="btn btn-danger btn-user btn-block" onClick="javacscript: alert('Contact System Administrator!');">Forgot Password?</button>
										</div-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 




											
											
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/popper.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/AjaxHandler.js"></script>
  </body>
</html>