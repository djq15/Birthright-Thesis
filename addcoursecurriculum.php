<?php 
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
					<li class="breadcrumb-item text-gray-800" aria-current="page">Add Course Curriculum</li>
				</ol>
			</nav>
		  
		  <div class="row">
			<div class="col-md-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-dark">Add Course Curriculum</h6>
					</div>
					<div class="card-body">
						
						<div class="container">
							<form method="POST" action="./actions/createcoursecurriculum.php" name="frmAddSchoolTerm" id="frmAddSchoolTerm">
								<h6 class="card-text">Course Curriculum Details</h6>
								<hr/>
								<div class="row">
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Description</span>
									  </div>
									  <input type="text" class="form-control" name="CourseDescription" id="CourseDescription">
									</div>
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Acronym</span>
									  </div>
									  <input type="text" class="form-control" name="Acronym" id="Acronym">
									</div>
								</div>
								<div class="row">
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Total Years</span>
									  </div>
									  <input type="number" class="form-control" min="1" max="5" name="TotalYears" id="TotalYears">
									</div>
									<div class="input-group mb-4 col-md-6">
									  <div class="input-group-prepend">
										<span class="input-group-text">Curriculum Year</span>
									  </div>
									  <input type="text" class="form-control" name="CurriculumYear" id="CurriculumYear">
									</div>
								</div>
								<h6 class="card-text">Course Subjects</h6>
								<hr/>
								<div class="row mr-2 ml-2">
									<div class="col-md-12 text-right mb-2">
										<button class="btn btn-primary" id="AddCourseSubject"><i class="fa fa-plus"></i> Add Course Subject</button>
									</div>
								</div>
								<div class="row">
									<div class="input-group mb-4 col-md-12">
										<div class="container-fluid table-responsive mr-2 ml-2 mb-4">
											<table class="table" id="courseSubjects">
												<thead>
													<tr>
														<th>Subject Code</th>
														<th>Description</th>
														<th>Units</th>
														<th>Year Level</th>
														<th>Semester</th>
														<th>Lec Hours</th>
														<th>Lab Hours</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col text-right">
										<button class="btn btn-success" id="AddCourseCurriculum"><i class="fa fa-plus"></i> Add Course Curriculum</button> <!--type="submit" name="apply" onclick="return confirm('Are you sure you want to submit this Application?')" value="Submit Application"/-->
										<button class="btn btn-danger" id="CancelCourseCurriculum"><i class="fa fa-ban"></i> Cancel</button>
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
						
		var dtCourseSubjects = $('#courseSubjects').DataTable({
			responsive: true,
			searching: false,
			paging: false,
			info: false
		});
		
		
		$('#AddCourseSubject').click(function(evt){
			evt.preventDefault();
			
			var str = '';
			
			str += '<div class="container">';
			str += '	<div class="row">';
			str += '		<div class="input-group mb-4 col-md-4">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Subject Code</span>';
			str += '		  </div>';
			str += '		  <input type="text" class="form-control" id="SubjCode">';
			str += '		</div>';
			str += '		<div class="input-group mb-4 col-md-8">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Description</span>';
			str += '		  </div>';
			str += '		  <input type="text" class="form-control" id="SubjDesc" required>';
			str += '		</div>';
			str += '	</div>';
			str += '	<div class="row">';
			str += '		<div class="input-group mb-4 col-md-6">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">School Term</span>';
			str += '		  </div>';
			str += '		  <select class="custom-select" name="Semester" id="Semester" required>';
			str += '			<option value="-1" selected>Choose...</option>';
			str += '			<option value="1">1st Semester</option>';
			str += '			<option value="2">2nd Semester</option>';
			str += '			<option value="3">Summer</option>';
			str += '		  </select>';
			str += '		</div>';
			str += '		<div class="input-group mb-4 col-md-6">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Year Level</span>';
			str += '		  </div>';
			str += '		  <select class="custom-select" name="YearLevel" id="YearLevel" required>';
			str += '			<option value="-1" selected>Choose...</option>';
			str += '			<option value="1">1st Year</option>';
			str += '			<option value="2">2nd Year</option>';
			str += '			<option value="3">3rd Year</option>';
			str += '			<option value="4">4th Year</option>';
			str += '			<option value="5">5th Year</option>';
			str += '		  </select>';
			str += '		</div>';
			str += '	</div>';
			
			str += '	<div class="row">';
			str += '		<div class="input-group mb-4 col-md-4">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Units</span>';
			str += '		  </div>';
			str += '		  <input type="number" class="form-control" id="Units" required />';
			str += '		</div>';
			str += '		<div class="input-group mb-4 col-md-4">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Lec. Hrs.</span>';
			str += '		  </div>';
			str += '		  <input type="number" class="form-control" id="LecHrs" required />';
			str += '		</div>';
			str += '		<div class="input-group mb-4 col-md-4">';
			str += '		  <div class="input-group-prepend">';
			str += '			<span class="input-group-text">Lab. Hrs.</span>';
			str += '		  </div>';
			str += '		  <input type="number" class="form-control" id="LabHrs" required />';
			str += '		</div>';
			str += '	</div>';
			str += '</div>';
				
			var frmWE = bootbox.dialog({
				title: 'Add Course Subject',
				message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>',
				size: 'large',
				buttons: {
					addWork: {
						label: '<i class="fa fa-plus"></i> Add Course Subject',
						className: 'btn-success',
						callback: function(){
							var YrLvl = new Array('1st Year', '2nd Year', '3rd Year', '4th Year', '5th Year');
							var Sem = new Array('1st Semester', '2nd Semester', 'Summer');
							var oSubjectCode = $("#SubjCode").val(),
								oDescription = $("#SubjDesc").val(),
								oUnits = $("#Units").val(),
								oYearLevel = $("#YearLevel").val(),
								oSemester = $("#Semester").val(),
								oLecHrs = $("#LecHrs").val(),
								oLabHrs = $("#LabHrs").val();
							
							if(oYearLevel > 0)
								oYearLevel = YrLvl[oYearLevel-1];
							else
								oYearLevel = '';
							if(oSemester > 0)
								oSemester = Sem[oSemester-1];
							else
								oSemester = '';
							
							return VerifyInputSubject(dtCourseSubjects, oSubjectCode, oDescription, oUnits, oYearLevel, oSemester, oLecHrs, oLabHrs);
						}
					},
					cancel: {
						label: '<i class="fa fa-ban"></i> Cancel button',
						className: 'btn-danger',
						callback: function(){
							return confirm('Are you sure you want to cancel adding this subject?');
						}
					}
				}
			}); 		
			
			frmWE.init(function(){
				setTimeout(function(){
					frmWE.find('.bootbox-body').html(str);
				}, 500);
			});
			
			return false;
		});
				
		function VerifyInputSubject(dtTable, oSubjectCode, oDescription, oUnits, oYearLevel, oSemester, oLecHrs, oLabHrs){
			var errors = new Array();
			var isDone = true;
		
			var workExps = dtTable.data(),
				isValid = true;
			
			if(oSubjectCode == "") errors.push("No Provided Subject Code!");
			if(oDescription == "") errors.push("No Provided Description!");
			if(oUnits == "") errors.push("No Provided Units!");
			if(oYearLevel == "") errors.push("No Provided Year Level!");
			if(oSemester == "") errors.push("No Provided Semester!");
			if(oLecHrs == "") errors.push("No Provided Lecture Hours!");
			if(oLabHrs == "") errors.push("No Provided Laboratory Hours!");
				
			if(errors.length == 0){
				if(confirm('Are you sure you want to add this course subject?')){
					
					dtTable
						.row.add( [oSubjectCode, oDescription, oUnits, oYearLevel, oSemester, oLecHrs, oLabHrs, '<button class="btn btn-danger btn-sm remove-subject"><i class="fa fa-trash"></i></button>'])
						.draw();
					
					alert('Course Subject was successfully added!');
					
					$(".remove-subject").unbind("click").bind("click",function(){
						var tr = $(this).parents('tr');
						if(confirm('Are you sure you want to remove this course subject?')){
							dtTable.row(tr).remove().draw();
							
							alert('Course Subject was successfully removed!');
						} else {
							alert('Course Subject was not removed!');
						}
					});
					isDone = true;
				} else {
					alert('Course Subject not added!');
					isDone = false;
				}
			} else {
				alert(errors.join("\n"));
				isDone = false;
			}
			return isDone;
		}
		
		$('#AddCourseCurriculum').click(function(){
			if(!isValidFields()){
				var notify = bootbox.alert({
					message: "Please provide all necessary fields!",
					backdrop: true,
					size: 'medium'
				});
			} else {
				bootbox.confirm({
					message: "Are you sure you want to this course curriculum?",
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
							var cSubjects = dtCourseSubjects.data();
							
							for(var i = 0; i < cSubjects.length; i++){
								$("#frmAddSchoolTerm")
									.append(
										'<input type="hidden" name="SubjectCode[]" value="' + cSubjects[i][0] + '" />' +
										'<input type="hidden" name="Description[]" value="' + cSubjects[i][1] + '" />' +
										'<input type="hidden" name="Units[]" value="' + cSubjects[i][2] + '" />' +
										'<input type="hidden" name="YearLevel[]" value="' + cSubjects[i][3] + '" />' + 
										'<input type="hidden" name="Semester[]" value="' + cSubjects[i][4] + '" />'  + 
										'<input type="hidden" name="LecHrs[]" value="' + cSubjects[i][5] + '" />' + 
										'<input type="hidden" name="LabHrs[]" value="' + cSubjects[i][6] + '" />' 
									);
							}
							$("#frmAddSchoolTerm")[0].submit();
						}
					}
				});
			}
			return false;
		});
		
		$('#CancelCourseCurriculum').click(function(){
			
			bootbox.confirm({
				message: "Are you sure you want to cancel adding this course curriculum?",
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
						window.location.href="./courses.php";
					}
				}
			});
			return false;
		});
		
		function isValidFields(){
			var fields = new Array('CourseDescription','Acronym','TotalYears','CurriculumYear');
			var isValid = true;
			for(var i = 0; i < fields.length; i++){
				isValid *= ($('#'+fields[i]).val() != "")
			}
			return isValid;
		}
	});
</script>