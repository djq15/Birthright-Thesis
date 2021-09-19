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


	<div id="carousel">
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
}

#carousel .slide {
    display: inline-block;
}
</style>