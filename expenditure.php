<?php

//  $floor_no = $_GET['floor_no'];
//  $room_no  = $_GET['room_no'];
//  $bed_no = $_GET['bed_no'];
//  $amount= $_GET['amount'];
// echo $floor_no;

// echo $floor_no;
// echo $room_no;


?>
<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#D6DBDF;"> -->
  <title>Admin</title>
  <!-- Required meta tags -->
  
  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- to serach tenant with name -->
  <!-- <script type="text/javascript" src="./assets/js/tenant-bed-assigned-search-details.js"></script> -->
  

        <title>Collecting Fee</title>

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
       <link rel="stylesheet" href="./assets/css/respo.css"></link>


      

</head>

<body class="smokewhite_bg_color">
<?php         
             $page = 'account';
            include "./adminHeader.php";
            include "./sidebar.php";
            include "./commonlinks.php";
            include_once "./config/dbconnect.php";
        ?>

   
   <script type="text/javascript" src="./assets/js/script.js"></script>

     <div class="container h-90">
     <div class="row h-90 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6" style="border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">


<div id="close_icon_desktop_view" >
          <a href="expenditure-table.php"> <div style="padding-left:500px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1"></i></button></div></a>
          </div>
          <div class="close_icon_mobile_view">
          <a href="expenditure-table.php"> <div style="padding-left:200px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1"></i></button></div></a>
          </div>
         <!-- Form -->
                   
                 <form id="form" class="form-example" action="account_table.php" method="post">
                    <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two smokewhite_bg_color">Add Expenditure Details</p></div></center></h1>
                   
                   <!-- Input fields -->
                       <!-- <div class="form-group">
                     <label for="username">Expenditure Types:</label>
                     <input type="text" class="form-control username" id="username" placeholder="" name="username">
                   </div> -->
                   <div class="form-group">
							<label for="Expenditure Type">Expenditure Type</label>
							<input type="text" class="form-control expenditure_type" id="expenditure_type"  value="" name="expenditure_type">
						</div>
                   <div class="form-group">
                			<label for="date">Date :</label>
                			<input type="date" onload="getDate()"class="form-control date" id="date" placeholder="" name="date">
                		</div>
                       
           <div class="form-group">
             <label for="Amount">Amount :</label>
             <input type="number" class="form-control number" id="amount" placeholder="" name="amount">
         
                   </div>
                         <!-- <div><label for="subject">Your Message</label>
       <textarea id="Your Message" name="subject" placeholder=""rows="3" cols="40" style="height:150px"></textarea></div>
</br> --> <br/>
           <center><button type="submit" class="btn btn-dark btn-customized" style="width:100px;padding:0px;margin:10px">Save</button>
                            </center>
           
                   <!-- End input fields -->
                   
                 </form>
         <!-- Form end -->
               </div>
           </div>
       </div>
   
       <script type="text/javascript" src="./assets/js/script.js"></script>
       <script>
          document.getElementById("date").valueAsDate = new Date();

         </script>

   </body>

<script>

  
 var form=document.getElementById('form');

form.addEventListener('submit', function(e){
 e.preventDefault()
 //alert("inside add accounts");
   //  var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     //var tenantEmail = document.getElementById("tenantEmail").value; 
     var date =  document.getElementById("date").value; 
     var expenditure_type =  document.getElementById("expenditure_type").value; 
     //var month =  document.getElementById("month").value; 
     //var year =  document.getElementById("year").value; 
     var amount = document.getElementById("amount").value; 
     //var payAmount = document.getElementById("pay_amount").value; 
     alert("Expenditure Registered Succesfully");
     console.log('before API..');
 fetch('https://iqbetspro.com/pg-management/Accounts-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
 
    "date":date,     
                 //"tenant_email":tenantEmail,
            "tenant_mobile":"",          
            "type":expenditure_type,
            //"month":month,            
            //"year":year, 
            "income_amount":null,
           // "paid_amount":payAmount,
           "expenditure_amount":amount,      
      "balance":null,
      "comments":""   


  }),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(typeof(data[0].Message));
    console.log(data[0].Message.response);
     //alert("ok")
    if(data[0].Message.response =='error')
    window.location = "expenditure.php"
    else
    window.location = "account_table.php"

}).catch(error => console.error('Error:', error)); 
});
</script>

     <!-- console.log(tenantMobileNumber,tenantUsername,tenantEmail,tenantJoiningDate,tenantComments,tenantAdharCardNumber); -->
 


    </body>

</html>
