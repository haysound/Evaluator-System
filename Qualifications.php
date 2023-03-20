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
  $qryID = $conn->query("SELECT staffNum FROM employee_list where id = ".$id);
  $rowID= $qryID->fetch_array();
  $staff = $rowID["staffNum"];
  $qry = $conn->query("SELECT * FROM employee_qualification where staffNo = '$staff'");
  $row = $qry->fetch_assoc();

  ?>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="CrudController.php" method="post" >
            <div class="container">

              <!-- Academic -->
              <div class="container mb-3">

                <h4>Academic (As in Record of Service)</h4>

                <table class="table table-bordered" >    
                  <thead>
                    <tr>
                        <th data-sortable="true">Name of Institution</th>
                        <th data-sortable="true">Duration</th>
                        <th data-sortable="true">Qualifications</th>
                        <th><input style="font-weight:700; font-size:15px" class="noBorder"  type="button" value="Add Row" onclick="add()" /></th>
                    </tr>
                  </thead>
                  <tbody id="qualification">
                      <tr>
                        <td><input class="noBorder" type="text" value="" name="institution[]"></td>
                        <td>
                          <input class="noBorder" type="text" value="" title="Example: 4 years" name="duration[]">
                        </td>
                        <td><input class="noBorder" type="text" value="" name="qualification[]"></td>
                        <td> <input class="noBorder"  type="button" value="Delete Row" onclick="deleteRow(this)" /></td>
                    </tr>
                    </tbody>

                    
                </table>

              </div>

              <!-- Professional (As in Record of Service) -->
              <div class="container mb-3">
                <h4>Professional (As in Record of Service)</h4>
                <table class="table table-bordered" >    
                    <thead>
                      <tr>
                          <th data-sortable="true">Awarding Body/Society</th>
                          <th data-sortable="true">Grade of Membership</th>
                          <th data-sortable="true">Date of Award</th>
                          <th><input style="font-weight:700; font-size:15px" class="noBorder"  type="button" value="Add Row" onclick="addRow()" /></th>
                      </tr>
                    </thead>
                    <tbody id="professional">
                      <tr>
                        <td><input class="noBorder" type="text" value="" name="awardBody[]"></td>
                        <td><input class="noBorder" type="text" value="" name="grade[]"></td>
                        <td><input class="noBorder" type="date" value="" title="Example: 02/02/2002" name="dateOfAward[]"></td>
                        <td><input class="noBorder"  type="button" value="Delete Row" onclick="deleteRow(this)" /></td>
                      </tr>
                    </tbody>
                </table>
              </div>

              <!-- Experience -->
              <div class="container mb-3">
                <h4>Administrative Experience (e.g. position in Department, School, Institution, Committees, State, Community) </h4>
                <table class="table table-bordered" >    
                    <thead>
                      <tr>
                          <th data-sortable="true">Responsibility/Designation</th>
                          <th data-sortable="true">Unit/Department/School</th>
                          <th data-sortable="true">Period</th>
                          <th><input style="font-weight:700; font-size:15px" class="noBorder"  type="button" value="Add Row" onclick="addRows()" /></th>
                      </tr>
                    </thead>
                    <tbody id="experience">
                      <tr>
                        <td><input class="noBorder" type="text" value="" name="responsibility[]"></td>
                        <td><input class="noBorder" type="text" value="" name="unit[]"></td>
                        <td><input class="noBorder" type="date" value="" title="Example: 1 Year" name="period[]"></td>
                        <td><input class="noBorder"  type="button" value="Delete Row" onclick="deleteRow(this)" /></td>
                        <!-- <input type="text" hidden name="id" value="<?php echo $id; ?>"> -->
                      </tr>
                    </tbody>
                </table>
              </div>

              <!-- <button type="submit" class="btn btn-primary" name="<?php echo isset($staff)? 'updateQualification' : 'submit' ?>">Submit</button> -->
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </form>
        </div>
        <!-- <script>
      document.querySelector('form').addEventListener('submit', e => {
  e.preventDefault();
  const data = new FormData(e.target);
  console.log([...data.entries()]);
});
    </script> -->
      </div>
    </div>
<?php endif; ?>

