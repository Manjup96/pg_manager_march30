<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#D6DBDF;"> -->
<title>Building form</title>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>

       
<?php
       include "./adminHeader.php";
       include "./sidebar.php";
       include "./commonlinks.php";
       ?>

</head>
<style>
     .btn {
  background-color:#117A65;
  border: box;
  color: white;
  padding: 12px 16px;
  padding:0rem 1rem 1rem 1rem;
  font-size: 22px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #ABEBC6;
}
p.two {
  border-style: solid;
  border-width: medium;
  border-radius:22px;
}

h1 {
  color: #B9770E;
}

</style>

    <body>
   
        
     

        
 <div class="form_group mt-5 text-center">
 <?php #echo $_SESSION['building_name']?>
 <br>The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
   
     
     //var buidling_name =  localStorage.getItem("selected_building1");
     
  
     var building_name = localStorage.getItem("selected_building1");
     console.log("building_name before cookires=",building_name)
     var manager_email = document.getElementById("manager_email").value;
     var manager_mobile = document.getElementById("manager_mobile").value;
document.cookie = "building_name=" + building_name ;

//console.log(document.cookie);


     
//document.cookie = "manager_email=" + manager_email ;
document.cookie = "manager_email=" + manager_email ;

console.log(document.cookie);

document.cookie = "manager_mobile=" + manager_mobile ;

console.log(document.cookie);




 </script>
 

 </div>
 

    
     <?php
//if (isset($_COOKIE['building_name'])) {
    $building_name = $_COOKIE['building_name'];
    $manager_email = $_COOKIE['manager_email'];
    $manager_mobile = $_COOKIE['manager_mobile'];
    
//echo '<script>alert("' . $building_name . $manager_email. '");</script>';

    
    //echo "building_name = " . $building_name;
