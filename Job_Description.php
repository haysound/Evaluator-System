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

<?php 
else: 
  $id = $_SESSION["login_id"];
  include 'db_connect.php';
  $qryID = $conn->query("SELECT staffNum FROM employee_list where id = ".$id);
  $rowID= $qryID->fetch_array();
  $staff = $rowID["staffNum"];
  $qry = $conn->query("SELECT * FROM employee_biodata where staffNo = '$staff'");
  $row= $qry->fetch_assoc();
?>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="CrudController.php" method="post" >
            <div class="container">

            <div class="form-group">
              <label for="jobDescription">State your duties during the period covered by this report
            indicating target and key achievements</label>
              <textarea class="form-control" id="jobDescription" rows="3" name="jobDescription"> <?php echo isset($row['jobDescription']) ? $row['jobDescription'] : '' ?></textarea>
            </div>
              
            <div class="form-group">
              <label for="problemStatement">What major challenges did you encounter in the performance of your duties? </label>
              <textarea class="form-control" id="problemStatement" rows="3" name="problemStatement" ><?php echo isset($row['jobChallenges']) ? $row['jobChallenges'] : '' ?></textarea>
            </div>

            <div class="form-group">
              <label for="proposedSolution">Proposed Solutions </label>
              <textarea class="form-control" id="proposedSolution" rows="3" name="proposedSolution" ><?php echo isset($row['jobSolution']) ? $row['jobSolution'] : '' ?></textarea>
            </div>

            <div class="form-group">
              <label for="otherInformation">Any other useful information peculiar to your duty during the period covered by this report  </label>
              <textarea class="form-control" id="otherInformation" rows="3" name="otherInformation" ><?php echo isset($row['JobOtherInformation']) ? $row['JobOtherInformation'] : '' ?></textarea>
              <input type="text" hidden name="id" value="<?php echo $id; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="update">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php endif; ?>
