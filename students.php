<?php 
	$page_title="Students";
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	include_once("./assets/config/database.php");
	
	$DB = new Database();
	
	$SchoolTerms = $DB->get_query_result('
		SELECT A.*, B.Description AS Semester 
		FROM tblSchoolTerms AS A
		LEFT JOIN tblSemesters AS B ON A.SemesterID=B.SemesterID;
	');
	
	$sql = "
			SELECT A.*, B.Description AS Semester 
			FROM tblSchoolTerms AS A
			LEFT JOIN tblSemesters AS B ON A.SemesterID=B.SemesterID
			WHERE ";
	
	if(!isset($_GET["id"])){
		$sql .= "
				A.DateOfStart<CURRENT_DATE
			ORDER BY 
				A.DateOfStart DESC,
				A.SemesterID DESC
			LIMIT 1;
		";
	} else {
		$sql .= "
				A.STermID='" . $_GET["id"] . "'
			LIMIT 1;
		";
	}
	
	$curSemester = $DB->get_query_result($sql);
	
	if(count($curSemester) > 0)
		$curSemester = $curSemester[0];
	
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">Students</li>
				</ol>
			</nav>
		  
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-dark d-inline-block float-left">Student Management - <?php echo $curSemester["Semester"] . ", " . $curSemester["SchoolYear"];?></h6>
						<div id="myButtons" class="float-right">
							<a class="link text-dark" style="cursor: grab;" id="ChangeYear">[View Records of Another School Term]</a>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col" align="right">
								<a class="btn btn-primary btn-icon-split" href="./enrollStudent.php">
									<span class="icon text-white-50">
									  <i class="fas fa-plus"></i>
									</span>
									<span class="text">Enroll Student</span>
								</a>
							</div>
						</div>
						<hr/>
						<div class="row"><div class="col-md-12">
							<!--div class="row"-->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-sm data-table" style="width:100%">
								  <thead>
									<tr>
									  <th>School ID No.</th>
									  <th>Name of Student</th>
									  <th>Sex</th>
									  <th>Year Level</th>
									  <th>Course</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
										include_once ("./assets/config/database.php");
										$DB = new Database();
										
										$Students = $DB->get_query_result('
										SELECT 
												A.*, B.SchoolIDNo, 
												CONCAT(C.LastName, ", ", C.FirstName, " ", C.MiddleName) AS NameOfStudent, 
												C.Sex, D.Acronym AS Course, E.Description AS YearLevel
											FROM tblEnrolledStudents AS A
											LEFT JOIN tblStudents AS B ON B.StudID=A.StudID
											LEFT JOIN tblPersons AS C ON C.PersonID=B.PersonID
											LEFT JOIN tblCourses AS D ON D.CourseID=B.CourseID
											LEFT JOIN tblYearLevels AS E ON E.YearLevelID=A.YearLevelID
											WHERE A.STermID="' . $curSemester["STermID"] .'";
										');
										
										
										for($i = 0; $i < count($Students); $i++){
											echo '
												<tr>
													<td>' . $Students[$i]["SchoolIDNo"] . '</td>
													<td>' . $Students[$i]["NameOfStudent"] . '</td>
													<td>' . $Students[$i]["Sex"] . '</td>
													<td>' . $Students[$i]["YearLevel"] . '</td>
													<td>' . $Students[$i]["Course"] . '</td>
													<td>
														<a class="btn btn-success btn-sm text-white" href="./editstudent.php?id=' . $Students[$i]['StudID'] . '">
															<i class="fas fa-edit"></i>
														</a>
														<a class="btn btn-danger btn-sm text-white delete-student" href="./actions/deletestudent.php?id=' . $Students[$i]['StudID'] . '">
															<i class="fas fa-trash"></i>
														</a>
													</td>
												</tr>
											';
										}
									?>
								  </tbody>
								</table>
							</div>
						</div></div>
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
		
		
		$('.data-table')
			.on("init.dt", function(){ AttachEvents(); })
			.DataTable()
			.on("draw.dt", function(){ AttachEvents(); });
			
		function AttachEvents(){
			$(".delete-student").unbind("click").bind("click",function(){
				var obj = $(this);
				
				bootbox.prompt({
					title: "Student Deletion",
					message: '<p>Please select an option below:</p>',
					inputType: 'radio',
					inputOptions: [
						{
							text: 'DELETE FROM PRESENT SCHOOL TERM',
							value: '1',
						},
						{
							text: 'DELETE FROM ALL SCHOOL TERMS',
							value: '2',
						}
					],
					callback: function (result) {
						if(result == 2){
							window.location.href=obj.attr('href') + '&action=ALL';
						} else {
							window.location.href=obj.attr('href') + '&action=CURRENT&STermID=' + <?php echo $curSemester["STermID"]; ?>;
						}
					}
				});
				
				return false;
			});
			
		}
		
		
		
		$("#ChangeYear").click(function(){
			bootbox.prompt({
				title: "View Records from Another School Term",
				inputType: 'select',
				inputOptions: [
				<?php
					for($i = 0; $i < count($SchoolTerms); $i++){
						echo "
							{
								text: '" . $SchoolTerms[$i]["Semester"] . " - ". $SchoolTerms[$i]["SchoolYear"] . "',
								value: '" . $SchoolTerms[$i]["STermID"] . "'
							}
						";
						if($i + 1 < count($SchoolTerms))
							echo ",";
					}
				?>
				],
				callback: function (result) {
					if(result != null)
						window.location.href="./students.php?id=" + result;
				}
			});
			return false;
		});
	});
</script>