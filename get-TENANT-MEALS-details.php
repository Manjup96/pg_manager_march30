<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) 
	{
			
		$id = intval($_REQUEST['id']);
			$query = "SELECT * FROM meals WHERE id=$id";
	
		//`id`, `tenant_mobile`, `floor_no`, `room_no`, `bed_no`, `breakfast`, `lunch`, `dinner`, `date`, `comments`, `building_name`, `manager_email`, `tenant_name
		
		
	//	$sql="select * from emp_registration";
                  $result=$conn->query($query);
                //echo $result;
                $row = mysqli_fetch_assoc($result);
                echo $row;
            
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
				<th>Mobile</th>
				<td><?php echo $row["tenant_mobile"];?></td>
			</tr>
			
			
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
			    	<th>Breakfast</th>
				<td><?php echo $row["breakfast"];?></td>
			    
			</tr>
		
			<tr>
			    	<th>Lunch</th>
				<td><?php echo $row["lunch"];?></td>
			    
			</tr>
			<!-- `breakfast`, `lunch`, `dinner`-->
				<tr>
			    	<th>Dinner</th>
				<td><?php echo $row["dinner"];?></td>
			    
			</tr>
			
			<tr>
				<th>Date</th>
				<td><?php echo $row["date"];?></td>
			</tr>
			
		
			
			
		</table>
			
		</div>
			
		<?php				
	}
	}
  ?>