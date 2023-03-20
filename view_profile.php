<?php
include 'db_connect.php';
$staff = $_GET['id'];
$qry = $conn->query("SELECT * FROM employee_biodata where staffNo = '$staff'")->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;	
}
include 'profile.php';
?>