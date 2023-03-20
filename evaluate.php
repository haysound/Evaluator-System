<?php 
$employeeID = $_GET['id'];
$evaluatorID = $_SESSION["login_id"];
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="CrudController.php" id="manage_evaluation" method="post" onsubmit="return validateForm()">

				<input type="hidden" name="employeeID" value="<?= ($employeeID) ? $employeeID : '' ?>">
				<input type="hidden" name="evaluatorID" value="<?= ($evaluatorID) ? $evaluatorID : '' ?>">
				<div class="input-group mb-3">
					<!-- <span class="input-group-text">Job Description</span> -->
					<label for="" class="form-label"><h5>EVALUATION OF PERFORMANCE</h5></label>
				</div>
				
				<div class="mb-3">
					<label for="" class="form-label">
						State main work performed by the staff during the period covered by the Report with particular attention to work considered exceptional or meritorious
					</label>
					<textarea class="form-control" id="" rows="3" name="EmployeeJobStatement"></textarea>
				</div>

				<div class="mb-3">
					<label for="" class="form-label">
						State any Training recommended for the improvement of the staff with reasons
					</label>
					<textarea class="form-control" id="" rows="3" name="TraningRecommendation"></textarea>
				</div>

				<div class="mb-3">
					<label for="" class="form-label">
						Suggestions on steps to be taken to improve officer on-the-job performance
					</label>
					<textarea class="form-control" id="" rows="3" name="adviseForStaff"></textarea>
				</div>

				<div class="mb-3">
					<label for="" class="form-label">
						State any other useful information about the staff which is not covered by this report
					</label>
					<textarea class="form-control" id="" rows="3" name="anyOtherInformation"></textarea>
				</div>

				<!-- Part III Performance Appraisal rating  -->
				<div class="input-group mb-3">
					<!-- <span class="input-group-text">Job Description</span> -->
					<label for="" class="form-label"><h5>PERFORMANCE APPRAISAL RATING: EVALUATION PARAMETERS</h5></label>
				</div>

				<!-- Quality of Work -->
				<div class="container mb-3">
					<div class="input-group mb-3">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Quality of Work/Output (12marks)</h6></label>
					</div>

					<table  class="table table-bordered" data-toggle="table" data-sort-stable="true">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks Obtainaible</th>
							<th data-sortable="true" >Score Obtained</th>
						</tr>
						
						<tr>
							<td>Knowledge of the Job and Coverage of Schedule of Duties</td>
							<td>2</td>
							<td><input class="noBorder" type="number" min="0" max="2" id="knowledge" value="0" onchange="updateQualityTotal()" ></td>
						</tr>

						<tr>
							<td>Communication and Information Management Skills</td>
							<td>2</td>
							<td><input class="noBorder" type="number" min="0" max="2" id="communication" value="0"  onchange="updateQualityTotal()"></td>
						</tr>

						<tr>
							<td>Accuracy and Speed of Work</td>
							<td>2</td>
							<td><input class="noBorder" type="number" min="0" max="2" id="accuracy" value="0"  onchange="updateQualityTotal()"></td>
						</tr>
						
						<tr>
							<td>Supervision and Control</td>
							<td>2</td>
							<td><input class="noBorder" type="number" min="0" max="2" id="control"  value="0"  onchange="updateQualityTotal()"></td>
						</tr>

						<tr>
							<td>Attendance</td>
							<td>2</td>
							<td><input class="noBorder" type="number" min="0" max="2" id="attendance" value="0"  onchange="updateQualityTotal()" ></td>
						</tr>

						<tr>
							<td>Punctuality</td>
							<td>2</td>
							<td><input class="noBorder" type="number"  min="0" max="2" id="punctuality" value="0"  onchange="updateQualityTotal()"></td>
						</tr>

						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="qualityTotal" name="qualityTotal" ></th>
						</tr>
					</table>
				</div>

				<!-- Cooperation/Loyalty -->
				<div class="container mb-3">
					<div class="input-group ">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Cooperation/Loyalty (2marks)</h6></label>
					</div>

					<table id="my_table_1" class="table table-bordered" data-toggle="table" data-sort-stable="true" class="mb3">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks Obtainaible</th>
							<th data-sortable="true" >Score Obtained</th>
						</tr>
						
						<tr>
							<td>Cooperation (Ability to work with others at all levels)</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="teamWork" onclick="updateCooperationTotal()"></td>
						</tr>

						<tr>
							<td>Respect For Constituted Authority</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="respect" onclick="updateCooperationTotal()"></td>
						</tr>

						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="cooperationTotal" name="cooperationTotal" ></th>
						</tr>
					</table>
				</div>

				
				<!-- Resourcefulness and Reliability -->
				<div class="container mb-3">
					<div class="input-group mb-3">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Resourcefulness and Reliability (4marks)</h6></label>
					</div>

					<table id="my_table_1" class="table table-bordered" class="table table-bordered" data-toggle="table" data-sort-stable="true">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks Obtainaible</th>
							<th data-sortable="true" >Score Obtained</th>
						</tr>
						
						<tr>
							<td>Initiative/Creativity</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="initiative" onclick="updateResourcefulnessTotal()"></td>
						</tr>

						<tr>
							<td>Delegation and Training Role</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="delegation" onclick="updateResourcefulnessTotal()"></td>
						</tr>

						<tr>
							<td>Leadership Supporting Role/Decision Making Role</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="leadership" onclick="updateResourcefulnessTotal()"></td>
						</tr>

						<tr>
							<td>Accountability</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="accountability" onclick="updateResourcefulnessTotal()"></td>
						</tr>

						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="resourcefulnessTotal" name="resourcefulnessTotal" ></th>
						</tr>
					</table>
				</div>

				<!-- Conduct -->
				<div class="container mb-3">
					<div class="input-group mb-3">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Conduct (7marks)</h6></label>
					</div>

					<table id="my_table_1" class="table table-bordered" data-toggle="table" data-sort-stable="true">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks Obtainaible</th>
							<th data-sortable="true" >Score Obtained</th>
						</tr>
						
						<tr>
							<td>Confidentiality and Self Esteem</td>
							<td>2</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="2" id="confidentiality" onclick="updateConductTotal()"></td>
						</tr>

						<tr>
							<td>Adherence to Rules and Regulations</td>
							<td>2</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="2" id="rules" onclick="updateConductTotal()"></td>
						</tr>

						<tr>
							<td>Obedient and Pleasant</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="obedient" onclick="updateConductTotal()"></td>
						</tr>

						<tr>
							<td>Relationship with Colleagues/Public</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="relationship" onclick="updateConductTotal()"></td>
						</tr>

						<tr>
							<td>Appearance</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="appearance" onclick="updateConductTotal()"></td>
						</tr>
						
						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="conductTotal" name="conductTotal" ></th>
						</tr>
					</table>
				</div>

				<!-- Professional/Productivity -->
				<div class="container mb-3">
					<div class="input-group mb-3">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Professional/Productivity (3marks)</h6></label>
					</div>

					<table id="my_table_1" class="table table-bordered" data-toggle="table" data-sort-stable="true">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks Obtainaible</th>
							<th data-sortable="true" >Score Obtained</th>
						</tr>
						
						<tr>
							<td>Diligent</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" max="1" min="0" id="diligent" onclick="updateProfessionalTotal()"></td>
						</tr>

						<tr>
							<td>Resourceful</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="resourceful" onclick="updateProfessionalTotal()"></td>
						</tr>

						<tr>
							<td>Ability to work with minimum supervision</td>
							<td>1</td>
							<td><input class="noBorder" type="number" value="0" min="0" max="1" id="lessSupervision" onclick="updateProfessionalTotal()"></td>
						</tr>

						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="professionalTotal" name="professionalTotal" ></th>
						</tr>
					</table>
				</div>

				<!-- Part IV General Assessment/Recommendation  -->
				<div class="input-group mb-3">
					<!-- <span class="input-group-text">Job Description</span> -->
					<label for="" class="form-label"><h5>GENERAL ASSESSMENT/RECOMMENDATION</h5></label>
				</div>

				<!-- Head of Department/Unit Report on Employee -->
				<div class="container mb-3">
					<div class="input-group mb-3">
						<!-- <span class="input-group-text">Job Description</span> -->
						<label for="" class="form-label"><h6>Head of Department/Unit Report on Employee (70marks)</h6></label>
					</div>

					<table id="table" class="table table-bordered" data-toggle="table" data-sort-stable="true">    
						<tr>
							<th data-sortable="true" >Indicator</th>
							<th data-sortable="true" >Marks</th>
							<th data-sortable="true" >Score Obtained</th>
							<!-- <th data-sortable="true" >Remarks</th> -->
						</tr>
						
						<tr>
							<td>Schedule of Duties (Target Met - All Duties)</td>
							<td>40</td>
							<td><input class="noBorder" value="0" type="number" min="0" max="40" id="duties" onclick="updateRecommendTotal()"></td>
							<!-- <td><input class="noBorder" type="text" value="0" ></td> -->
						</tr>

						<tr>
							<td>Achievement (Based on Assigned Duties)</td>
							<td>15</td>
							<td><input class="noBorder" value="0" type="number" min="0" max="15" id="achievement" onclick="updateRecommendTotal()"></td>
							<!-- <td><input class="noBorder" type="text" value="0"></td> -->
						</tr>

						<tr>
							<td>Special Duties (Ad hoc Meeting etc)</td>
							<td>15</td>
							<td><input class="noBorder" value="0" type="number" min="0" max="15" id="specialDuties" onclick="updateRecommendTotal()"></td>
							<!-- <td><input class="noBorder" type="text" value="0"></td> -->
						</tr>

						<tr>
							<th></th>
							<th>Total</th>
							<th><input class="noBorder" type="number" id="recommendTotal" name="recommendTotal" ></th>
						</tr>
					</table>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2" name="evaluate">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=evaluation'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="clone_progress" class="d-none">
	<div class="post">
		<div class="user-block">
			<img class="img-circle img-bordered-sm avatar" src="" alt="user image">
			<span class="username">
				<a href="#" class="nf"></a>
			</span>
			<span class="description">
				<span class="fa fa-calendar-day"></span>
				<span><b class="date"></b></span>
			</span>
		</div>
		<div class="pdesc">
		
		</div>

		<p>
		</p>
    </div>
