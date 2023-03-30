<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) 
	{
			
		$id = intval($_REQUEST['id']);
			$query = "SELECT * FROM complaints WHERE id=$id";
	
		//`complaints`(`id`, `building_name`, `manager_email`, `manager_mobile`, `tenant_name`, `tenant_email`, `tenant_mobile`, `floor_no`, `room_no`, `bed_no`, `complaint_type`, `complaint_description`, `response`, `created_date`, `resolve_date`, `comments`
		
		
	//	$sql="select * from emp_registration";
                  $result=$conn->query($query);
                //echo $result;
                $row = mysqli_fetch_assoc($result);
               // echo $row;
            
             if($result->num_rows>0)
                {
           // while($row = mysqli_fetch_assoc($result)) 
             //  {
			
		?>
			
		
		<div class="table-responsive">
		
		<table class="table table-striped table-bordered">
		<tr>
			    <th>ID</th>
				<td><?php echo $row["id"];?></td>
			</tr>
			
			<tr>
			    <th>Tenant Name</th>
				<td><?php echo $row["tenant_name"];?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $row["tenant_email"];?></td>
			</tr>
			
			
			<tr>
				<th>Mobile</th>
				<td><?php echo $row["tenant_mobile"];?></td>
			</tr>
			
			<!-- `floor_no`, `room_no`, `bed_no`, `complaint_type`, `complaint_description`, `response`, `created_date`, `resolve_date`,-->
			<tr>
				<th>Floor No</th>
				<td><?php echo $row["floor_no"];?></td>
			</tr>
			<tr>
				<th>Room No</th>
				<td><?php echo $row["room_no"];?></td>
			</tr>
			<tr>
			    	<th>Bed No</th>
				<td><?php echo $row["bed_no"];?></td>
			    
			</tr>
		    	<tr>
			    	<th>Complaint Type</th>
				<td><?php echo $row["complaint_type"];?></td>
			    
			</tr>
		
			<tr>
			    	<th>complaint_description</th>
				<td><?php echo $row["complaint_description"];?></td>
			    
			</tr>
				<tr>
			    	<th>Response</th>
				<td><?php echo $row["response"];?></td>
			    
			</tr>
			
			<tr>
				<th>Created Date</th>
				<td><?php echo $row["created_date"];?></td>
			</tr>
			
			<tr>
				<th>Comments</th>
				<td><?php echo $row["comments"];?></td>
			</tr>
			
			
			
		</table>
			
		</div>
			
		<?php				
	}
	}
  ?>