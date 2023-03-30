<?php
		 
	require_once 'config.php';
//alert("before value");
if (isset($_REQUEST['id']))
{
    
			
		$id = $_REQUEST['id'];

    

    $str = explode("-", $id);
    // echo ''.$str[0];
// echo ''.$str[1];

    $month = $str[0];
    $year = $str[1];
    
   

    switch ($month)
    {
  case "January":
    $month= "01";
    //echo $month;
    break;
  case "February":
    $month= "02";
    break;
  case "March":
    $month= "03";
    break;
  case "April":
    $month= "04";
    break;
  case  "May":
    $month= "05";
    break;
  case  "June":
    $month= "06";
    break;

  case    "July":
    $month= "07";
  case "August":
    $month= "08";
    break;
  case "September":
    $month= "09";
    break;
  case "October":
    $month= "10";
    break;
  case  "November":
    $month= "11";
  case    "December":
    $month= "12";

}

    
    
    
   
    
//     $query = "SELECT id,date,type,tenant_mobile,month,year,income_amount,comments FROM `accounts` 
// where  MONTH(date)=01 and YEAR(date)=2023  and `expenditure_amount`='0'
// order by DATE(date) desc";


    $query = "SELECT id,date,type,tenant_mobile,month,year,income_amount,comments FROM `accounts` 
where MONTH(date)=$month and YEAR(date)=$year  and `expenditure_amount`='0'
order by DATE(date) desc";

//echo $query;
    $result = $conn->query($query);
    
    //echo $result;
    $row = mysqli_fetch_assoc($result);
    
    
    if ($result->num_rows > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
//while($row = $result->fetch_assoc()) {
            ?>
			
			
	
                                        
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
				<th>mobile</th>
				<td><?php echo $row["tenant_mobile"]; ?></td>
			</tr>
			<tr>
				<th>month</th>
				<td><?php echo $row["month"]; ?></td>
			</tr>
			<tr>
				<th>year</th>
				<td><?php echo $row["year"]; ?></td>
			</tr>
			<tr>
				<th>income_amount</th>
				<td><?php echo $row["income_amount"]; ?></td>
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