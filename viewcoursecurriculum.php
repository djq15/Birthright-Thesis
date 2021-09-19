<?php 
	//header("location: ./404.php");
	$page_title = "View Course Curriculum";
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="./courses.php">Course Curriculums</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">View Course Curriculum</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
			
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark">View Course Curriculum</h6>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<!--div class="row"-->
										<?php
											include_once ("./assets/config/database.php");
											include_once ("./assets/objects/References.php");
											include_once ("./assets/objects/CourseCurriculum.php");
											$DB = new Database();
											$curCourse = new CourseCurriculum($_GET["id"], $DB);
												//print_r($curCourse->CourseSubjects);
											
											for($i = 0; $i < count($curCourse->CourseSubjects); $i++){
												
												echo '
													<h6 class="mt-2">' . $curCourse->CourseSubjects[$i]["Semester"] . ', ' . $curCourse->CourseSubjects[$i]["YearLevel"] . '</h6>
													<hr class="mt-0" />
													<div class="table-responsive">
														<table class="table table-bordered table-hover table-sm data-table" style="width:100%">
														  <thead>
															<tr>
																<th>Subject Code</th>
																<th>Description</th>
																<th>Units</th>
																<th>Lec Hrs</th>
																<th>Lab Hrs</th>
																<th>Prerequisite</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
												';
												
												for($j = 0; $j < count($curCourse->CourseSubjects[$i]["Subjects"]); $j++){
													$preReqs = "";
													$curSubj = $curCourse->CourseSubjects[$i]["Subjects"];
													for($k = 0; $k < count($curSubj[$j]["SubjectPrerequisites"]); $k++){
														if($curSubj[$j]["SubjectPrerequisites"][$k]["PSubjectID"] != ""){
															if($preReqs != "") $preReqs .= ", ";
															$preReqs .= '<a href="#Subject' . $curSubj[$j]["SubjectPrerequisites"][$k]["PSubjectID"] . '" class="view-prereq-subject small">' . $curSubj[$j]["SubjectPrerequisites"][$k]["SubjectCode"] . '</a>';
														} else {
															if($preReqs != "") $preReqs .= ", ";
															$preReqs .= '<span class="small">' . $curSubj[$j]["SubjectPrerequisites"][$k]["YearLevelStanding"] . "</span>";
														}
													}
													echo '
															<tr id="Subject' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["SubjectID"] . '">
																<td>' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["SubjectCode"] . '</td>
																<td>' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["Description"] . '</td>
																<td>' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["Units"] . '</td>
																<td>' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["LectureHours"] . '</td>
																<td>' . $curCourse->CourseSubjects[$i]["Subjects"][$j]["LaboratoryHours"] . '</td>
																<td>' . $preReqs . '</td>
																<td></td>
															</tr>
													';
												}

												echo '
														  </tbody>
														</table>
													</div>
												';
											}
										?>
							</div>
						</div>
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
		$('.data-table').DataTable({
			"searching": false,
			"bPaginate": false,
			"bInfo": false,
			columnDefs: [
				{ width: 100, targets: 0 },
				{ width: 350, targets: 1 },
				{ width: 50, targets: 2 },
				{ width: 60, targets: 3 },
				{ width: 80, targets: 4 },
				{ width: 50, targets: 5 }
			]
		});
		
		$(".view-prereq-subject").each(function(){
			$(this).click(function(){
				var obj = $(this);
				$(obj.attr("href")).addClass("heartBeat animated");
				
				setTimeout(function(){
					$(obj.attr("href")).removeClass("heartBeat animated")
				}, 1000);
			});
		});
	});
</script>