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
} .btn {
  background-color: DodgerBlue;
  border: none;
  color: black;
  padding: 10px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}

.form-group div
    {
      color: red;
      size: 80%
    }
    .hidden
    {
      display:none;
    }
</style>


<div class="wrapper" style="margin-left:50px">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                       <div style="margin-left:50px">
                          <center>
                                 <div class="p-3 mb-2 bg-dark text-white">Adhar API</div>
                          </center>
                          <br>
                       </div>  
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <center>
                <input type="button"  class="btn btn-success" onclick="creds()" id="btn" value="Verify Aadhar number" />
                  <div class="url1">
                     <p id="showUrl"></p>
                  </div>
            </center>
            <!-- <p id="showReqId"></p> -->
                    <input type="hidden" id="showReqId" >
                   <center><Button onclick="getAdhaarDetails()"class="btn btn-success" id="getEadhaar" class=pb>Click to get Adhaar details </Button>
                      <br>
                      <br>
                        <div id="tbl"  style="width:20%;display:none"   >
                            <div class="container h-90"  style="margin-right:200px">
                              <table id="employee_table" border="1"  style="width:300%" class="right" >
                                   <tr>
                                         <td>Adhaar card number</td>
                                         <td WIDTH=200><input type="text" id="adhar_card_number"></td>
                                   </tr>
                                   <tr>
                                         <td>Name </td>
                                         <td><p id="name"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Photo </td>
                                         <td><p id="photo"></p></td>
                                   </tr>
                                   <tr>
                                          <td>DOB </td>
                                          <td><p id="dob"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Gender </td>
                                         <td><p id="gender"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Address </td>
                                         <td><p id="address"></p></td>
                                   </tr>
                                   <tr>
                                         <td>City </td>
                                         <td><p id="city"></p></td>
                                   </tr>
                                   <tr>
                                         <td>District </td>
                                         <td><p id="district"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Pincode </td>
                                         <td><p id="pincode"></p></td>
                                   </tr>
                               </table> 
                               <Button onclick="save()"> Save </Button>      
                           </div>
                       </div>
		
    <body class="h-100">
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/enquiryFormData.js"></script>
    <script type="text/javascript" src="./assets/js/enquiry.js"></script>
 <a href="enquiry_table.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                    
                    <form id="enquiry" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Enquiry Form</p></div></center></h1>
                		
                		
                		<!-- Input fields -->
                    <div class="form-group">
                			 <label for="enquiryUsername">Name:</label>
                			 <input type="text" class="form-control enquiryUsername" id="enquiryUsername" placeholder="" name="enquiryUsername" onkeyup="validateName()">
                       <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
                    </div>

                		<div class="form-group">
                			  <label for="enquiryMobileNumber">Mobile Number :</label>
                			  <input type="tel" class="form-control enquiryMobileNumber" id="enquiryMobileNumber" placeholder="" name="enquiryMobileNumber" onkeyup="validateMobileNumber()">
                		    <div id="mobile_error" style="display:none"> Please Enter a Valid Mobile number </div>
                    </div>

						        <div class="form-group">
							          <label for="enquiryEmail">Email :</label>
							          <input type="email" class="form-control enquiryEmail" id="enquiryEmail" placeholder="" name="enquiryEmail" onkeyup="validateEmail()">
                        <div id="email_error" style="display:none"> Please Enter a Valid email </div>
					          </div>
                    
                    <!-- <div class="form-group">
							       <label for="enquiryJoinDate">when you want to join :</label>
              

              <input type="date" class="form-control enquiryJoinDate" id="enquiryJoinDate" placeholder="" name="enquiryJoinDate">
				
                     </div> -->
                          <div><label for="enquiryRemarks">Remarks</label>
                                  <textarea id="enquiryRemarks" name="enquiryRemarks" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"></textarea></div>
                               </br>

                          <div><label for="enquiryRefernce">Reference</label>
                                  <textarea id="enquiryReference" name="enquiryReference" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"></textarea></div>
                               </br>

                          
						<center><button type="submit" class="btn btn-success btn-customized">Save</button>
                             </center>
						
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>
<script>
  //document.getElementById("enquiryJoinDate").valueAsDate = new Date();

  </script>

<script>
 var form=document.getElementById('enquiry');

form.addEventListener('submit', function(e){
 e.preventDefault()
     var enquiryUsername = document.getElementById("enquiryUsername").value; 
     var enquiryMobileNumber = document.getElementById("enquiryMobileNumber").value; 
     var enquiryEmail = document.getElementById("enquiryEmail").value; 
     //var enquiryJoinDate = document.getElementById("enquiryJoinDate").value; 
     var enquiryRemarks = document.getElementById("enquiryRemarks").value;
     var enquiryReference = document.getElementById("enquiryReference").value;
    // var enquiryAction = document.getElementById("enquiryAction").value;
 fetch('https://iqbetspro.com/pg-management/Enquiry-Tenant-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
    "Name":enquiryUsername, 
    "Mobile_Number":enquiryMobileNumber, 
    "Email":enquiryEmail,
      "Remarks":enquiryRemarks,
      "Reference":enquiryReference,
      //"Action":enquiryAction 
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
    window.location = "enquiry.php"
    else
    window.location = "enquiry_table.php"

}).catch(error => console.error('Error:', error)); 
});
</script>



    </body>

</html>