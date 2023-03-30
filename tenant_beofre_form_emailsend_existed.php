<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
<title>tenant form</title>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- disable previous dates in Input date type -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--<script type="text/javascript" src="./assets/js/tenant/tenantFormValidation.js"></script> -->        <?php
           
            
           
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
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #EC7063 ;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #EC7063 ;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
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


.required::after{
  content:" *";
  color: red;
  font-size:20px;
}
</style>



    <body class="h-100">
    <a href="tenant_table.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>    
    	<div class="container h-90">
        
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    
                	<!-- <form class="tenantAdharForm" action="tenant_table.php" method="post" >
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Adding Tenant Details</p></div></center></h1>
                	

                     <label for="password"> Adhar Card Number:</label>
                      <form class="example" action="/action_page.php" style="margin:auto;max-width:100px">
                     <input type="text" placeholder="Search.." name="search2">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form> -->
                		
                	</form>
					<!-- Form end -->

          <form name="form" id="form" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Tenant Reg Form</p></div></center></h1>
                		
                		
                		<!-- Input fields -->
                    <div class="form-group">
                			<label for="tenantName" class="required">Name:</label>
                			<input type="text" class="form-control tenantName" id="tenantName" placeholder="" name="tenantName" onkeyup="validateName()" >
                      <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
                    </div>
                    <div class="form-group">
                			<label for="tenantAdharCardNumber" class="required">Adhaar Card Number:</label>
                			<input type="text" class="form-control tenantAdharCardNumber" id="tenantAdharCardNumber" placeholder="" name="tenantAdharCardNumber" onkeyup="validateAdharCardNumber()" >
                      <div id="adhar_error" style="display:none"> Please Enter a Valid Adhar card number </div>
                    </div>

                		<div class="form-group">
                			<label for="tenantMobileNumber" class="required">Mobile Number :</label>
                			<input type="tel" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder="" name="tenantMobileNumber" onkeyup="validateMobileNumber()">
                      <div id="mobile_error" style="display:none"> Please Enter 10 digits number</div>
                    </div>

					          <div class="form-group">
							        <label for="tenantEmail" class="required">Email :</label>
							        <input type="email" class="form-control tenantEmail" id="tenantEmail" placeholder="" name="tenantEmail" onkeyup="validateEmail()">
                      <div id="email_error" style="display:none"> Please Enter correct email</div> 
                    </div>
                    
                   <div class="form-group">
							        <label for="tenantJoiningDate">Joining Date :</label>
							         <input type="date" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder="" name="tenantJoiningDate"> 
                     <!-- <input type="datetime-local" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder="" name="inputdate">  --> 
                 
                    </div> 
                    <div><label for="tenantComments">Comments</label>
                      <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38" style="height:150px">
                    </textarea>
                  </div>
                      </br>
						<center>
              <button type="submit" id="save_enq" class="btn btn-success btn-customized" >Save</button>
                             </center>
						
                	</form>
					
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./assets/js/script.js"></script>
        <!-- <script type="text/javascript" src="./assets/js/tenantFormValidation.js"></script> -->
        <script type="text/javascript" src="./assets/js/tenantRegistration.js"></script>
        <script>
           document.getElementById("tenantJoiningDate").valueAsDate = new Date();

          </script>

   <!--disable previous dates in Input date type -->

   <script type="text/javascript">
     $(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
   // alert(maxDate);
    $('#tenantJoiningDate').attr('min', maxDate);
});
   </script> 



<script>

 var form=document.getElementById('form');

form.addEventListener('submit', function(e){
 e.preventDefault()
 var tenantUsername = document.getElementById("tenantName").value; 
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value;
     var tenantAdharCardNumber = document.getElementById("tenantAdharCardNumber").value;
    
     console.log(tenantMobileNumber,tenantUsername,tenantEmail,tenantJoiningDate,tenantComments,tenantAdharCardNumber);
    //alert("Tenant Registered Succesfully");
 fetch('https://iqbetspro.com/pg-management/tenant-registration-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {
 "tenant_name":tenantUsername,
 "tenant_email":tenantEmail,
 "tenant_mobile":tenantMobileNumber,
 "tenant_aadhar_number":tenantAdharCardNumber, 
 "tenant_address": "dkjf", 
 "comments":tenantComments,
 "joining_date":tenantJoiningDate,
 "password":"123"

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
    //console.log(data[0].Message.response)
    //alert("ok");
    if(data[0].Message.response =='error')
    { alert("tenant registered failed")
    window.location = "tenant.php";}
    else
    {
      alert("tenant registered Succes");
    window.location = "tenant_table.php";}

}).catch(error => console.error('Error:', error)); 
});
</script>


<!-- form validation -->
<script>
document.getElementById("save_enq").disabled = true;
var mobile_check=0,name_check=0,email_check=0,adhar_check=0;

function validateMobileNumber(){
var mobile = document.getElementById("tenantMobileNumber").value;
console.log("MobileNumber=",mobile);

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

if(mobileRegEX.test(mobile))
  {
    
    document.getElementById("mobile_error").style.display = "none";
    mobile_check=1;

  } else
   { document.getElementById("mobile_error").style.display = "block";  
   mobile_check=0;} 
   
if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 )
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}

function validateName(){

var name = document.getElementById("tenantName").value;
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

if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}


function validateEmail(){

var email = document.getElementById("tenantEmail").value;
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

if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1)
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}

function validateAdharCardNumber(){
var adhar = document.getElementById("tenantAdharCardNumber").value;
console.log("AdharCardNumber=",adhar);

var adharRegEX =/^([0-9]{4}[0-9]{4}[0-9]{4}$)|([0-9]{4}\s[0-9]{4}\s[0-9]{4}$)|([0-9]{4}-[0-9]{4}-[0-9]{4}$)/;

if(adharRegEX.test(adhar))
  {
    
    document.getElementById("adhar_error").style.display = "none";
    adhar_check=1;

  } else
   { document.getElementById("adhar_error").style.display = "block";  
  adhar_check=0;} 
   
if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 )
{ document.getElementById("save_enq").disabled = false;
}
else{
document.getElementById("save_enq").disabled = true;

}
}



</script>


    </body>

</html>