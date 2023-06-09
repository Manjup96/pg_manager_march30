<html lang="en" class="h-90">
<head>

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
       <!--<script type="text/javascript" src="./assets/js/tenant/tenantFormValidation.js"></script> -->        
       <link rel="stylesheet" href="./assets/css/respo.css">

       <?php
       $page = 'tenant_table';
           include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

</head>

<body class="smokewhite_bg_color">

  <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 

 </div>
 
            <div class="container h-80 ">
              <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
					
                		
                	</form>
					<!-- Form start -->
      

          <div id="close_icon_desktop_view">
          <a href="tenant_table.php"> <div style="padding-left:500px">
    <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
    <!-- <button style="font-size:21px;padding-left:5px;padding-right:5px;"><i class="fa fa-close"></i></button></div></a>     -->
         </div>
          <div class="close_icon_mobile_view">
          <a href="tenant_table.php"> <div style="padding-left:200px">
<button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
          </div>
          		
          <form name="form" id="form" >

          
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Tenant Reg Form</p></div></center></h1>
                		
                		
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
							             <!--<input type="datetime-local" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder="" name="tenantJoiningDate"> -->
						
                    </div> 
                    <div class="form-group">
                			<label for="tenantAddress" class="required">Address:</label>
                			<input type="text" class="form-control tenantAddress" id="tenantAddress" placeholder="" name="tenantAddress" onkeyup="validateAddress()" >
                      <div id="address_error" style="display:none"> Please Enter Your address more than 5 characters </div>
                    </div>
                    <div class="form-group">
                			<label for="tenantPassword" class="required">Password:</label>
                			<input type="password" class="form-control tenantPassword" id="tenantPassword" placeholder="" name="tenantPassword" onkeyup="validatePassword()" >
                      <div id="password_error" style="display:none"> Please Enter Password more than 5 characters </div>
                    </div>
                    <div><label for="tenantComments">Comments</label>
                      <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38" style="height:150px">
                    </textarea>
                  </div>
                      <br>
						<center>
              <button type="submit" class="btn btn-dark btn-customized" id="save_tenant" style="width:100px;padding:0px;margin:10px" >Save</button>
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


<script>
  // selecting building script
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var building_name =  localStorage.getItem("selected_building1");
     
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
     var tenantAddress = document.getElementById("tenantAddress").value; 
     var tenantPassword = document.getElementById("tenantPassword").value; 
     var managerEmail = document.getElementById("manager_email").value;
     
     var managerMobile = document.getElementById("manager_mobile").value;
     //var building_name = document.getElementById("building").value;
     var building_name =  localStorage.getItem("selected_building1");
     console.log(building_name);
  
      console.log(building_name,managerMobile,managerEmail,tenantMobileNumber,tenantUsername,tenantEmail,tenantJoiningDate,tenantComments,tenantAdharCardNumber);
     
    //alert("Tenant Registered Succesfully");
 fetch('https://iqbetspro.com/pg-management/tenant_registration_POST_API_manager_mobile.php', {
  method: 'POST',
  body: JSON.stringify(
    {
     // "building_name": buildingName,
      "building_name": building_name,
      "manager_email":managerEmail,
    "manager_mobile_no":managerMobile,
 "tenant_name":tenantUsername,
 "tenant_email":tenantEmail,
 "tenant_mobile":tenantMobileNumber,
 "tenant_aadhar_number":tenantAdharCardNumber, 
 "tenant_address": tenantAddress, 
 "comments":tenantComments,
 "joining_date":tenantJoiningDate,
 "password":tenantPassword,

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
    // console.log(data[0].Message.response)
    //alert("ok");
    if(data[0].Message.response ==2)
    { 
      alert("Tenant Mobile number,Email and Aadhaar number  is Already Registered");
    window.location = "tenant.php";
  }
  else if(data[0].Message.response ==3)
    { 
      alert(" Both Tenant Mobile number and Email   is Already Registered");
    window.location = "tenant.php";
  }
  else if(data[0].Message.response ==4)
    { 
      alert(" Both  Tenant Mobile number and Aadhaar number  is Already Registered");
    window.location = "tenant.php";
  }
  else if(data[0].Message.response ==5)
    { 
      alert("Both Email and Aadhaar number  is Already Registered");
    window.location = "tenant.php";
  }
  

  else if(data[0].Message.response ==6)
    { 
      alert("Tenant Email is Already Registered");
    window.location = "tenant.php";
  }

  else if(data[0].Message.response ==7)
    { 
      alert("Tenant Mobile number is Already Registered");
    window.location = "tenant.php";
  }

  else if(data[0].Message.response ==8)
    { 
      alert(" Aadhaar number  is Already Registered");
    window.location = "tenant.php";
  }

  else
  if(data[0].Message.response =='error')
    { 
      alert("Error in Tenant Registration");
    window.location = "tenant.php";
  }
   else
    {
      alert("tenant registered Succes");
    window.location = "tenant_table.php";
  }

}).catch(error => console.error('Error:', error)); 
});


</script>



<!-- form validation -->
<script>
// const button = document.getElementById('save_tenant');  
// button.disabled = true;
// console.log(document.getElementById("save_tenant"));
// console.log(button);
document.getElementById("save_tenant").disabled = true;


//button.disabled=false;
//console.log(button);
var mobile_check=0,name_check=0,email_check=0,adhar_check=0,address_check=0,password_check=0;

function check()
{
    if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 && address_check==1 && password_check==1 )
    { 
       document.getElementById("save_tenant").disabled = false;
       //button.disabled=false;
       //console.log(button);
       
    }
    else
    {
    document.getElementById("save_tenant").disabled = true;
    
    
    }
}

function validateMobileNumber()
{
var mobile = document.getElementById("tenantMobileNumber").value;
console.log("MobileNumber=",mobile);

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

if(mobileRegEX.test(mobile))
  {
    
    document.getElementById("mobile_error").style.display = "none";
    mobile_check=1;

  }
  else
   { 
       document.getElementById("mobile_error").style.display = "block";  
   mobile_check=0;
       
   } 
   check();

}


function validateName()
{

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
check();
}


function validateEmail()
{
    
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
    {
        document.getElementById("email_error").style.display="block"; 
    email_check=0;
       
    }
    // console.log("Error");
    check();
}

function validateAdharCardNumber()
{
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
   
check();
}

function validateComments()
{
 var comments = document.getElementById("tenantComments").value;
 if(comments.length<=50)
 {
     document.getElementById("comments_error").style.display="none";
 }
 else{
      document.getElementById("comments_error").style.display="block";
 }
}
function validatePassword()
{
 var password = document.getElementById("tenantPassword").value;
 if(password.length>=5 && password.length<=50)
 {
     document.getElementById("password_error").style.display="none";
     password_check=1; 
 }
 else{
      document.getElementById("password_error").style.display="block";
      password_check=0;
 }
 check();
}


function validateAddress()
{
 var address = document.getElementById("tenantAddress").value;
 if(address.length>=5 && address.length<=50)
 {
     document.getElementById("address_error").style.display="none";
     address_check=1;
 }
 else{
      document.getElementById("address_error").style.display="block";
      address_check=0;
 }
 check();
}





// if(email_check==1 &&  mobile_check==1 && name_check==1)
// { document.getElementById("save_tenant").disabled = false;
// }
// else{
// document.getElementById("save_tenant").disabled = true;
// }

check();

</script>


    </body>
    



</html>