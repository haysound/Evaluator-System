<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Staff Number</th>
						<th>Department</th>
						<th>Designation</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$designations = $conn->query("SELECT * FROM designation_list ");
					$design_arr[0]= "Unset";
					while($row=$designations->fetch_assoc()){
						$design_arr[$row['id']] =$row['designation'];
					}
					$departments = $conn->query("SELECT * FROM department_list ");
					$dept_arr[0]= "Unset";
					while($row=$departments->fetch_assoc()){
						$dept_arr[$row['id']] =$row['department'];
					}
					$qry = $conn->query("SELECT DISTINCT e.id,CONCAT(e.lastname,', ',e.firstname,' ',e.middlename) AS name,e.email, e.staffNum,e.evaluator_id, e.designation_id, e.department_id, r.status
					FROM employee_list e
					INNER JOIN evaluator_list ev 
					inner join department_list d 
					ON e.department_id = d.id
					LEFT JOIN ratings r
					ON r.employee_id = e.staffNum
					WHERE e.evaluator_id = ev.id
					ORDER BY name ASC");
					while($row= $qry->fetch_assoc()):
						if($row['status'] == 'Completed'){
                            $status = "badge-success";
                        }
						else{
                        $status = "badge-warning";
						}
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo $row['staffNum'] ?></b></td>
						<td><b><?php echo isset($dept_arr[$row['department_id']]) ? $dept_arr[$row['department_id']] : 'Unknown Department' ?></b></td>
						<td><b><?php echo isset($design_arr[$row['designation_id']]) ? $design_arr[$row['designation_id']] : 'Unknown Designation' ?></b></td>
						<td><span class="badge <?php echo $status ?>"><?= ($row['status']== 'Completed') ? 'Completed' : 'In-Progress'?></span></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu">
		                      <a class="dropdown-item view_employee" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <!-- <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="./index.php?page=edit_employee&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_employee" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a> -->
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_employee').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Employee Evaluation Result","view_employees.php?id="+$(this).attr('data-id'))
	})
	$('.delete_employee').click(function(){
	_conf("Are you sure to delete this Employee?","delete_employee",[$(this).attr('data-id')])
	})
	})
	function delete_employee($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_employee',
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