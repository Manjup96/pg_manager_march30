<?php
	//get-monthly-expenditure-report	 
	require_once 'config.php';
//alert("before value");
if (isset($_REQUEST['id'])) {

    $id = intval($_REQUEST['id']);

    $str = explode("-", $id);
    // echo ''.$str[0];
// echo ''.$str[1];

    $month = $str[0];
    $year = $str[1];
    //alert($month+$year);
     echo ''.$month;
 echo ''.$year;
  
    $query = "SELECT id,date,type,expenditure_amount,comments FROM `accounts` 
    where  MONTH(date)=01 and YEAR(date)=2023  and `income_amount`='0'
    order by DATE(date) desc";
    $result = $conn->query($query);
    //echo $result;
    $row = mysqli_fetch_assoc($result);
    //echo $row;
?>
<!-- <tr>
			    <th>ID</th>
                <th>Date</th>
                <th>type</th>
                <th>mobile</th>
                <th>month</th>
                <th>year</th>
                <th>income_amount</th>
                <th>Comments</th>
        </tr> -->
        <?php
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
			
			
		<!--	<td><?php #echo $row["emp_name"];?></td>
           <td><?php #echo $row["emp_des"];?></td> -->
                                        
		<div class="table-responsive">
		
		<table class="table table-striped table-bordered">

        <tr>
			    <th>ID</th>
				<td><?php echo $row["id"]; ?></td>
			</tr>
			
			<tr>
			    <th>Date</th>
				<td><?php echo $row["date"]; ?></td>
			</tr>
			<tr>
				<th>type</th>
				<td><?php echo $row["type"]; ?></td>
			</tr>
			
			<tr>
				<th>expenditure_amount</th>
				<td><?php echo $row["expenditure_amount"]; ?></td>
			</tr>
			
			<tr>
				<th>Comments</th>
				<td><?php echo $row["comments"]; ?></td>
			</tr>
			
            
			
		</table>
			
		</div>
			
		<?php
        }
    }
}
  ?>