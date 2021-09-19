
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


	<!--<div id="carousel">
		<div class="slide">
			<img src="<?php echo $number7['line1'];?>" width="230"/>
		</div>
		<div class="slide">
			<img src="<?php echo $number7['line2'];?>" width="230"/>
		</div>
		<div class="slide">
			<img src="<?php echo $number7['line3'];?>" width="230"/>
		</div>
		<div class="slide">
			<img src="<?php echo $number7['line4'];?>" width="230"/>
		</div>
		<div class="slide">
			<img src="<?php echo $number7['line5'];?>" width="230"/>
		</div>
	</div>-->
	<?php $rec = mysqli_query($db, "SELECT verified, count(*) as ahihi FROM birthright_db.masterlist, birthright_db.login where verified='1' and user_id=Student_No");
		$record = mysqli_fetch_array($rec);
	?>
	
	
	<?php $mon1 = mysqli_query($db, "SELECT month1, count(*) as month1 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month1!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month1 = mysqli_fetch_array($mon1);
	?>
	<?php $mon2 = mysqli_query($db, "SELECT month2, count(*) as month2 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month2!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month2 = mysqli_fetch_array($mon2);
	?>
	<?php $mon3 = mysqli_query($db, "SELECT month3, count(*) as month3 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month3!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month3 = mysqli_fetch_array($mon3);
	?>
	<?php $mon4 = mysqli_query($db, "SELECT month4, count(*) as month4 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month4!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month4 = mysqli_fetch_array($mon4);
	?>
	<?php $mon5 = mysqli_query($db, "SELECT month5, count(*) as month5 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month5!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month5 = mysqli_fetch_array($mon5);
	?>
	<?php $mon6 = mysqli_query($db, "SELECT month6, count(*) as month6 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month6!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month6 = mysqli_fetch_array($mon6);
	?>
	<?php $mon7 = mysqli_query($db, "SELECT month7, count(*) as month7 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month7!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month7 = mysqli_fetch_array($mon7);
	?>
	<?php $mon8 = mysqli_query($db, "SELECT month8, count(*) as month8 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month8!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month8 = mysqli_fetch_array($mon8);
	?>
	<?php $mon9 = mysqli_query($db, "SELECT month9, count(*) as month9 FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and Status='Enrolled' and month9!='0' and user_id=student_id and user_id=Student_No and student_id=Student_No");
		$month9 = mysqli_fetch_array($mon9);
	?>
	
	
	<table class="table">
	<div class="card border-left-info shadow h-100 py-2">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Per Month Payments Report</div>
	<div class="vertical-menu">
			
			<p> Students paid for month1:&nbsp;&nbsp; <?php
				echo $month1['month1'];
			?></p>

			<p> Students paid for month2:&nbsp;&nbsp; <?php
				echo $month2['month2'];
			?></p>

			<p> Students paid for month3:&nbsp;&nbsp; <?php
				echo $month3['month3'];
			?></p>


			<p> Students paid for month4:&nbsp;&nbsp; <?php
				echo $month4['month4'];
			?></p>
		

			<p> Students paid for month5:&nbsp;&nbsp; <?php
				echo $month5['month5'];
			?></p>
		
		
			<p> Students paid for month6:&nbsp;&nbsp; <?php
				echo $month6['month6'];
			?></p>
		
		
			<p> Students paid for month7:&nbsp;&nbsp; <?php
				echo $month7['month7'];
			?></p>
			
			<p> Students paid for month8:&nbsp;&nbsp; <?php
				echo $month8['month8'];
			?></p>
			
			<p> Students paid for month9:&nbsp;&nbsp; <?php
				echo $month9['month9'];
			?></p>
			
	</div>
	</div>
	</table>
	
	
	
<style>
.vertical-menu {
    width: 200px;
    height: 150px;
    overflow-y: auto;
    width: 300px;
    margin-left: 12%;
	margin: auto;
}

.table {
	
}

p {
	font-size: 18px;
	text-align: center;
}


</style>