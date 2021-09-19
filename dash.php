
<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>


		<div class="container-fluid">

          <!-- Page Heading -->
			<!--div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<a href="./404.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
			<!--/div-->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<!-- <li class="breadcrumb-item text-gray-800" aria-current="page">Home Page</li> -->
					<li class="m-0 font-weight-bold text-primary" aria-current="page">Home Page</li>
					
				</ol>
			</nav>

		  
          
			
			
			<div class="row">

				<!-- Area Chart -->
				<div class="col-xl-7 col-lg-7">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
						<!-- <canvas id="ChartEnrolledStudents"></canvas> --> <!-- responsible for the graph -->
						
						<?php include('dashannouncement.php'); ?>
					  
					  <div id="ChartLegends" class="mt-0 mb-0 text-center small"></div>
					  
					</div>
					
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				
				
				<!-- another chart -->
				<div class="col-xl-5 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Featured Video</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->
					<video width="300" height="300"  align="right" style="display:block; margin: 0 auto;width:100%; height:100%;" controls>
						<source src="<?php echo $number6['line2']; ?>" type="video/mp4">
					</video>
					  </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				<!-- another chart -->

				<!-- Pie Chart -->
				<div class="col-xl-7 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Lists and documentations</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->
					 <?php

					//$path = "uploads/dex/Dexer/Student/Registrar/";
					$path = "lists/";
					$dir = opendir($path) or die ("Folder does not exist");



					while($file = readdir($dir))
					{
						
						if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
							
						continue;	
						//echo "<a href='Dexer/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
						//echo "<a href='$username/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
						echo "<a href='lists/$file'>$file</a><br>";
					}
					closedir($dir);


					?>
					  </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				
								<div class="col-xl-5 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Featured Pictures</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->



					<?php include('featuredpics.php'); ?>
					
					  </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				
			</div>

			  <!-- Content Row -->
			<div class="row">

				<!-- Content Column -->
				<!--div class="col-lg-6 mb-4">

				  <!-- Project Card Example -->
				  <!--div class="card shadow mb-4">
					<div class="card-header bg-primary py-3">
					  <h6 class="m-0 font-weight-bold text-white">Administrative Tasks</h6>
					</div>
					<div class="card-body">
					  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
					  <div class="progress mb-4">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
					  <div class="progress mb-4">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
					  <div class="progress mb-4">
						<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
					  <div class="progress mb-4">
						<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
					  <div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					</div>
				  </div>

				</div-->

				
				<!-- <div class="col-lg-5 mb-4"> -->

				
			</div>

		</div>
		<!-- /.container-fluid -->

<?php
	include_once("./web-page-parts/footer.php");
?>