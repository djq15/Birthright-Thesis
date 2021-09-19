<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	
	if(isset($_GET["id"])){
		include_once("./assets/config/database.php");
		$DB = new Database();
		
		$thisSTerm = $DB->get_query_result("
			SELECT A.*, B.Description AS Semester 
			FROM tblSchoolTerms AS A
			LEFT JOIN tblSemesters AS B ON A.SemesterID=B.SemesterID
			WHERE A.STermID = '" . $_GET["id"] . "';
		");
		
		if(count($thisSTerm) == 0){
			header("location: ./schoolterms.php");
		}
		$thisSTerm = $thisSTerm[0];
		
	} else {
		header("location: ./schoolterms.php");
	}
?>

		<div class="container-fluid">

          <!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-white text-black border font-weight-bold">
					<li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="./schoolterms.php">School Terms</a></li>
					<li class="breadcrumb-item text-gray-800" aria-current="page">Edit School Term</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark">Add School Term</h6>
					</div>
					<div class="card-body">
						
						<div class="container">
							<form method="POST" action="./actions/updateschoolterm.php" name="frmUpdateSchoolTerm" id="frmUpdateSchoolTerm">
							
								<input type="hidden" name="STermID" id="STermID" value="<?php echo $thisSTerm["STermID"];?>" required>
								<div class="row">
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">School Year</span>
									  </div>
									  <input type="text" class="form-control" name="SchoolYear" id="SchoolYear" value="<?php echo $thisSTerm["SchoolYear"];?>" required>
									</div>
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">School Term</span>
									  </div>
									  <select class="custom-select" name="Semester" id="Semester" required>
										<option selected="-1">Choose...</option>
										<?php
										
											$semesters = $DB->get_query_result("
												SELECT * FROM tblSemesters;
											");
											
											if(count($semesters) == 0){
												header("location: ./schoolterms.php");
											}
											
											for($i = 0; $i < count($semesters); $i++){
												if($thisSTerm["SemesterID"] == ($i+1))
													echo '<option value="' . ($i+1) .'" selected>' . $semesters[$i]["Description"] . '</option>';
												else
													echo '<option value="' . ($i+1) .'">' . $semesters[$i]["Description"] . '</option>';
											}
										?>
									  </select>
									</div>
								</div>
								<div class="row">
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Date Of Start</span>
									  </div>
									  <input type="date" class="form-control" name="DateOfStart" id="DateOfStart" value="<?php echo $thisSTerm["DateOfStart"];?>" required>
									</div>
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Date Of End</span>
									  </div>
									  <input type="date" class="form-control" name="DateOfEnd" id="DateOfEnd" value="<?php echo $thisSTerm["DateOfEnd"];?>" required>
									</div>
								</div>
								<div class="row">
									<div class="col text-right">
										<button class="btn btn-success" id="UpdateSchoolTerm"><i class="fa fa-sync"></i> Update School Term</button> <!--type="submit" name="apply" onclick="return confirm('Are you sure you want to submit this Application?')" value="Submit Application"/-->
										<button class="btn btn-danger" id="CancelUpdateSchoolTerm"><i class="fa fa-ban"></i> Cancel</button>
									</div>
								</div>
							</div>
						</form>
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
		$('#UpdateSchoolTerm').click(function(){
			if(!isValidFields()){
				var notify = bootbox.alert({
					message: "Please provide all necessary fields!",
					backdrop: true,
					size: 'medium'
				});
			} else {
				
				bootbox.confirm({
					message: "Are you sure you want to update this school term?",
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
							$('#frmUpdateSchoolTerm')[0].submit();
						}
					}
				});
			}
			return false;
		});
		
		$('#CancelUpdateSchoolTerm').click(function(){
			
			bootbox.confirm({
				message: "Are you sure you want to cancel editing this school term?",
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
						window.location.href="./schoolterms.php";
					}
				}
			});
			return false;
		});
		
		function isValidFields(){
			var fields = new Array('SchoolYear','Semester','DateOfStart','DateOfEnd');
			var isValid = true;
			for(var i = 0; i < fields.length; i++){
				isValid *= ($('#'+fields[i]).val() != "")
			}
			return isValid;
		}
	});
</script>