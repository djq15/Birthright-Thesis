<?php
	include("filter.php");
    //session_start();
?>	

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		  <!-- Sidebar - Brand -->
		  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
			<div class="sidebar-brand-icon">
			  <img src="./assets/img/birthrightlogo.png" width="50px"/>
			</div>
			<div class="sidebar-brand-text mx-3">THE BIRTHRIGHT SCHOOL</div>
		  </a>

		  <!-- Divider -->
		  <hr class="sidebar-divider my-0">

		  <!-- Nav Item - Dashboard -->
		  <li class="nav-item active">
			<a class="nav-link" href="./dash.php">
			  <i class="fas fa-fw fa-tachometer-alt"></i>
			  <span>Home</span></a>
		  </li>

		  <!-- Divider -->
		  <hr class="sidebar-divider">

		  <!-- Heading -->
		  <div class="sidebar-heading">
			Academic
		  </div>

		  <!-- Nav Item - Pages Collapse Menu -->
		  <li class="nav-item">
			<a class="nav-link collaps" href="./404.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			  <i class="fas fa-fw fa-landmark"></i>
			  <span>Student Information</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Information</h6>
				
				<?php
				//panel 2 (admins) -- Students information
				include ('grademonitoringserver3.php');
		
				?>
				
				<?php
				//panel 2 (admins)
				//include ('studentaccounts.php');
				?>
				
				<?php
				//panel 2 (admins) -- Students balance
				include ('studentaccounts2.php');
				?>
				
				
				<?php
				//panel 2 (students) -- Basic Info
				include ('viewingserver.php');
		
				?>
				
				<?php
				//panel 2 (students) -- Accounts
				include ('viewingserver2.php');
		
				?>

			  </div>
			</div>
		  </li>

		  <!-- Nav Item - Utilities Collapse Menu -->
		  <li class="nav-item">
			<a class="nav-link collapsed" href="./404.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			  <i class="fas fa-fw fa-clipboard"></i>
			  <span>Student Management</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Management</h6>
				
				
				<?php
				
				include ('preenrollment.php');
				// admins -- Pre-enrollment Files
				?>
				
				<?php
				
				include ('studentclearanceserverz.php');
				// admins -- Student Files
				?>
				
				<?php

				include ('clearanceserverz.php');
				// admins -- Student Activation
				?>
				

				<!-- <a class="collapse-item" href="clearanceactivation.php">Clearance Activation</a> -->
				
				<div class="collapse-divider"></div>
				<!--<h6 class="collapse-header">Reports:</h6>-->
				<!--<a class="collapse-item" href="./404.php">Clearance Copy</a>-->
				
				<?php

				include ('studentupload.php');
				//students
				?>
				
				<?php

				include ('folderattachment.php');
				//students
				?>
			
				<?php

				//include ('clearancecopyserver.php');
				//students
				?>

			  </div>
			</div>
		  </li>

		  <!-- Divider -->
		  <hr class="sidebar-divider">

		  <!-- Heading -->
		  <div class="sidebar-heading">
			Social
		  </div>

		  <!-- Nav Item - Pages Collapse Menu -->



		  <!-- Nav Item - Grade Monitoring -->
		  <li class="nav-item">
			<a class="nav-link collapsed" href="./404.php" data-toggle="collapse" data-target="#collapseGradeMonitoring" aria-expanded="true" aria-controls="collapseGradeMonitoring">
			  <i class="fas fa-fw fa-table"></i>
			  <span>Commonly Asked</span>
			</a>
			<div id="collapseGradeMonitoring" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<!--<h6 class="collapse-header">Reports:</h6>-->
				


				
				<a class="collapse-item" href="./aboutus.php">About Us</a>
				<a class="collapse-item" href="./contactus.php">Contact Us</a>
				

				
				<!--<a class="collapse-item" href="./gradeviewing.php">Grade Viewing</a>-->
				
			  </div>
			</div>
		  </li>

		  <!-- Nav Item - Tables -->
		  <li class="nav-item">
			<a class="nav-link collapsed" href="./404.php" data-toggle="collapse" data-target="#collapseClearanceMonitorings" aria-expanded="true" aria-controls="collapseClearanceMonitorings">
			  <i class="fas fa-fw fa-tasks"></i>
			  <span>Media</span>
			</a>
			<div id="collapseClearanceMonitorings" class="collapse" aria-labelledby="headingClearanceMonitorings" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<!--<h6 class="collapse-header">Settings:</h6>-->
				
				
				<a class="collapse-item" target="_blank" href="./videos.php">Videos</a>
				<a class="collapse-item" target="_blank" href="https://www.facebook.com/pages/Birthright-Educators-Foundation-Inc/504525256307501">Facebook</a>
				<a class="collapse-item" target="_blank" href="https://twitter.com/TBEF">Twitter</a>
			  
			  </div>
			  
			</div>
		  </li>

		  <!-- Divider -->
		  <hr class="sidebar-divider d-none d-md-block">

		  <!-- Sidebar Toggler (Sidebar) -->
		  <div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		  </div>

		</ul>
		<!-- End of Sidebar -->