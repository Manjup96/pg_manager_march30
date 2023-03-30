<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#ffffff;"> -->
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/respo.css"></link>

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

       <script type="text/javascript" src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/enquiryFormData.js"></script>
    <script type="text/javascript" src="./assets/js/enquiry.js"></script>


</head>

<body class="smokewhite_bg_color">

<?php 
             $page = 'enquiry_table';
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

		<div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var building_name =  localStorage.getItem("selected_building1");
     
 </script>

 </div>
 
    
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
					<!-- Form -->
          <div id="close_icon_desktop_view">
          <a href="enquiry_table.php"> <div style="padding-left:500px">
    <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1"></i></button></div></a>
    <!-- <button style="font-size:21px;padding-left:5px;padding-right:5px;"><i class="fa fa-close"></i></button></div></a>     -->
         </div>
          <div class="close_icon_mobile_view">
          <a href="enquiry_table.php"> <div style="padding-left:200px">
<button style="font-size:20px"><i class="fa fa-close pr-1 pl-1"></i></button></div></a>
          </div>
                    <?php if(!empty($msg)){echo $msg; }?></p>
                    
                    <form id="enquiry" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Enquiry Form</p></div></center></h1>
                		
                		
                		<!-- Input fields -->
                    <div class="form-group">
                			 <label for="enquiryUsername" class="required">Name:</label>
                			 <input type="text" class="form-control enquiryUsername" id="enquiryUsername" placeholder="" name="enquiryUsername" onkeyup="validateName()">
                       <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
                    </div>

                		<div class="form-group">
                			  <label for="enquiryMobileNumber" class="required">Mobile Number :</label>
                			  <input type="tel" class="form-control enquiryMobileNumber" id="enquiryMobileNumber" placeholder="" name="enquiryMobileNumber" onkeyup="validateMobileNumber()">
                		    <div id="mobile_error" style="display:none"> Please Enter a Valid Mobile number </div>
                    </div>

						        <div class="form-group">
							          <label for="enquiryEmail" class="required">Email :</label>
							          <input type="email" class="form-control enquiryEmail" id="enquiryEmail" placeholder="" name="enquiryEmail" onkeyup="validateEmail()">
                        <div id="email_error" style="display:none"> Please Enter a Valid email </div>
					          </div>
                    
                    <!-- <div class="form-group">
							       <label for="enquiryJoinDate">when you want to join :</label>
              

              <input type="date" class="form-control enquiryJoinDate" id="enquiryJoinDate" placeholder="" name="enquiryJoinDate">
				
                     </div> -->
                          <div class="form-group">
                            <label for="enquiryRemarks">Remarks</label>
                                  <textarea id="enquiryRemarks" name="enquiryRemarks" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"  onkeyup="validateRemarks()"></textarea>
                                  <div  id="remarks_error" style="display:none" > Please Enter your Remarks (max 50 characters)</div>
                                  </div>
                                </br>

                          <div class="form-group">
                            <label for="enquiryRefernce">Reference</label>
                                  <textarea id="enquiryReference" name="enquiryReference" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px" onkeyup="validateReference()"></textarea>
                                  <div  id="reference_error" style="display:none" > Please Enter your Reference (max 50 characters)</div>
                                  </div>
                                </br>

                          
						<center><button type="submit" id="save_enq" class="btn btn-dark btn-customized" style="width:100px;padding:0px;margin:10px">Save</button>
                             </center>
						
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>


<div class="form_group mt-5 text-center" hidden>
 
 The Selected buiding id : <b> <span id="building"></span></b>
 
 
 </div>
</body>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
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
     
      var managerEmail = document.getElementById("manager_email").value;
     
    // var buidling_name = document.getElementById("buidling").value;
    var building_name =  localStorage.getItem("selected_building1");
     console.log(building_name,managerEmail,enquiryUsername,enquiryMobileNumber,enquiryEmail,enquiryRemarks,enquiryReference);
  
    // var enquiryAction = document.getElementById("enquiryAction").value;
 fetch('https://iqbetspro.com/pg-management/Enquiry-Tenant-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
      
     // "building_name": buildingName,
      "building_name": building_name,
      "manager_email":managerEmail,
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
     alert("Enquiry Details Will Be Saved")
    if(data[0].Message.response =='error')
    window.location = "enquiry.php"
    else
    window.location = "enquiry_table.php"

}).catch(error => console.error('Error:', error)); 
});
</script>


<!-- form validation -->
<script>
document.getElementById("save_enq").disabled = true;
var mobile_check=0,name_check=0,email_check=0;

function validateMobileNumber(){
var mobile = document.getElementById("enquiryMobileNumber").value;
console.log("MobileNumber=",mobile);

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

if(mobileRegEX.test(mobile))
  {
    
    document.getElementById("mobile_error").style.display = "none";
    mobile_check=1;

  } else
   { document.getElementById("mobile_error").style.display = "block";  
   mobile_check=0;} 
   
if(email_check==1 &&  mobile_check==1 && name_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}

function validateName(){

var name = document.getElementById("enquiryUsername").value;
console.log("Name=",name);

var nameRegEx=  /^[a-zA-Z ]{2,30}$/;

if(nameRegEx.test(name))
{
// console.log("true");
document.getElementById("name_error").style.display="none";
name_check=1;
}
else
{document.getElementById("name_error").style.display="block"; 
name_check=0;
   
}
// console.log("Error");

if(email_check==1 &&  mobile_check==1 && name_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}


function validateEmail(){

var email = document.getElementById("enquiryEmail").value;
console.log("Email=",email);

var emailRegEx=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(emailRegEx.test(email))
{
// console.log("true");
document.getElementById("email_error").style.display="none";
email_check=1;
}
else
{document.getElementById("email_error").style.display="block"; 
email_check=0;
   
}
// console.log("Error");

if(email_check==1 &&  mobile_check==1 && name_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}

function validateRemarks(){
 var remarks = document.getElementById("enquiryRemarks").value;
 if(remarks.length<=50){
     document.getElementById("remarks_error").style.display="none";
 }
 else{
      document.getElementById("remarks_error").style.display="block";
 }
}

if(email_check==1 &&  mobile_check==1 && name_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;
}

function validateReference(){
 var reference = document.getElementById("enquiryReference").value;
 if(reference.length<=50){
     document.getElementById("reference_error").style.display="none";
 }
 else{
      document.getElementById("reference_error").style.display="block";
 }
}

if(email_check==1 &&  mobile_check==1 && name_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;
}
</script>







    </body>

</html>