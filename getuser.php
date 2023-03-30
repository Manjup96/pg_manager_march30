<?php
		 
	require_once 'config.php';
	
	if (isset($_REQUEST['id'])) 
	{
			
		$id = intval($_REQUEST['id']);
		//	$query = "SELECT * FROM tenant_registration_manager_email WHERE id=$id";
			
		$query="SELECT id,building_name,manager_email,manager_mobile_no,tenant_name,tenant_email,tenant_mobile,tenant_aadhar_number,tenant_address,comments,DATE_FORMAT(`joining_date`,'%d-%m-%Y') as joining_date from tenant_registration_manager_email ";
//where manager_email='$manager_email' and building_name='$building_name' ORDER by id DESC
	//	$query = "SELECT * FROM tenant_registration_without_image WHERE id=$id";
// 		echo $row["query;
// 		$stmt = $conn->prepare( $query );
// 		$stmt->execute(array(':id'=>$id));
		
// 		$row=$stmt->fetch(PDO::FETCH_ASSOC);
// 		extract($row);
		
	//	$sql="select * from emp_registration";
                  $result=$conn->query($query);
                //echo $result;
                $row = mysqli_fetch_assoc($result);
               if(!TRUE)
               {
                echo $row;
               }
               // echo json_encode($result);
               //json_encode($output, JSON_HEX_TAG)
               //echo "<script>console.log(json_encode($row, JSON_HEX_TAG));</script>";
               
               // echo json_encode($row);
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
			<tr>
				<th>Aadhaar Number</th>
				<td><?php echo $row["tenant_aadhar_number"];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $row["tenant_address"];?></td>
			</tr>
			<tr>
				<th>Joining Date</th>
				<td><?php echo $row["joining_date"];?></td>
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