<?php 
	header("location: ./404.php");

	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="./classes.php">Classes</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">Add Class</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
			</div>
		  </div>

        </div>
        <!-- /.container-fluid -->

<?php
	include_once("./web-page-parts/footer.php");
?>