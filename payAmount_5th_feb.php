<?php

 $floor_no = $_GET['floor_no'];
 $room_no  = $_GET['room_no'];
 $bed_no = $_GET['bed_no'];
 $total_amount= $_GET['total_amount'];
// echo $floor_no;

// echo $floor_no;
// echo $room_no;


?>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- to serach tenant with name -->
  <script type="text/javascript" src="./assets/js/searchTenant.js"></script>
  

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
    <!-- <script type="text/javascript" src="./assets/js/roomFormData.js"></script> -->
    <a href="room_table.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                	<form name="room" id="form" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Book Rooms</p></div></center></h1>
                    <div class="form-group">
                    <label for="tenantMobileNumber">Tenant Mobile Number :</label>
							<input type="text" class="form-control tags" id="tags" placeholder="" name="tags">
						</div>
                		<!-- Input fields -->
                    <div id="tenantDetails" style="display:none">
                        <div class="form-group">
							<label for="tenantUserName">Tenant Name :</label>
							<input type="text" class="form-control tenantUserName" id="tenantUserName" placeholder="" name="tenantUserName">
						</div>
                        <div class="form-group">
                			<label for="tenantEmail">Tenant Email :</label>
                			<input type="text" class="form-control tenant mail" id="tenantEmail" placeholder="" name="tenantEmail">
                		</div>
                		<div class="form-group">
                			<label for="tenantMobileNumber">Tenant Mobile Number :</label>
                			<input type="text" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder="" name="tenantMobileNumber">
                		</div>
                    </div>      
                		<div class="form-group">
                			<label for="tenantJoiningDate">Joining Date :</label>
                			<input type="date" onload="getDate()"class="form-control tenantJoiningDate" id="tenantJoiningDate" placeholder="" name="tenantJoiningDate">
                		</div>
						<div class="form-group">
							<label for="floor number">Floor Number :</label>
							<input type="text" class="form-control floor_no" id="floor_no" disabled value="<?php echo $floor_no;?>" name="floor number">
						</div>
                        <div class="form-group">
							<label for="room number">Room Number:</label>
							<input type="text" class="form-control room number" id="room_no" disabled value="<?php echo $room_no;?>" name="room number">
						</div>
                              <div class="form-group">
							<label for="bednumber">Bed Number:</label>
							<input type="text" class="form-control bed number" id="bed_no" disabled value="<?php echo $bed_no;?>" name="bed number">
						</div>
                        <div class="form-group">
                			<label for="amount">Total Amount:</label>
                			<input type="" class="form-control amount" id="total_amount" disabled  value="<?php echo $total_amount;?>" name="totalAmount">
                		</div>
                        <div class="form-group">
                			<label for="amount">Paying Amount:</label>
                			<input type="" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div>
                          <div class="form-group">
							<label for="your message">Your Message:</label>
							<input type="text" class="form-control your message" id="tenantComments" placeholder="" name="your message">
						</div>
                      
						<center><button type="submit" onclick="bookRoom()" class="btn btn-success btn-customized">Save</button>
						</center>
                		<!-- End input fields -->
                		
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

        <script>
           document.getElementById("tenantJoiningDate").valueAsDate = new Date();

          </script>

    </body>

</html>
<!-- Floor No: <input type="text" name="name" value="" disabled> -->



<script>

  
 var form=document.getElementById('form')

form.addEventListener('submit', function(e)
{
 e.preventDefault()
 var tenantUsername = document.getElementById("tenantUserName").value;
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value; 
     var floor_no =  document.getElementById("floor_no").value; 
     var room_no =  document.getElementById("room_no").value; 
     var bed_no =  document.getElementById("bed_no").value; 
     var total_amount = document.getElementById("total_amount").value; 
     var payAmount = document.getElementById("pay_amount").value; 
 fetch('https://iqbetspro.com/pg-management/update-bed-deatils-while-assiging-bed-to-tenant.php', {
  method: 'POST',
  body: JSON.stringify({
    "pg_manager_email":"pgm1@gmail.com",
            "pg_manager_mobile_no":"9595959555",
            "tenant_email":tenantEmail,
            "tenant_mobile_no":tenantMobileNumber,
            "floor_no":floor_no,
            "room_no":room_no,
            "no_of_persons_sharing_per_room":"5", 
            "bed_no":bed_no, 
            "amount":total_amount,
            "paid_amount":payAmount,
            "due":total_amount-payAmount,
            "Available":"no" ,
            "joining_date" :""


  }),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(typeof(data[0].Message));
    console.log(data[0].Message.response)
     //alert("ok")
    if(data[0].Message.response =='error')
    window.location = "payAmount.php?floor_no=${r.floor_no}&room_no=${r.room_no}&bed_no=${r.bed_no}&total_amount=${r.amount}"
    else
    window.location = "room_table.php"

}).catch(error => console.error('Error:', error)); 
});
</script>

<script>
      const url_get_tenant_details="https://iqbetspro.com/pg-management/GET-Tenant-Details-API.php";
    async function getapi(url) {
        console.log('inside function..');

            let result = await fetch(url);
        
            let response = await result.json();
            console.log('response=',response);

            var newArray=[]
            for(let i=0;i<response.length;i++)
             { 
                //console.log(response[i].tenant_name);
                newArray.push(response[i].tenant_mobile);
               }
            console.log(newArray);
            $( "#tags" ).autocomplete({
                source: newArray,
                select: function( event, ui ) {
                  submit(ui.item.value);
                  console.log(ui.item.value);
                }
              });

              
        }
       async function submit(searchItem)
       {
                
        // let searchItem= document.getElementById("tags").value;
        let result = await fetch(url_get_tenant_details);
        
        let response = await result.json();
        
        var foundData=response.filter(obj=> obj.tenant_mobile == searchItem);
        document.getElementById("tenantDetails").style.display="block";

        document.getElementById("tenantEmail").value=foundData[0].tenant_email;
        document.getElementById("tenantUserName").value=foundData[0].tenant_name;
        document.getElementById("tenantMobileNumber").value=foundData[0].tenant_mobile;
          console.log('searchItem',foundData);
       }
        getapi(url_get_tenant_details);
  </script>