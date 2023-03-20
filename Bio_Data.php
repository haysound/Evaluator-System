<?php include('db_connect.php') ?>
<?php

$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
<?php 
	if($_SESSION['login_type'] == 2): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM department_list ")->num_rows; ?></h3>

                <p>Total Departments</p>
              </div>
              <div class="icon">
                <i class="fa fa-th-list"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM designation_list")->num_rows; ?></h3>

                <p>Total Designations</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM employee_list")->num_rows; ?></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-friends"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM evaluator_list")->num_rows; ?></h3>

                <p>Total Evaluators</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM task_list")->num_rows; ?></h3>

                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
            </div>
          </div>
      </div>

<?php else: 

$id = $_SESSION["login_id"];
include 'db_connect.php';
$qryID = $conn->query("SELECT staffNo FROM employee_biodata where id = $id"  );
$rowID= $qryID->fetch_array();
$staff = $rowID["staffNo"];
$qry = $conn->query("SELECT * FROM employee_biodata where staffNo = '$staff'");
$row= $qry->fetch_assoc();

  ?>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="CrudController.php" method="post" >
            <div class="container">

              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" aria-describedby="fullName" placeholder="Enter your Full Name" required value="<?php echo isset($row['fullName']) ? $row['fullName'] : '' ?>">
                <small id="fullNameHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small>
              </div>
              
              <div class="form-group">
                <label for="staffNumber">Staff Number</label>
                <input type="text" class="form-control" id="staffNumber" name="staffNumber" aria-describedby="staffNumber" placeholder="Enter your Staff Number" required value="<?php echo isset($row['staffNo']) ? $row['staffNo'] : '' ?>">
                <!-- <small id="staffNumberHelp" class="form-text text-muted">Kindly input Staff Number</small> -->
              </div>
              
              <div class="form-group d-flex">
                <div class="w-60">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="dob" aria-describedby="dob" placeholder="Enter your Date of Birth" required value="<?php echo isset($row['dob']) ? $row['dob'] : '' ?>">
                </div>
                <div class="w-20">
                  <!-- <small id="dobHelp" class="form-text text-muted">ff</small> -->
                  <label for="gender">Gender</label>
                  <select class="form-control" id="gender" name="gender" required>
                    <option value="<?php echo isset($row['gender']) ? $row['gender'] : 'Select' ?>"><?php echo isset($row['gender']) ? $row['gender'] : 'Select' ?></option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
                </div>
                <div class="w-20">
                  <!-- <small id="dobHelp" class="form-text text-muted">ff</small> -->
                  <label for="maritalStatus">Marital Status</label>
                  <select class="form-control" id="maritalStatus" name="maritalStatus" required>
                    <option value="<?php echo isset($row['maritalStatus']) ? $row['maritalStatus'] : 'Select' ?>"><?php echo isset($row['maritalStatus']) ? $row['maritalStatus'] : 'Select' ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                  </select>
                </div>  
              </div>

              <div class="form-group">
                <label for="currentHomeAddress">Current Home Address</label>
                <input type="text" class="form-control" id="currentHomeAddress" name="currentHomeAddress" aria-describedby="currentHomeAddress" placeholder="Enter your Current Home Address" required value="<?php echo isset($row['homeAddress']) ? $row['homeAddress'] : '' ?>">
                <!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
              </div>
                  
              <div class="form-group d-flex">
                <div class="w-50">
                  <label for="phoneNum">Phone Number</label>
                  <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" placeholder="Enter your Phone Number" required value="<?php echo isset($row['phoneNumber']) ? $row['phoneNumber'] : '' ?>">
                  <small id="phoneHelp" class="form-text text-muted">Example: 080xxxxxxx</small>
                </div>
                <div class="w-50">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Kindly Input your Email Address" required value="<?php echo isset($row['email']) ? $row['email'] : '' ?>">
                <small id="emailHelp" class="form-text text-muted">Example: Home@home.com</small>
                </div>  
              </div>

              <div class="form-group d-flex">
                <div class="w-50">
                  <label for="schoolServiceUnit">School/Service Unit</label>
                  <input type="text" class="form-control" id="schoolServiceUnit" name="schoolServiceUnit" aria-describedby="Service Number" placeholder="Enter your School/Service Unit" required value="<?php echo isset($row['faculty']) ? $row['faculty'] : '' ?>">
                  <small id="schoolHelp" class="form-text text-muted">Example: School of Technology</small>
                </div>
                <div class="w-50">
                  <label for="department">Department</label>
                  <input type="text" class="form-control" id="department" name="department" placeholder="Kindly Input your Department" required value="<?php echo isset($row['department']) ? $row['department'] : '' ?>">
                  <small id="departmentHelp" class="form-text text-muted">Example: Computer Science</small>
                </div>  
              </div>

              <div class="form-group">
                <label for="currentHomeAddress">Date of Appointment in Service/College</label>
                <input type="date" class="form-control" id="dateOfAppointment" name="dateOfAppointment" aria-describedby="dateOfAppointment" placeholder="Enter your Date Of Appointment" required value="<?php echo isset($row['dateOfAppointment']) ? $row['dateOfAppointment'] : '' ?>">
                <!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
              </div>

              <div class="form-group">
                <label for="status">Status of Appointment</label>
                <div class="d-flex">
                  <div class="form-check w-20">
                    <input class="form-check-input" type="radio" name="statusOfAppointment" id="statusOfAppointment" value="Confirmed" <?php echo ($row['appointmentStatus'] == "Confirmed" ? 'checked="checked"': ''); ?>>
                    <label class="form-check-label" for="statusOfAppointment">Confirmed</label>
                  </div>
                  <div class="form-check w-20">
                    <input class="form-check-input" type="radio" name="statusOfAppointment" id="statusOfAppointment" value="Not Confirmed"<?php echo ($row['appointmentStatus'] == "Not Confirmed" ? 'checked="checked"': ''); ?>>
                    <label class="form-check-label" for="statusOfAppointment">Not Confirmed</label>
                  </div>
                </div>
              </div>
              
              <div class="form-group d-flex">
                <div class="w-50">
                  <label for="dateOfConfirmation">Date of Confirmation</label>
                  <input type="date" class="form-control" id="dateOfConfirmation" name="dateOfConfirmation" aria-describedby="dateOfConfirmation" placeholder="Enter your Date Of Confirmation"  value="<?php echo isset($row['confirmationDate']) ? $row['confirmationDate'] : '' ?>">
                </div>
                <div class="w-50">
                  <label for="dateOfLastPromotion">Date of Last Promotion</label>
                  <input type="date" class="form-control" id="dateOfLastPromotion" name="dateOfLastPromotion" placeholder="Kindly Input your Date Of Last Promotion"  value="<?php echo isset($row['promotionDate']) ? $row['promotionDate'] : '' ?>">
                <!--  <small id="emailHelp" class="form-text text-muted">Home@home.com</small> -->
                </div>  
              </div>

              <div class="form-group">
                <label for="dateOfLastRedeployment">Date of Last Redeployment</label>
                <input type="date" class="form-control" id="dateOfLastRedeployment" name="dateOfLastRedeployment" aria-describedby="dateOfLastRedeployment" placeholder="Enter your Date Of Last Redeployment" value="<?php echo isset($row['deploymentDate']) ? $row['deploymentDate'] : '' ?>">
                <!-- <small id="currentHomeAddressHelp" class="form-text text-muted">Kindly input Full Name (Surname first)</small> -->
              </div>
              
              <button type="submit" class="btn btn-primary" name="<?php echo isset($row['staffNo'])? 'updateBio' : 'save' ?>">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
<?php endif; ?>




