		<!--
		<marquee behavior="scroll" direction="left" scrollamount="7">
		<img  src="./assets/img/pic 1.png" width="250"/>
		<img  src="./assets/img/pic 2.png" width="250"/>
		<img  src="./assets/img/pic 3.png" width="250"/>
		<img  src="./assets/img/pic 2.png" width="250"/>
		<img  src="./assets/img/pic 1.png" width="250"/>
		</marquee>
		-->
	<?php
	$num7 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='7'");	 
	$number7 = mysqli_fetch_array($num7);
	?>
	
	<!-- <marquee behavior="scroll" direction="left" scrollamount="7"> -->
	<!--
	<img src="<?php echo $number7['line1'];?>"  width="250"/>
	<img src="<?php echo $number7['line2'];?>"  width="250"/>
	<img src="<?php echo $number7['line3'];?>"  width="250"/>
	<img src="<?php echo $number7['line4'];?>"  width="250"/>
	<img src="<?php echo $number7['line5'];?>"  width="250"/>
	-->
	<!-- </marquee> -->

	<!--
	<div id="carousel">
		<div class="slide">
			<p src="<?php echo $number7['line1'];?>" width="230"/> tae </p>
		</div>
		<div class="slide">
			<p src="<?php echo $number7['line1'];?>" width="230"/> tae </p>
		</div>
	</div>
	-->
	<?php $en = mysqli_query($db, "SELECT Status, fully_paid, count(*) as enrolled FROM birthright_db.accounts, birthright_db.login, birthright_db.masterlist  where verified='1' and Status='Enrolled' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$enrolled = mysqli_fetch_array($en);
	?>
	<?php $vf = mysqli_query($db, "SELECT verified, count(*) as verified FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$verified = mysqli_fetch_array($vf);
	?>
	
	<?php $fp = mysqli_query($db, "SELECT Status, fully_paid, count(*) as fullypaid FROM birthright_db.accounts, birthright_db.login, birthright_db.masterlist  where verified='1' and Status='Enrolled' and fully_paid='Y' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$fullypaid = mysqli_fetch_array($fp);
	?>
	<?php $lp = mysqli_query($db, "SELECT Status, late_payer, count(*) as latepayer FROM birthright_db.accounts, birthright_db.login, birthright_db.masterlist  where verified='1' and Status='Enrolled' and late_payer='Y' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$latepayer = mysqli_fetch_array($lp);
	?>

	<div class="row">
	<div class="col-xl-12 col-md- mb-.70">
				  <div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
					  <div class="row no-gutters align-items-center">
						<div class="col mr-2">
						  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fully Paid&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Total Enrolled</div>
						  <div style="font-size:15px;"><?php echo $fullypaid['fullypaid']; echo "&nbsp&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsp&nbsp"; echo $enrolled['enrolled'];?></div> 

						</div>
						<div class="col-auto">
						  <i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					  </div>
					</div>
				  </div>
	</div>
	<div class="col-xl-12 col-md- mb-.70">
				  <div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
					  <div class="row no-gutters align-items-center">
						<div class="col mr-2">
						  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Late Payers&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Total Enrolled</div>
						  <div style="font-size:15px;"><?php echo $latepayer['latepayer']; echo "&nbsp&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsp&nbsp"; echo $enrolled['enrolled'];?></div> 

						</div>
						<div class="col-auto">
						  <i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					  </div>
					</div>
				  </div>
	</div>
	<div class="col-xl-12 col-md- mb-.70">
				  <div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
					  <div class="row no-gutters align-items-center">
						<div class="col mr-2">
						  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Enrolled&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Total Registered</div>
						  <div style="font-size:15px;"><?php echo $enrolled['enrolled']; echo "&nbsp&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsp&nbsp"; echo $verified['verified'];?></div>
						</div>
						<div class="col-auto">
						  <i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					  </div>
					</div>
				  </div>
	</div>
	
	
	</div>

	
<style>
#carousel {
    //width: 70%;
    // height: 360px;
	//height: 270px;
    //background-color: gray;
    //overflow: auto;
	//padding:-50px;
    //border:dotted 1px;
	white-space:nowrap;
	overflow-y:auto;
	text-align: center;
}

#carousel .slide {
    display: inline-block;
}

p {
	font-size: 50px;
}

.row {
	white-space:nowrap;
	//overflow-y:auto;
	text-align: center;
}


</style>