<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] =="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

	<?php include('chart1.php'); ?>
	<?php include('chart2.php'); ?>

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
				<div class="col-xl-6 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Enrolled Students Chart</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->
					<div style="text-align:center;height:230px;" id="piechart"></div>
					<p style="text-align: center;"> Total Registered Students: 
					<?php $rec = mysqli_query($db, "SELECT verified, count(*) as ahihi FROM birthright_db.masterlist, birthright_db.login where verified='1' and user_id=Student_No");
					$record = mysqli_fetch_array($rec);
					echo $record['ahihi'];
					?>		
					</p>
					 </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				
				
				<!-- another chart -->
				<div class="col-xl-6 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Gender Distribution</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->
					<div style="text-align:center;height:230px;" id="piechart2"></div>
					<p style="text-align: center;"> Total Registered Students: 
					<?php $rec = mysqli_query($db, "SELECT verified, count(*) as ahihi FROM birthright_db.masterlist, birthright_db.login where verified='1' and user_id=Student_No");
					$record = mysqli_fetch_array($rec);
					echo $record['ahihi'];
					?>		
					</p>
					  </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				<!-- another chart -->

				<!-- Pie Chart -->
				<div class="col-xl-6 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Student Status</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->
					 <?php

					//$path = "uploads/dex/Dexer/Student/Registrar/";
					include('fullypaidchart.php');

					?>
					  </div>
					  
					  <div class="mt-4 mb-3 pb-1 text-center small">
					 

					  </div>
					</div>
					<!-- <p> lower part </p> -->
				  </div>
				  
				</div>
				
				<div class="col-xl-6 col-lg-5">
				  <div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					  <h6 class="m-0 font-weight-bold text-primary">Payments Report</h6>
					</div>
					<!-- Card Body -->
					<!-- <p> top part </p> -->
					<div class="card-body">
					
					  <div class="chart-pie pt-4 pb-2">
					  
						<!-- <canvas id="ChartGenderDistribution"></canvas> --> <!-- responsible for the graph -->
					  <!-- <img  src="./assets/img/pic 2.png" width="250"/> -->



					<?php //include('featuredpics.php'); ?>
					<?php include('monthlypaymentchart.php'); ?>
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
		<!--
		TESTING PIE CHART
		
 <?php  
 $connectz = mysqli_connect("localhost", "root", "ieti19", "birthright_db");  
 //$query = "SELECT gender, count(*) as number FROM tbl_employee GROUP BY gender";  
 $queryz = "SELECT count(*) as number FROM birthright_db.masterlist GROUP By Status";
 $resultz = mysqli_query($connectz, $queryz);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
            
		   <script type="text/javascript" src="gstatic.js"></script> 
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($resultz))  
                          {  
                               echo "['".$row["Status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of enrolled students',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  


		TESTING PIE CHART
		-->
		
<?php
	include_once("./web-page-parts/footer.php");
?>