</div>

<script>
	// Get the input elements
	var knowledge = document.getElementById("knowledge");
	var communication = document.getElementById("communication");
	var accuracy = document.getElementById("accuracy");
	var control = document.getElementById("control");
	var attendance = document.getElementById("attendance");
	var punctuality = document.getElementById("punctuality");
	var teamWork = document.getElementById("teamWork");
	var respect = document.getElementById("respect");
	var initiative = document.getElementById("initiative");
	var delegation = document.getElementById("delegation");
	var leadership = document.getElementById("leadership");
	var accountability = document.getElementById("accountability");
	var confidentiality = document.getElementById("confidentiality");
	var rules = document.getElementById("rules");
	var obedient = document.getElementById("obedient");
	var relationship = document.getElementById("relationship");
	var appearance = document.getElementById("appearance");
	var diligent = document.getElementById("diligent");
	var resourceful = document.getElementById("resourceful");
	var lessSupervision = document.getElementById("lessSupervision");
	var duties = document.getElementById("duties");
	var achievement = document.getElementById("achievement");
	var specialDuties = document.getElementById("specialDuties");


	// Form Validation
	function validateForm() {
		
		// Check if the values are within the specified range from 0-2
		if (
			knowledge.value < 0 || knowledge.value > 2 
			|| communication.value < 0 || communication.value > 2 
			|| accuracy.value < 0 || accuracy.value > 2 
			|| control.value < 0 || control.value > 2 
			|| attendance.value < 0 || attendance.value > 2 
			|| punctuality.value < 0 || punctuality.value > 2 
			|| confidentiality.value < 0 || confidentiality.value > 2 
			|| rules.value < 0 || rules.value > 2 
			) {
			alert("Value must be between 0 and 2.");
			return false;
		}
		
		// Check if the values are within the specified range from 0-1
		if (
			teamWork.value < 0 || teamWork.value > 1 
			|| respect.value < 0 || respect.value > 1 
			|| initiative.value < 0 || initiative.value > 1 
			|| delegation.value < 0 || delegation.value > 1 
			|| leadership.value < 0 || leadership.value > 1 
			|| accountability.value < 0 || accountability.value > 1 
			|| obedient.value < 0 || obedient.value > 1 
			|| relationship.value < 0 || relationship.value > 2 
			|| appearance.value < 0 || appearance.value > 1 
			|| diligent.value < 0 || diligent.value > 1 
			|| resourceful.value < 0 || resourceful.value > 1 
			|| lessSupervision.value < 0 || lessSupervision.value > 1 
			) {
			alert("Value must be between 0 and 1.");
			return false;
		}

		// Check if the values are within the specified range from 0-15
		if (
			achievement.value < 0 || achievement.value > 15 
			|| specialDuties.value < 0 || specialDuties.value > 15
			) {
			alert("Value must be between 0 and 15.");
			return false;
		}

		// Check if the values are within the specified range from 0-40
		if (
			duties.value < 0 || duties.value > 40
			) {
			alert("duties Value must be between 0 and 30.");
			return false;
		}
	}

	// Get the total for Quality
	function updateQualityTotal() {
		let qualityTotal = document.getElementById("qualityTotal");
		qualityTotal.value = 0;
		// Calculate the total
		qualityTotal = parseInt(knowledge.value) + parseInt(communication.value) + parseInt(accuracy.value) + parseInt(control.value) + parseInt(attendance.value) + parseInt(punctuality.value);
				
		// Update the total element
		var totalElement = document.getElementById("qualityTotal");
		totalElement.value = qualityTotal;
	}

	// Get the total for Cooperation
	function updateCooperationTotal() {
		let cooperationTotal = document.getElementById("cooperationTotal");

		cooperationTotal = 0;
		// Calculate the total
		cooperationTotal = parseInt(teamWork.value) + parseInt(respect.value);
		
		// Update the total element
		var totalElement = document.getElementById("cooperationTotal");
		totalElement.value = cooperationTotal;
	}

	// Get the total for Resourcefulness
	function updateResourcefulnessTotal() {
		let resourcefulnessTotal = document.getElementById("resourcefulnessTotal");

		resourcefulnessTotal = 0;
		// Calculate the total
		resourcefulnessTotal = parseInt(initiative.value) + parseInt(delegation.value) + parseInt(leadership.value) + parseInt(accountability.value);
				
		// Update the total element
		var totalElement = document.getElementById("resourcefulnessTotal");
		totalElement.value = resourcefulnessTotal;
	}

	// Get the total for Conduct
	function updateConductTotal() {
		let conductTotal = document.getElementById("conductTotal");

		 conductTotal = 0;
		// Calculate the total
		conductTotal = parseInt(confidentiality.value) + parseInt(rules.value) + parseInt(obedient.value) + parseInt(relationship.value) + parseInt(appearance.value);
				
		// Update the total element
		var totalElement = document.getElementById("conductTotal");
		totalElement.value = conductTotal;
	}

	// Get the total for Professional
	function updateProfessionalTotal() {
		let professionalTotal = document.getElementById("professionalTotal");

		 professionalTotal = 0;
		// Calculate the total
		professionalTotal = parseInt(diligent.value) + parseInt(resourceful.value) + parseInt(lessSupervision.value);
				
		// Update the total element
		var totalElement = document.getElementById("professionalTotal");
		totalElement.value = professionalTotal;
	}

	// Get the total for Recommendation
	function updateRecommendTotal() {
		let recommendTotal = document.getElementById("recommendTotal");

		 recommendTotal = 0;
		// Calculate the total
		recommendTotal = parseInt(duties.value) + parseInt(achievement.value) + parseInt(specialDuties.value);
				
		// Update the total element
		var totalElement = document.getElementById("recommendTotal");
		totalElement.value = recommendTotal;
	}

	

</script>