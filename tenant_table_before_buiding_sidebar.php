<?php
       include "./adminHeader.php";
       include "./sidebar.php";
       include "./commonlinks.php";
       ?>
<style>
     .required::after{
  content:" *";
  color: red;
  font-size:20px;
}
</style>
<!-- <body class="h-0" onload=start()> -->
<body class="h-0" >
  <link rel="stylesheet" href="./assets/css/tenant_table.css">
  </link>
  <script type="text/javascript" src="./assets/js/tenant/delete.js"></script>
  <script type="text/javascript" src="./assets/js/tenant/filtertable.js"></script>
  <!-- <script type="text/javascript" src="./assets/js/tenant/getall.js"></script> -->
  <script type="text/javascript" src="./assets/js/tenant/getsingle.js"></script>
  <!--<script type="text/javascript" src="./assets/js/tenant/update.js"></script>-->
  <!--<script type="text/javascript" src="./assets/js/tenant/updatedate.js"></script>-->

  
        <!-- disable previous dates in Input date type -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 
  <script type="text/javascript" src="./assets/js/tenant/validations.js"></script>
  <!-- open nav and close nav realated js is script.js -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <!-- Edit Form starts  -->
  <div id="show_edit_form">
    <div class="container h-80 ">
      <div class="row h-90 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-widtd: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
          <form id="tenant">
            <input type="hidden" id="id_value">
            <h1>
              <center>
                <div class="p-3 mb-2 bg- text-black">
                  <p class="two">Tenant Edit Form</p>
                </div>
              </center>
            </h1>

            <!-- Input fields -->
            <div class="form-group">
              <label for="tenantName" class="required">Name:</label>
              <input type="text" class="form-control tenantName" id="tenantName" placeholder="" name="tenantName"
                onkeyup="validateName()">
              <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
            </div>
            <div class="form-group">
              <label for="tenantAdharCardNumber" class="required">Adhaar Card Number:</label>
              <input type="text" class="form-control tenantAdharCardNumber" id="tenantAdharCardNumber" placeholder=""
                name="tenantAdharCardNumber" onkeyup="validateAdharCardNumber()">
              <div id="adhar_error" style="display:none"> Please Enter a Valid Adhar card number </div>
            </div>
            <div class="form-group">
              <label for="tenantMobileNumber" class="required">Mobile Number :</label>
              <input type="tel" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder=""
                name="tenantMobileNumber" onkeyup="validateMobileNumber()">
              <div id="mobile_error" style="display:none"> Please Enter 10 digits number</div>
            </div>
            <div class="form-group">
              <label for="tenantEmail" class="required">Email :</label>
              <input type="email" class="form-control tenantEmail" id="tenantEmail" placeholder="" name="tenantEmail"
                onkeyup="validateEmail()">
              <div id="email_error" style="display:none"> Please Enter correct email</div>
            </div>

            <div class="form-group">
              <label for="tenantJoiningDate">Joining Date :</label>
              <input type="date" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder=""
                name="tenantJoiningDate">
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
              <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38"
                style="height:150px"></textarea>
            </div>
            </br>
            <center>
              <button type="submit" id="update_tenant" class="btn btn-success btn-customized">Save</button>
            </center>

          </form>
        </div>
      </div>
    </div>
    </div>
  <!-- Edit form ends  -->

  <!-- Tenatn details header starts -->
  <div class="wrapper" style="margin-right:700px" id="show_table">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lead">
          <div class="mt-2 mb-6 clearfix">
            <div style="margin-left:50px;width:1020px">
              <center>
                <div class="p-3 mb-2 bg-dark text-white">Tenant Details</div>
              </center>

              <div class="search-container">
                <input type="text" placeholder="Search with Name" name="search" id="searchInput"
                  onkeyup="searchTable()">
                <button type="submit"><i class="fa fa-search"></i></button>
                <a href="tenant.php" class="btn btn-success pull-right" style="margin:10px" ;>
                <i  class="fa fa-plus"></i>&nbsp;Add Tenant</a>
                   
               <!-- <button type="submit" class="btn btn-success " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button> -->
                    <button type="submit" class="btn btn-success " style="margin:10px"; 
                    onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>    
              </div>
            </div>

            <!-- Tenatn details header Ends -->
            </br>
  

      <div style="margin-left:50px" id="show_table">
              <table id="tenants" border="1"></table>
