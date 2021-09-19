<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	require_once("./assets/config/database.php");
	require_once("./assets/objects/References.php");
	
	$DB = new Database();
	$enrolledStudents = $DB->get_query_result('
		SELECT 
			CONCAT(B.LastName, ", ", B.FirstName, " ", B.MiddleName) AS NameOfStudent, B.Sex, C.Description, F.YearLevelID, F.Description AS YearLevel
		FROM
			tblStudents AS A
		LEFT JOIN tblPersons AS B ON B.PersonID=A.PersonID
		LEFT JOIN tblEnrolledStudents AS D ON D.StudID=A.StudID
		LEFT JOIN tblCourses AS C ON C.CourseID=A.CourseID
		LEFT JOIN tblYearLevels AS F ON F.YearLevelID=D.YearLevelID
		WHERE
			D.STermID="1";

	');


?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">List of Enrolled Students</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark d-inline-block float-left">List of Enrolled Students</h6>
						<div id="myButtons" class="m-0 float-right">
							<a class="link text-dark" style="cursor: grab;" id="SelectList">[Select List]</a>
						</div>
					</div>
					<div class="card-body text-center text-dark">
						<h2>List of Enrolled Students</h2>
						<h4><span class="current-semester"></span>, <span class="current-school-year"></span></h4>
						<br/>
						<h5 id="myCourse">Bachelor of Science in Computer Engineering</h5>
						<h5 id="myYearLevel">1st Year Students</h5>
						<br/>
						<table align="center">
							<thead>
								<tr>
									<td colspan="2">Male</td>
									<td></td>
									<td colspan="2">Female</td>
								</tr>
								<tr>
									<td class="text-right pr-2" width="50px">No</td>
									<td class="text-left pl-2" width="250px">Name of Student</td>
									<td width="25px"></td>
									<td class="text-right pr-2" width="50px">No</td>
									<td class="text-left pl-2" width="250px">Name of Student</td>
								</tr>
							</thead>
							<tbody id="ListOfStuds">
								<td class="text-right pr-2">1.</td>
								<td class="text-left pl-2">TIGNO, JOSHUA</td>
								<td></td>
								<td class="text-right pr-2">1.</td>
								<td class="text-left pl-2">TIGNO, JOSHUA</td>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		  </div>

        </div>
        <!-- /.container-fluid -->

<?php
	include_once("./web-page-parts/footer.php");
?>

<script>
	$(document).ready(function(){

		var courses = (
			<?php
				$courses = array_unique(array_column($enrolledStudents, "Description"));
				$unique_courses = array();
				$i=0;
				foreach($courses as $data){
					
					array_push($unique_courses, Array(
						"text" => $data,
						"value" => $i));
					$i++;
				}
				
				echo json_encode($unique_courses);
			?>
		);
		console.log(courses);
		
		var clusteredStudents = 
			<?php
				$clusteredStudents = array();
				for($i = 0; $i < count($unique_courses); $i++){
					$StudIdx = array_keys(array_column($enrolledStudents, "Description"), $unique_courses[$i]["text"]);
					$students = array();
					for($j = 0; $j < count($StudIdx); $j++){
						array_push($students, $enrolledStudents[$StudIdx[$j]]);
					}
					//print_r($StudIdx);
					
					$yearlevels = array();
					for($j = 0; $j < count(REF_YEAR_LEVELS); $j++){
						$Yridx = array_keys(array_column($students, "YearLevel"), REF_YEAR_LEVELS[$j]);
						$curStuds = array();
						for($k = 0; $k < count($Yridx); $k++){
							array_push($curStuds, $students[$Yridx[$k]]);
						}
						array_push($yearlevels, Array(
							"YearLevel" => REF_YEAR_LEVELS[$j],
							"Students" => $curStuds
						));
					}
					
					array_push($clusteredStudents, $yearlevels);
				}
				
				echo json_encode($clusteredStudents);
			?>
		;
		
		console.log(clusteredStudents);
		var myCourse = "No Course Available", myYearLevel = "No Year Level Available";
		if (clusteredStudents.length > 0){
			myCourse = clusteredStudents[0][0].Students[0].Description; myYearLevel = clusteredStudents[0][0].YearLevel;
		}
		
		<?php
			if(isset($_GET["course"]) && isset($_GET["yearlevel"])){

				echo "myCourse = '" . $_GET["course"] . "';\n\t\tmyYearLevel = '" . $_GET["yearlevel"] . "';";
			}
		?>
		var maleStuds = Array(), femaleStuds = Array();

		//Search for students in given yearlevel and course
		for (var x = 0; x < clusteredStudents.length; x++){
			for(var y = 0; y < clusteredStudents[x].length; y++){
				//console.log(maleStuds);
				if(clusteredStudents[x][y].YearLevel == myYearLevel){
					//console.log("x: " + x  + "y: " + y + "z:" + y);
					for(var z = 0; z < clusteredStudents[x][y].Students.length; z++){
						if(clusteredStudents[x][y].Students[z].Description == myCourse){
							if(clusteredStudents[x][y].Students[z].Sex == "Male"){
								maleStuds.push(clusteredStudents[x][y].Students[z]);
							} else {
								femaleStuds.push(clusteredStudents[x][y].Students[z]);
							}
						}
					}
				}
			}
		}

		var maxStuds = (maleStuds.length>femaleStuds.length)?maleStuds.length:femaleStuds.length;
		var strHTML = "";
		for (var x = 0; x < maxStuds; x++){
			strHTML += "<tr>";
			if(x < maleStuds.length){
				strHTML += "<td class='text-right pr-2'>" + (x+1) + "</td>";
				strHTML += "<td class='text-left pl-2'>" + maleStuds[x].NameOfStudent + "</td>";
			} else {
				strHTML +="<td></td><td></td>"
			}
			
			strHTML += "<td></td>";
			if(x < femaleStuds.length){
				strHTML += "<td class='text-right pr-2'>" + (x+1) + "</td>";
				strHTML += "<td class='text-left pl-2'>" + femaleStuds[x].NameOfStudent + "</td>";
			} else {
				strHTML +="<td></td><td></td>"
			}
			strHTML += "</tr>";
		}

		$("#ListOfStuds").html(strHTML);
		$("#myCourse").html(myCourse);
		$("#myYearLevel").html(myYearLevel + " Students");
		//console.log(maleStuds);
		//console.log(femaleStuds);

		$("#SelectList").click(function(){
			
			bootbox.prompt({
				title: "Select a Course",
				inputType: 'select',
				inputOptions: courses,
				callback: function (result) {
					GetYearLevel(result);
				}
			});
			return false;
		});
		
		function GetYearLevel(id){
			var choices = new Array();
//			alert(clusteredStudents[id].length);
			for(i = 0; i < clusteredStudents[id].length; i++){
				if(clusteredStudents[id][i].Students.length > 0)
					choices.push({
						"text": clusteredStudents[id][i].YearLevel,
						"value": i
					});
			}
			
			bootbox.prompt({
				title: "Select a Year Level",
				inputType: 'select',
				inputOptions: choices,
				callback: function (result) {
					window.location.href = "./ListOfStudents.php?course=" + clusteredStudents[id][result].Students[0].Description+'&yearlevel='+clusteredStudents[id][result].YearLevel;
				}
			});
			
		}
	});
</script>