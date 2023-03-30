<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>

        <!-- CSS -->
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
           
            include_once "./config/dbconnect.php";
        ?>


</head>
<style>
p.two {
  border-style: solid;
  border-width: medium;
  border-radius:20px;
}

h1 {
  color: #B9770E;
}
.btn {
  background-color: #117A65;
  border: none;
  color: black;
  padding: 10px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}
</style>
		
    <body class="h-100">
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/roomFormData.js"></script>
    <a href="room_table.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-80 " style="margin-right:900px" >
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Fo rm -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                	<!-- <form name="room" class="form-example" action="" method="post" onsubmit="return collectroomFormData()"> -->
					<form id="form">
                    <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Adding Bed Details</p></div></center></h1>
                		
                		<!-- Input fields -->
                        <!--<div class="form-group">
							<label for="roomBuildingNumber">Building Number :</label>
							<input type="number" class="form-control roomBuildingNumber" id="roomBuildingNumber" placeholder="" name="roomBuildingNumber">
						</div>!-->
                        <div class="form-group">
                			<label for="roomFloorNumber">Floor Number :</label>
                			<input type="text" class="form-control roomFloorNumber" id="roomFloorNumber" placeholder="" name="roomFloorNumber">
                		</div>
                		<div class="form-group">
                			<label for="roomRoomNumber">Room Number :</label>
                			<input type="text" class="form-control roomRoomNumber" id="roomRoomNumber" placeholder="" name="roomRoomNumber">
                		</div>
						<div class="form-group">
							<label for="roomBedNumber">Bed Number :</label>
							<input type="text" class="form-control roomBedNumber" id="roomBedNumber" placeholder="" name="roomBedNumber">
						</div>
                        <div class="form-group">
							<label for="roomRoomSharing">Room Sharing :</label>
							<input type="text" class="form-control roomRoomSharing" id="roomRoomSharing" placeholder="" name="roomRoomSharing">
						</div>
                        <div class="form-group">
                			<label for="roomPrice">Price:</label>
                			<input type="" class="form-control roomPrice" id="roomPrice" placeholder="" name="roomPrice">
                		</div>
                      
						<center><button type="submit" class="btn btn-success btn-customized">Save</button>
						</center>
                		<!-- End input fields -->
                		
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>



       <script>
 var form=document.getElementById('form');

form.addEventListener('submit', function(e){
 e.preventDefault()
 var roomFloorNumber = document.getElementById("roomFloorNumber").value; 
     var roomRoomNumber = document.getElementById("roomRoomNumber").value; 
     var roomBedNumber = document.getElementById("roomBedNumber").value; 
     //var roomTenantName = document.getElementById("roomTenantName").value; 
     var roomPrice = document.getElementById("roomPrice").value;
     var roomRoomSharing = document.getElementById("roomRoomSharing").value;
     
    
     console.log(roomFloorNumber,roomRoomNumber,roomBedNumber,roomPrice,roomRoomSharing);
     //alert("OK");
 fetch('https://iqbetspro.com/pg-management/adding-bed-deatils1.php', {
  method: 'POST',
  body: JSON.stringify(
    {
    
        "pg_manager_email":"newly@gmail.com",
            "pg_manager_mobile_no":"9595959555",
            "tenant_email":"0",
            "tenant_mobile_no":"0",
            "floor_no":roomFloorNumber,
            "room_no":roomRoomNumber,
            "no_of_persons_sharing_per_room":roomRoomSharing, 
            "bed_no":roomBedNumber, 
            "amount":roomPrice,
            "paid_amount":"0",
            "due":"0",
            "Available":"Yes"    
 

}

  ),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {
    console.log(typeof(data[0].Message));
    console.log(data[0].Message.response)
     //alert("ok");
    if(data[0].Message.response =='error')
    window.location = "room.php"
    else
    window.location = "room_table.php"

}).catch(error =>alert('Error:', error)); 
});
</script>



    </body>

</html>