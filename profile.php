<?php
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_employee">
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
                <div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" value="<?php echo isset($fullName) ? $fullName : ''; ?>" disabled>
					<!-- <small id="fullNameHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
				</div>
				
				<div class="form-group">
					<label for="staffNumber">Staff Number</label>
					<input type="text" class="form-control" value="<?php echo isset($staffNo) ? $staffNo : '' ?>" disabled>
					<!-- <small id="staffNumberHelp" class="form-text text-muted">Kindly input Staff Number</small> -->
				</div>
				
				<div class="form-group d-flex">
					<div class="w-60">
						<label for="dob">Date of Birth</label>
						<input type="text" class="form-control" value="<?php echo isset($dob) ? $dob : '' ?>" disabled>
					</div>
					<div class="w-20">
						<!-- <small id="dobHelp" class="form-text text-muted">ff</small> -->
						<label for="gender">Gender</label>
						<input type="text" class="form-control" value="<?php echo isset($gender) ? $gender : '' ?>" disabled>
					</div>
					<div class="w-20">
						<!-- <small id="dobHelp" class="form-text text-muted">ff</small> -->
						<label for="maritalStatus">Marital Status</label>
						<input type="text" class="form-control" value="<?php echo isset($maritalStatus) ? $maritalStatus : '' ?>" disabled>
					</div>  
				</div>

				<div class="form-group">
					<label for="currentHomeAddress">Current Home Address</label>
					<input type="text" class="form-control" value="<?php echo isset($homeAddress) ? $homeAddress : '' ?>" disabled>
					<!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
				</div>
					
				<div class="form-group d-flex">
					<div class="w-50">
						<label for="phoneNum">Phone Number</label>
						<input type="text" class="form-control" value="<?php echo isset($phoneNumber) ? $phoneNumber : '' ?>" disabled>
						<!-- <small id="phoneHelp" class="form-text text-muted">Example: 080xxxxxxx</small> -->
					</div>
					<div class="w-50">
						<label for="email">Email address</label>
						<input type="text" class="form-control" value="<?php echo isset($email) ? $email : '' ?>" disabled>
						<!-- <small id="emailHelp" class="form-text text-muted">Example: Home@home.com</small> -->
					</div>  
				</div>

				<div class="form-group d-flex">
					<div class="w-50">
						<label for="schoolServiceUnit">School/Service Unit</label>
						<input type="text" class="form-control" value="<?php echo isset($faculty) ? $faculty : '' ?>" disabled>
						<!-- <small id="schoolHelp" class="form-text text-muted">Example: School of Technology</small> -->
					</div>
					<div class="w-50">
						<label for="department">Department</label>
						<input type="text" class="form-control" value="<?php echo isset($department) ? $department : '' ?>" disabled>
						<!-- <small id="departmentHelp" class="form-text text-muted">Example: Computer Science</small> -->
					</div>  
				</div>

				<div class="form-group">
					<label for="currentHomeAddress">Date of Appointment in Service/College</label>
					<input type="text" class="form-control" value="<?php echo isset($dateOfAppointment) ? $dateOfAppointment : '' ?>" disabled>
					<!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
				</div>

				<div class="form-group">
					<label for="status">Status of Appointment</label>
					<div class="d-flex">
					<div class="form-check w-20">
						<input class="form-check-input" type="radio" name="statusOfAppointment" id="statusOfAppointment" value="Confirmed" <?= ($appointmentStatus == 'Confirmed' ) ? 'checked' : '' ?>  disabled>
						<label class="form-check-label" for="statusOfAppointment">Confirmed</label>
					</div>
					<div class="form-check w-20">
						<input class="form-check-input" type="radio" name="statusOfAppointment" id="statusOfAppointment" value="Not Confirmed" <?= ($appointmentStatus == 'Not Confirmed') ? 'checked' : '' ?> disabled>
						<label class="form-check-label" for="statusOfAppointment">Not Confirmed</label>
					</div>
					</div>
				</div>
				
				<div class="form-group d-flex">
					<div class="w-50">
						<label for="dateOfConfirmation">Date of Confirmation</label>
						<input type="text" class="form-control" value="<?php echo isset($confirmationDate) ? $confirmationDate : '' ?>" disabled>
					</div>
					<div class="w-50">
						<label for="dateOfLastPromotion">Date of Last Promotion</label>
						<input type="text" class="form-control" value="<?php echo isset($promotionDate) ? $promotionDate : '' ?>" disabled>
						<!--  <small id="emailHelp" class="form-text text-muted">Home@home.com</small> -->
					</div>  
				</div>

				<div class="form-group">
					<label for="dateOfLastRedeployment">Date of Last Redeployment</label>
					<input type="text" class="form-control" value="<?php echo isset($deploymentDate) ? $deploymentDate : '' ?>" disabled>
					<!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage_employee').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('[name="password"]').val() != '' && $('[name="cpass"]').val() != ''){
			if($('#pass_match').attr('data-status') != 1){
				if($("[name='password']").val() !=''){
					$('[name="password"],[name="cpass"]').addClass("border-danger")
					end_load()
					return false;
				}
			}
		}
		$.ajax({
			url:'ajax.php?action=save_employee',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=employee_list')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>