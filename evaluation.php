<?php include'db_connect.php';
$evaluatorID = $_SESSION["login_id"]; ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>FullName</th>
						<th>Staff No</th>
						<th width="15%">Department</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$where = "";
					if($_SESSION['login_type'] == 1)
						$where = " where r.evaluator_id = {$_SESSION['login_id']} ";
					$qry = $conn->query("SELECT DISTINCT e.id, CONCAT(e.lastname,', ',e.firstname,' ',e.middlename) AS fullName, e.staffNum, d.department, r.status 
					FROM employee_list e
					INNER JOIN evaluator_list ev ON e.evaluator_id = '$evaluatorID'
					inner join department_list d 
					ON e.department_id = d.id
					LEFT JOIN ratings r
					ON  r.employee_id = e.staffNum
					ORDER BY fullname ASC");
					
                    // $qry = $conn->query("SELECT a.* , b.status FROM employee_biodata a LEFT JOIN ratings b ON a.staffNo=b.employee_id");
					while($row= $qry->fetch_assoc()):
                        if($row['status'] == 'Completed'){
                            $status = "badge-success";
                        }
						else{
                        $status = "badge-warning";
						}
                        // var_dump($row);
                        // exit();
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ($row['fullName']) ?></b></td>
						<td><b><?php echo ($row['staffNum']) ?></b></td>
						<td><b><?php echo ($row['department']) ?></b></td>
						<td><span class="badge <?php echo $status ?>"><?= ($row['status']== 'Completed') ? 'Completed' : 'In-Progress'?></span></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu">
		                      <a class="dropdown-item view_evaluation" href="./index.php?page=view_profile&id=<?php echo $row['staffNum'] ?>" >View Profile</a>
		                      <div class="dropdown-divider"></div>
							  <?php if($row['status']== 'Completed'):?>
		                      <!-- <a class="dropdown-item" href="./index.php?page=evaluate&id=<?php echo $row['staffNum'] ?>">Evaluate</a> -->
							  <?php endif; ?>
							  <?php if($row['status']== 'In-Progress' || $row['status']==''):?>
		                      <a class="dropdown-item" href="./index.php?page=evaluate&id=<?php echo $row['staffNum'] ?>">Evaluate</a>
							  <?php endif; ?>

		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Bootstrap Javascript Plugin -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){
		console.log($('#list').dataTable())
	$('.view_evaluation').click(function(){
		uni_modal("Evaluation Details","view_evaluation.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.delete_evaluation').click(function(){
	_conf("Are you sure to delete this evaluation?","delete_evaluation",[$(this).attr('data-id')])
	})
	})
	function delete_evaluation($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_evaluation',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>