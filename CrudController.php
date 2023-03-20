<?php
include('db_connect.php');

if (isset($_POST['save'])) {

    $fullName = $_POST['fullName'];
    $staffNumber = $_POST['staffNumber'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];
    $currentHomeAddress = $_POST['currentHomeAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $schoolServiceUnit = $_POST['schoolServiceUnit'];
    $department = $_POST['department'];
    $dateOfAppointment = $_POST['dateOfAppointment'];
    $statusOfAppointment = $_POST['statusOfAppointment'];
    $dateOfConfirmation = $_POST['dateOfConfirmation'];
    $dateOfLastPromotion = $_POST['dateOfLastPromotion'];
    $dateOfLastRedeployment = $_POST['dateOfLastRedeployment'];
    if($fullName == "" || $staffNumber == "" || $dateOfAppointment == "" || $schoolServiceUnit == "") {
        echo "<script>
            alert('Kindly Fill all Fields');
            window.location.href='http://localhost/epes/index.php?page=Bio_Data';
            </script>";
    }
	try {

        $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //select from database
        $sql = "SELECT * FROM employee_biodata where staffNo = '$staffNumber' or email = '$email'";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row > 0)
        {
            echo "<script>
            alert('Staff Already Exist');
            window.location.href='http://localhost/epes/index.php?page=Bio_Data';
            </script>";
        }
        
        $sql = "INSERT INTO `employee_biodata`( `fullName`, `staffNo`, `dob`, `maritalStatus`, `homeAddress`, `phoneNumber`, `email`, `gender`, `faculty`, `department`, `dateOfAppointment`, `appointmentStatus`, `confirmationDate`, `promotionDate`, `deploymentDate`) 
                VALUES ('$fullName','$staffNumber','$dob','$maritalStatus','$currentHomeAddress','$phoneNumber','$email','$gender','$schoolServiceUnit','$department','$dateOfAppointment','$statusOfAppointment','$dateOfConfirmation','$dateOfLastPromotion','$dateOfLastRedeployment')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script>
            alert('New record created successfully');
            window.location.href='http://localhost/epes/index.php?page=Bio_Data';
            </script>";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
}

if (isset($_POST['update'])) {

    $jobDescription = mysqli_real_escape_string($conn, $_POST['jobDescription']);
    $problemStatement = mysqli_real_escape_string($conn, $_POST['problemStatement']);
    $proposedSolution = mysqli_real_escape_string($conn, $_POST['proposedSolution']);
    $otherInformationz = mysqli_real_escape_string($conn, $_POST['otherInformation']);
    $id = $_POST['id'];
    if($jobDescription == "" || $problemStatement == "" || $proposedSolution == "" || $otherInformationz == "") {
        echo "<script>
            alert('Kindly complete all entries');
            window.location.href='http://localhost/epes/index.php?page=Job_Description';
            </script>";
    }
	try {

        $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //select from database
        $sql = "SELECT staffNo FROM employee_biodata where id = '$id'";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row > 0)
        {
            
            $staffNumber = $row['staffNo'];
            $sql = "UPDATE `employee_biodata` SET `jobDescription`='$jobDescription',`jobChallenges`='$problemStatement',`jobSolution`='$proposedSolution',`JobOtherInformation`='$otherInformationz' WHERE staffNo = '$staffNumber'";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script>
            alert('New record created successfully');
            window.location.href='http://localhost/epes/index.php?page=Job_Description';
            </script>";
        }
        
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
}

if (isset($_POST['submit'])) {
    // initailise Variable to the POST
    $institution = $_POST['institution'];
    $duration = $_POST['duration'];
    $qualification = $_POST['qualification'];
    $awardBody = $_POST['awardBody'];
    $grade = $_POST['grade'];
    $dateOfAward = $_POST['dateOfAward'];
    $responsibility = $_POST['responsibility'];
    $unit = $_POST['unit'];
    $period = $_POST['period'];
    $id = $_POST['id'];

    $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //select from database
    $sql = "SELECT staffNo FROM employee_biodata where id = '$id'";
    $stmt = $conn ->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $staffNumber = $row['staffNo'];


    $sql = "SELECT staffNo FROM employee_qualification where staffNo = '$staffNumber'";
    $query = $conn ->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    if($result > 0)
    {
        echo "<script>
            alert('Record Already Exist');
            window.location.href='http://localhost/epes/index.php?page=Qualifications';
            </script>";
    }
    foreach ($institution as $key =>$value){
        try {
            $sql = "INSERT INTO `employee_qualification`( `staffNo`, `institution`, `duration`, `qualification`, `awardBody`, `grade`, `dateOfAward`, `responsibility`, `unit`, `period`) 
                    VALUES ('$staffNumber','$institution[$key]','$duration[$key]','$qualification[$key]','$awardBody[$key]','$grade[$key]','$dateOfAward[$key]','$responsibility[$key]','$unit[$key]','$period[$key]')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "<script>
                    alert('New record created successfully');
                    window.location.href='http://localhost/epes/index.php?page=Qualifications';
                    </script>";
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            }        
        // $save = "INSERT INTO user"
        // $query = mysqli_query($conn, $save);
    }
}

if (isset($_POST['updateBio'])) {

    $fullName = $_POST['fullName'];
    $staffNumber = $_POST['staffNumber'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];
    $currentHomeAddress = $_POST['currentHomeAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $schoolServiceUnit = $_POST['schoolServiceUnit'];
    $department = $_POST['department'];
    $dateOfAppointment = $_POST['dateOfAppointment'];
    $statusOfAppointment = $_POST['statusOfAppointment'];
    $dateOfConfirmation = $_POST['dateOfConfirmation'];
    $dateOfLastPromotion = $_POST['dateOfLastPromotion'];
    $dateOfLastRedeployment = $_POST['dateOfLastRedeployment'];
	try {

        $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //select from database
        $sql = "SELECT * FROM employee_biodata where staffNo = '$staffNumber' or email = '$email'";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row > 0)        
        $sql = "UPDATE `employee_biodata` SET `fullName` = '$fullName', `staffNo` ='$staffNumber', `dob` ='$dob', `maritalStatus` ='$maritalStatus', `homeAddress` ='$currentHomeAddress', `phoneNumber` ='$phoneNumber', `email` ='$email', `gender` ='$gender',`appointmentStatus`= '$statusOfAppointment', `faculty` ='$schoolServiceUnit', `department` ='$department',`dateOfAppointment` ='$dateOfAppointment',  `confirmationDate` ='$dateOfConfirmation', `promotionDate` ='$dateOfLastPromotion', `deploymentDate` ='$dateOfLastRedeployment' where staffNo = '$staffNumber' ";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script>
            alert('Record Updated successfully');
            window.location.href='http://localhost/epes/index.php?page=Bio_Data';
            </script>";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
}

if (isset($_POST['updateQualification'])) {
    // initailise Variable to the POST
    $institution = $_POST['institution'];
    $duration = $_POST['duration'];
    $qualification = $_POST['qualification'];
    $awardBody = $_POST['awardBody'];
    $grade = $_POST['grade'];
    $dateOfAward = $_POST['dateOfAward'];
    $responsibility = $_POST['responsibility'];
    $unit = $_POST['unit'];
    $period = $_POST['period'];
    $id = $_POST['id'];

    $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //select from database
    $sql = "SELECT staffNo FROM employee_biodata where id = '$id'";
    $stmt = $conn ->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $staffNumber = $row['staffNo'];


    $sql = "SELECT staffNo FROM employee_qualification where staffNo = '$staffNumber'";
    $query = $conn ->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    if($result > 0)
    {
        
        foreach ($institution as $key =>$value){
            try {
                $sql = "UPDATE `employee_qualification` SET `staffNo`='$staffNumber', `institution`='$institution[$key]', `duration`='$duration[$key]', `qualification`='$qualification[$key]', `awardBody`='$awardBody[$key]', `grade`='$grade[$key]', `dateOfAward`='$dateOfAward[$key]', `responsibility`='$responsibility[$key]', `unit`='$unit[$key]', `period`='$period[$key]'";
                    // use exec() because no results are returned
                    $conn->exec($sql);
                    echo "<script>
                        alert('Record Updated Successfully');
                        window.location.href='http://localhost/epes/index.php?page=Qualifications';
                        </script>";
            }catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }        
            // $save = "INSERT INTO user"
            // $query = mysqli_query($conn, $save);
        }
    }
}

if (isset($_POST['evaluate'])) {
    $EmployeeJobStatement = stripslashes($_POST['EmployeeJobStatement']);
    $TraningRecommendation = stripslashes($_POST['TraningRecommendation']);
    $adviseForStaff = stripslashes($_POST['adviseForStaff']);
    $anyOtherInformation = stripslashes($_POST['anyOtherInformation']);
    $qualityOfWork = stripslashes($_POST['qualityTotal']);
    $cooperation = stripslashes($_POST['cooperationTotal']);
    $resourcefulness = stripslashes($_POST['resourcefulnessTotal']);
    $conduct = stripslashes($_POST['conductTotal']);
    $professional = stripslashes($_POST['professionalTotal']);
    $recommend = stripslashes($_POST['recommendTotal']);
    $employeeID = stripslashes($_POST['employeeID']);
    $evaluatorID = stripslashes($_POST['evaluatorID']);
    $totalScore = $qualityOfWork + $cooperation + $resourcefulness + $conduct + $professional + $recommend;
	try {

        $conn = new PDO("mysql:host=localhost;dbname=epes_db", 'root', '');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //select from database
        // $qryEmployeeID = "SELECT staffNo FROM employee_biodata where id = ".$employeeID;
        // $employeeStmt = $conn->prepare($qryEmployeeID);
        // $employeeStmt->execute();
        // $rowEmployee = $employeeStmt->fetch(PDO::FETCH_ASSOC);
        // $employee = $rowEmployee["staffNo"]; 

        $qryEvaluatorID = "SELECT * FROM evaluator_list where id = ".$evaluatorID;
        $evaluatorStmt = $conn->prepare($qryEvaluatorID);
        $evaluatorStmt->execute();
        $rowEvaluator = $evaluatorStmt->fetch(PDO::FETCH_ASSOC);
        $evaluator = $rowEvaluator["employee_id"];  


        $sql = "SELECT * FROM ratings where employee_id = '$employeeID' or evaluator_id = '$evaluator'";
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row > 0)
        {
            echo "<script>
            alert('This Employee has been Evaluated');
            window.location.href='http://localhost/epes/index.php?page=evaluate';
            </script>";
        }
        
        $sql = "INSERT INTO `ratings`( `employee_id`, `evaluator_id`, `duties`, `trainings`, `suggestions`, `otherInfo`, `qualityOfWork`, `cooperation`, `resourceful`, `conduct`, `professional`, `recommendation`, `totalScore`, `status`)
                VALUES ('$employeeID','$evaluator','$EmployeeJobStatement','$TraningRecommendation','$adviseForStaff','$anyOtherInformation','$qualityOfWork','$cooperation','$resourcefulness','$conduct','$professional','$recommend','$totalScore','Completed')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<script>
            alert('New record created successfully');
            window.location.href='/epes/index.php?page=evaluation';
            </script>";
      } catch(PDOException $e) {
        echo  $e->getMessage();
      }
}
?>