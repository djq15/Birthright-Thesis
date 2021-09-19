<?php
	//session_start();

	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	
	$num1 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='1'");	 
	$number1 = mysqli_fetch_array($num1);
	
	$num2 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='2'");	 
	$number2 = mysqli_fetch_array($num2);
	
	$num3 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='3'");	 
	$number3 = mysqli_fetch_array($num3);
	
	$num4 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='4'");	 
	$number4 = mysqli_fetch_array($num4);
	
	$num5 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='5'");	 
	$number5 = mysqli_fetch_array($num5);
	
	$num6 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='6'");	 
	$number6 = mysqli_fetch_array($num6);
?>




<div class="chart-area">
						
	
	<p>
	<!-- <img  class="dashpic" src="./assets/img/pic 1.png" width="300" align="right"/> -->
	
	<!--<video width="300" height="300"  align="right" style="float:right;" controls>
		<source src="dashpics/Mirip ploy sornarin (SFILE.MOBI).mp4" type="video/mp4">
	</video>-->
	
	<!-- <video width="300" height="300"  align="right" style="float:right;" controls>
		<source src="<?php echo $number6['line2']; ?>" type="video/mp4">
	</video> -->
	
	<!-- <img src="<?php echo $number6['line1']; ?>"  width="50%" height="50%" align="right" style="white-space:nowrap;overflow-y:auto;"/> -->
	<img src="<?php echo $number6['line1']; ?>"  align="right" width="220" style="white-space:nowrap;overflow-y:auto;"/>

	
	<a href="number1.php"><?php echo $number1['tagname'];?></a>
	<br>
	<br>
	<a href="number2.php"><?php echo $number2['tagname'];?></a>
	<br>
	<br>
	<a href="number3.php"><?php echo $number3['tagname'];?></a>
	<br>
	<br>
	<a href="number4.php"><?php echo $number4['tagname'];?></a>
	<br>
	<br>
	<a href="number5.php"><?php echo $number5['tagname'];?></a>
						
	</p>

</div>