</div>

      
  <!-- tde Modal -->
  <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">
                            	<i class="glyphicon glyphicon-user"></i> User Profile
                            </h4> 
                       </div> 
                       <div class="modal-body"> 
                       
                       	                           
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>                             
                        </div> 
                        <div class="modal-footer"> 
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                        </div> 
                        
                 </div> 
              </div>
       </div>
       <!-- /.modal  End -->    
    
          

             

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



document.getElementById("update_tenant").disabled = true;
var mobile_check=0,name_check=0,email_check=0,adhar_check=0,address_check=0,password_check=0;

function check()
{
    if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 && address_check==1 && password_check==1 )
    { 
        document.getElementById("update_tenant").disabled = false;
    }
    else
    {
    document.getElementById("update_tenant").disabled = true;
    
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

  } else
   { document.getElementById("mobile_error").style.display = "block";  
   mobile_check=0;
       
   } 
   check();

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
   
check();
}

function validateComments()
{
 var comments = document.getElementById("tenantComments").value;
 if(comments.length<=50){
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
 if(address.length>=5 && address.length<=50){
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
// { document.getElementById("update_tenant").disabled = false;
// }
// else{
// document.getElementById("update_tenant").disabled = true;
// }

check();
</script>

      <script>
            
    document.getElementById("show_edit_form").style.display="none";
    document.getElementById("show_table").style.display="block";
    
    
    const url ="https://iqbetspro.com/pg-management/GET-Tenant-Details-API.php";
    async function getapi(url) {
       // console.log('inside function..');
    
            let result = await fetch(url);
        
            let response = await result.json();
            console.log('data',response);
            show(response);
            //document.getElementById("demo").innerHTML = response;
    
        }
        
        getapi(url);
    
        function show(data) {
            let tab =
                `<tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adhaar Number</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th >Joining Date</th>
                <th>Comments</th>
                <th>Action</th>
                </tr>`;
            let i = 1;
            
            // Loop to access all rows
            for (let r of data) {
                tab += `<tr>
            <td>${i} </td>
            <td>${r.tenant_name}</td>
            <td>${r.tenant_aadhar_number}</td>
            <td>${r.tenant_mobile}</td>
            <td>${r.tenant_email}</td>
            <td width="200%">${r.joining_date}</td>
            <td>${r.comments}</td>
            <td>
                 <div style=" display: flex;justify-content: space-around;">
         
               <Button style="margin-right:10px;border-color:white" onclick="edit_row(${r.id})">
               <i class="fa fa-edit btn-outline-primary"></i></Button>
                <Button style="margin-right:10px;border-color:white" onclick="delete_row(${r.id})">
            <i class="fa fa-trash btn-outline-danger"></i></Button>
    
                  

        <button data-toggle="modal" data-target="#view-modal" 
			data-id="${r.id}" 
            id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i> View</button>
            </div>
                
            </td>`
    
              
            tab += 
            `</tr>`;
            i=i+1;
           }
    
          
          
    
            // Setting innerHTML as tab variable
            document.getElementById("tenants").innerHTML = tab;
            }
  



      </script>
<script type="text/javascript" src="./assets/js/tenant/update.js"></script>
<script>
function searchTable() {
   
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tenants");
  tr = table.getElementsByTagName("tr");

console.log(filter)

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    console.log(td)
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


      
      <!-- download pdf  -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
      <script type="text/javascript">
          function Export() {
              html2canvas(document.getElementById('tenants'), {
                 onrendered: function (canvas) {
                     var data = canvas.toDataURL();
                     var docDefinition = {
                         content: [{
                             image: data,
                             width: 500
                         }]
                     };
                     pdfMake.createPdf(docDefinition).download("tenants_details.pdf");
                 }
              });
          }

        // after clicking delete button ,calling delete api 

  

    </script>
           
<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>

    </body >

</html>