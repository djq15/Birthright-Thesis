<?php 
	$page_title="Courses";
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">Course Curriculums</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark">Course Curriculum Management</h6>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col" align="right">
								<a class="btn btn-primary btn-icon-split" href="./addcoursecurriculum.php">
									<span class="icon text-white-50">
									  <i class="fas fa-plus"></i>
									</span>
									<span class="text">Add Course Curriculum</span>
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
									  <th>Description</th>
									  <th>Acronym</th>
									  <th>Total Years</th>
									  <th>Curriculum Year</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
										include_once ("./assets/config/database.php");
										$DB = new Database();
										
										$Courses = $DB->get_query_result('
											SELECT *
											FROM tblCourses;
										');
										
										for($i = 0; $i < count($Courses); $i++){
											echo '
												<tr>
													<td>' . $Courses[$i]["Description"] . '</td>
													<td>' . $Courses[$i]["Acronym"] . '</td>
													<td>' . $Courses[$i]["TotalYrs"] . '</td>
													<td>' . $Courses[$i]["CurriculumYear"] . '</td>
													<td>
														<a class="btn btn-secondary btn-sm text-white" href="./viewcoursecurriculum.php?id=' . $Courses[$i]['CourseID'] . '">
															<i class="fas fa-eye"></i>
														</a>
														<a class="btn btn-success btn-sm text-white" href="./editcoursecurriculum.php?id=' . $Courses[$i]['CourseID'] . '">
															<i class="fas fa-edit"></i>
														</a>
														<a class="btn btn-danger btn-sm text-white delete-course-curriculum" href="./actions/deletecoursecurriculum.php?id=' . $Courses[$i]['CourseID'] . '">
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
			
			$(".delete-course-curriculum").click(function(){
				var obj = $(this);
				bootbox.confirm({
					message: "Are you sure you want to delete this course curriculum? " +
							"<br/> Deleting this course curriculum, will delete the following: <br/>" + 
							"1. Students Enrolled using this course curriculum<br/>"+ 
							"2. Classes Opened based on this course curriculum",
					buttons: {
						confirm: {
							label: 'Yes',
							className: 'btn-success'
						},
						cancel: {
							label: 'No',
							className: 'btn-danger'
						}
					},
					callback: function (result) {
						if(result){
							window.location.href=obj.attr('href');
						}
					}
				});
				return false;
			});
		}
	});
</script>