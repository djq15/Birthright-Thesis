<?php 
	$page_title="School Terms";
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">School Terms</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark">School Term Management</h6>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col" align="right">
								<a class="btn btn-primary btn-icon-split" href="./addschoolterm.php">
									<span class="icon text-white-50">
									  <i class="fas fa-plus"></i>
									</span>
									<span class="text">Add School Term</span>
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
									  <th>School Year</th>
									  <th>School Term</th>
									  <th>Date of Start</th>
									  <th>Date of End</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
										include_once ("./assets/config/database.php");
										$DB = new Database();
										
										$SchoolTerms = $DB->get_query_result('
											SELECT A.*, B.Description AS Semester 
											FROM tblSchoolTerms AS A
											LEFT JOIN tblSemesters AS B ON A.SemesterID=B.SemesterID;
										');
										
										for($i = 0; $i < count($SchoolTerms); $i++){
											echo '
												<tr>
													<td>' . $SchoolTerms[$i]["SchoolYear"] . '</td>
													<td>' . $SchoolTerms[$i]["Semester"] . '</td>
													<td>' . $SchoolTerms[$i]["DateOfStart"] . '</td>
													<td>' . $SchoolTerms[$i]["DateOfEnd"] . '</td>
													<td>
														<a class="btn btn-success btn-sm text-white" href="./editschoolterm.php?id=' . $SchoolTerms[$i]['STermID'] . '">
															<i class="fas fa-edit"></i>
														</a>
														<a class="btn btn-danger btn-sm text-white delete-school-term" href="./actions/deleteschoolterm.php?id=' . $SchoolTerms[$i]['STermID'] . '">
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
			$(".delete-school-term").unbind("click").bind("click",function(){
				var obj = $(this);
				bootbox.confirm({
					message: "Are you sure you want to delete this school term? " +
							"<br/> Deleting this school term, will delete the following: <br/>" + 
							"1. Students Enrolled in this School Term<br/>"+ 
							"2. Hired Faculty in this School Term<br/>"+ 
							"3. Classes Opened in this School Term",
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