// } 
// else {
//     echo "Error: Cookie not set.";
// }
?>

     <!--<button type="submit" value="submit" name="submit" onclick="this.disabled=true; this.form.submit();"> </button>-->
     <!--<input type="submit" value="Submit2" onclick="this.disabled=true; this.form.submit(); this.removeAttribute('onclick');">-->

    
    	<div class="container h-90" style="margin-right:900px">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    
                	<form class="form-example" action=".php" method="post">
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Adding Room Details</p></div></center></h1>
                		

                    <center>
                        <!--<a href="room_setup.php"  class="btn"><i class="fa fa-home"></i> Rooms</a> -->
                        <a href="room_booking_setup.php"  class="btn"><i class="fa fa-home"></i>Add Rooms </a>
                    </center>

                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>
        
        <?php require_once 'config.php'; ?>
 
	<div class="container">
		<form class="" action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel" required value="">
			<button type="submit" name="import">Import</button>
		</form>
		
		
		<form class="mb-3" action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel_file" accept=".xlsx, .xls">
			<input type="submit" name="submit" value="Update" class="btn btn-primary">
		</form>
		
			<?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = $fileName."-".date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excel_reader2.php';
			require 'SpreadsheetReader.php';
                mysqli_query($conn, "delete from setup_rooms_under_building");
			$reader = new SpreadsheetReader($targetDirectory);
			$i=1;
			foreach($reader as $key => $row){
			    if($i!=1)
			    {
			        
				$floor_no = $row[0];
				$room_no = $row[1];
			    $bed_no=$row[2];
				$fee = $row[4];
				
				$no_of_persons_sharing_per_room = $row[3];

			//	$manager_email = $row[6];
				$active = $row[7];
				mysqli_query($conn, "INSERT INTO setup_rooms_under_building VALUES('', '$floor_no', '$room_no','$bed_no', '$no_of_persons_sharing_per_room','$fee','$building_name','$manager_email','$active')");
// 			    $sql_setup_room=mysqli_query($conn, "INSERT INTO setup_rooms_under_building VALUES('', '$floor_no', '$room_no','$bed_no', '$no_of_persons_sharing_per_room','$fee','$building_name','$manager_email','$active')");
				
				mysqli_query($conn, "INSERT INTO `adding-bed-details1`(`id`, `building_name`, `manager_email`, `manager_mobile`, `tenant_name`, `tenant_email`, `tenant_mobile`, `joining_date`, `floor_no`, `room_no`, `no_of_persons_sharing_per_room`, `bed_no`, `amount`, `paid_amount`, `due`, `Available`)
        values ('', '$building_name', '$manager_email', '$manager_mobile', '','', '','', '$floor_no', '$room_no', '$no_of_persons_sharing_per_room', '$bed_no', '$fee', '', '', 'Yes')");

// values ('', '$building_name', '$manager_email', '$manager_mobile', '$tenant_name',$tenant_email','$joining_date' , '$tenant_mobile', '$floor_no', '$room_no', '$no_of_persons_sharing_per_room', '$bed_no', '$amount', '$paid_amount', '$due', '$Available')");
				
				// $sql_adding_bed_details =  "INSERT INTO `adding-bed-details1`(`id`, `building_name`, `manager_email`, `manager_mobile`, `tenant_name`, `tenant_email`, `tenant_mobile`, `joining_date`, `floor_no`, `room_no`, `no_of_persons_sharing_per_room`, `bed_no`, `amount`, `paid_amount`, `due`, `Available`)
    //     values ('','$pg_manager_email','$pg_manager_mobile_no','$tenant_email','$tenant_mobile_no','$floor_no','$room_no','$no_of_persons_sharing_per_room','$bed_no','$amount','$paid_amount','$due','$Available')";
            

// if ($conn->query($sql_setup_room) === TRUE && $conn->query($sql_adding_bed_details) === TRUE) 
// {
	
// }
			        
			    }
			    	$i++;
			    }

			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
		}
		
	
		
		
		if (isset($_POST["submit"])) {
			$fileName = $_FILES["excel_file"]["name"];
			$fileExtension = explode('.', $fileName);
			$fileExtension = strtolower(end($fileExtension));
			$newFileName = $fileName . "-" . date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel_file']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excel_reader2.php';
			require 'SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach ($reader as $key => $row) {
				$id = $row[0];
					$floor_no = $row[1];
				$room_no = $row[2];
				$no_of_persons_sharing_per_room = $row[3];
				$fee = $row[4];
				$bed_no=$row[5];
			

			//	$manager_email = $row[6];
				$active = $row[6];
				$sql=mysqli_query($conn, "UPDATE `setup_rooms_under_building` SET `floor_no`='$floor_no',`room_no`='$room_no',`bed_no`='$bed_no',`no_of_persons_sharing_per_room`='$no_of_persons_sharing_per_room',`fee`='$fee',`active`='$active'  WHERE id=$id");
				echo '<script>alert("' . $sql .'");</script>';
			}
                }
                ?>
                
                <table class="table table-striped">
			<tr>
				<td>#</td>
				<td>Floor No</td>
				<td>Room No</td>
                <td>Bed No</td> 
				<td>No.of.persons sharing per room</td>
				
				<td>Fee</td>
				
				<td>Active</td>
				<td>Action</td>
			</tr>
			<?php


			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM setup_rooms_under_building");
				while ($row = mysqli_fetch_assoc($rows)) {
  // Code to process each row
                
			?>
			
			<tr>
				<td> <?php echo $i++; ?> </td>
				
				<td> <?php echo $row["floor_no"]; ?> </td>
				<td> <?php echo $row["room_no"]; ?> </td>
				<td> <?php echo $row["bed_no"]; ?> </td> 
				<td> <?php echo $row["no_of_persons_sharing_per_room"]; ?> </td>
				
				<td> <?php echo $row["fee"]; ?> </td> 
			
				<td> <?php echo $row["active"]; ?> </td>
				<td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id']; ?>">Delete</button>

                            </td>
				
				
			</tr>
			
			 <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel<?php echo $row['id']; ?>">Edit Record</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="floor_no">floor_no</label>
                                                <input type="text" class="form-control" id="floor_no" name="floor_no" value="<?php echo $row['floor_no']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="room_no">room_no</label>
                                                <input type="text" class="form-control" id="room_no" name="room_no" value="<?php echo $row['room_no']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="bed_no">bed_no</label>
                                                <input type="text" class="form-control" id="bed_no" name="bed_no" value="<?php echo $row['bed_no']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_of_persons_sharing_per_room">sharing_per_room</label>
                                                <input type="text" class="form-control" id="no_of_persons_sharing_per_room" name="no_of_persons_sharing_per_room" value="<?php echo $row['no_of_persons_sharing_per_room']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fee">fee</label>
                                                <input type="text" class="form-control" id="fee" name="fee" value="<?php echo $row['fee']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="active">active</label>
                                                <input type="text" class="form-control" id="active" name="active" value="<?php echo $row['active']; ?>">
                                            </div>
                                           
                                            
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                          <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>">Delete Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <p>Are you sure you want to delete this record?</p>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                    <?php } ?>
		</table>
	


        <script type="text/javascript" src="./assets/js/script.js"></script>
                  
<?php
if(isset($_POST['update'])) {
    $id = $_POST['id'];
  	$floor_no = $_POST['floor_no'];
				$room_no = $_POST['room_no'];
				$no_of_persons_sharing_per_room = $_POST['no_of_persons_sharing_per_room'];
				$fee = $_POST['fee'];
				$bed_no=$_POST['bed_no'];
			

			//	$manager_email = $_POST[6];
				$active = $_POST['active'];

    $sql = "UPDATE `setup_rooms_under_building` SET `floor_no`='$floor_no',`room_no`='$room_no',`bed_no`='$bed_no',`no_of_persons_sharing_per_room`='$no_of_persons_sharing_per_room',`fee`='$fee',`active`='$active'  WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    //  $sql1 = "UPDATE `adding-bed-details1` SET `floor_no`='$floor_no',`room_no`='$room_no',`bed_no`='$bed_no',`no_of_persons_sharing_per_room`='$no_of_persons_sharing_per_room',`amount`='$fee'  WHERE id=$id";
    // $result1 = mysqli_query($conn, $sql1);
    
    
    // echo '<script>alert("' . $sql .  $result.'");</script>';

    if($result) {
        echo "
        <script>
            alert('Record updated successfully');
            document.location.href = '';
        </script>
        ";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


// Check if the delete button was clicked
if(isset($_POST["delete"])) {
    $id1 = $_POST["id"];
    
    // Query to select the row with the specified ID
    $select_query = "SELECT * FROM setup_rooms_under_building WHERE id = $id1";

    // Execute the query and retrieve the result
    $result = mysqli_query($conn, $select_query);

    // Check if any rows were returned
    if(mysqli_num_rows($result) > 0) {
        // Retrieve the row data and display it
        $row = mysqli_fetch_assoc($result);
        $floor_no = $row["floor_no"];
        $room_no = $row["room_no"];
        $bed_no = $row["bed_no"];
        $fee = $row["fee"];

        // Query to select the row with the specified values
        $select_query = "SELECT * FROM `adding-bed-details1` WHERE `floor_no` = '$floor_no' AND `room_no` = '$room_no' AND `bed_no` = '$bed_no' AND `amount` = '$fee'";

        // Execute the query and retrieve the result
        $result = mysqli_query($conn, $select_query);

        // Check if any rows were returned
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if($row["Available"] == "Yes") {
                // Available is Yes, so delete the row
                mysqli_query($conn, "DELETE FROM setup_rooms_under_building WHERE id=$id1");
                mysqli_query($conn, "DELETE FROM `adding-bed-details1` WHERE `floor_no` = '$floor_no' AND `room_no` = '$room_no' AND `bed_no` = '$bed_no'");
                echo "
                <script>
                    alert('Record deleted successfully');
                    document.location.href = '';
                </script>
                ";
            } else {
                // Available is No, so display alert message
                $tenant_name = $row["tenant_name"];
                $tenant_mobile = $row["tenant_mobile"];
                echo "<script>alert('Bed is allocated to $tenant_name with mobile number $tenant_mobile and cannot be deleted.');</script>";
            }
        } else {
            // No rows were returned, display error message
            echo "<script>alert('No rows found.');</script>";
        }
    } else {
        // No rows were returned, display error message
        echo "<script>alert('No rows found.');</script>";
    }
}
?> 

<script>
    function showDeleteModal(id) {
        document.getElementById('delete-id').value = id;
        var myModal = new bootstrap.Modal(document.getElementById('delete-modal'), {
            keyboard: false
        });
        myModal.show();
    }
</script> 
        
      </div>
    </body>

</html>