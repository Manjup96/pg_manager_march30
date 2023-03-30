
<html>
<head>
<!-- <body class="h-0" onload=start()> -->
<!-- <body class="h-0" > -->
  <link rel="stylesheet" href="./assets/css/tenant_table.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/respo.css">
  </link>
  <!--<script type="text/javascript" src="./assets/js/tenant/delete.js"></script>-->
  <script type="text/javascript" src="./assets/js/tenant/filtertable.js"></script>
  <!-- <script type="text/javascript" src="./assets/js/tenant/getall.js"></script> -->
  <script type="text/javascript" src="./assets/js/tenant/getsingle.js"></script>
  <!--<script type="text/javascript" src="./assets/js/tenant/edit_form.js"></script>-->
  <!--<script type="text/javascript" src="./assets/js/tenant/updatedate.js"></script>-->

  
        <!-- disable previous dates in Input date type -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 
  <script type="text/javascript" src="./assets/js/tenant/validations.js"></script>
  <!-- open nav and close nav realated js is script.js -->
  <script type="text/javascript" src="./assets/js/script.js"></script>

 
</head>

<body class="smokewhite_bg_color">

<?php
      $page = 'tenant_table';
       include "./adminHeader.php";
       include "./sidebar.php";
       include "./commonlinks.php";
       ?>
 
 <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
 </script>

 </div>
 
  <!-- Edit Form starts  -->
  <div id="show_edit_form">
    <div class="container h-80 ">
    <div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
					

   
        <div id="close_icon_desktop_view" >
          <a href="tenant_table.php"> <div style="padding-left:500px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
          </div>
          <div class="close_icon_mobile_view">
          <a href="tenant_table.php"> <div style="padding-left:200px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
          </div>
          <form id="tenant">
            <input type="hidden" id="id_value">
            <h1>
              <center>
                <div class="p-3 mb-2 bg- text-black">
                  <p class="two smokewhite_bg_color">Tenant Edit Form</p>
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
                name="tenantJoiningDate" readonly onclick="change_JoiningDate();">
            </div>
 
            <div class="form-group">
                      <label for="tenantComments">Comments</label>
                      <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38" style="height:150px" onkeyup="validateComments()">
                    </textarea>
                    <div  id="comments_error" style="display:none" > Please Enter your Comments (max 30 characters)</div>
                  </div>
                      </br>
            <center>
              <button type="submit" id="save_tenant" class="btn btn-dark btn-customized pt-0">Save</button>
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
            <div style="margin-left:0px;width:1400px">
              <center>
                <div class="p-3 mb-2 bg text-black"  >Tenant Details</div>
              </center>

              <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">

                <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
                <button type="submit"><i class="fa fa-search" style="color:white"></i></button>
                <a href="tenant.php" class="btn btn-dark pull-right" style="margin:10px" ;>
                <i  class="fa fa-plus"></i>&nbsp;Add Tenant</a>

               <!-- <button type="submit" class="btn btn-success " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button> -->
                    <button type="submit" class="btn btn-dark " style="margin:10px"; 
                    onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>    
              </div>
               
               
                      
            <!-- Tenatn details header Ends -->
            </br>
  

    <div style="margin-left:0px" id="show_table">
        <table id="tenants"  ></table>
          </div>
    <div style="margin-left:10px" id="show_table" >
              <table id="tenants_print" border="1"></table>
             </div>
                  
             </div>
                </div>
                    </div>
                        </div>
                          </div>
                            </div>  
  <script>         
    document.getElementById("show_edit_form").style.display="none";
    document.getElementById("show_table").style.display="block";    
    </script>   
         
             
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
                              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>  
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

<!-- on date change -->
<script>
function change_JoiningDate() {
  document.getElementById("tenantJoiningDate").readOnly = false;
}
</script>

<!-- form validation -->
<script> 
//save_edit_tenant
document.getElementById("save_tenant").disabled = true;
var mobile_check=0,name_check=0,email_check=0,adhar_check=0;


function initial_check()
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
     var adhar = document.getElementById("tenantAdharCardNumber").value;
    console.log("AdharCardNumber=",adhar);

    var adharRegEX =/^([0-9]{4}[0-9]{4}[0-9]{4}$)|([0-9]{4}\s[0-9]{4}\s[0-9]{4}$)|([0-9]{4}-[0-9]{4}-[0-9]{4}$)/;

    if(adharRegEX.test(adhar))
    {
    document.getElementById("adhar_error").style.display = "none";
    adhar_check=1;

    } else
    { document.getElementById("adhar_error").style.display = "block";  
    adhar_check=0;
        
    } 


     
  if(email_check==1 &&  mobile_check==1 && name_check==1)
  { document.getElementById("save_tenant").disabled = false;
  }
  else{
  document.getElementById("save_tenant").disabled = true;
  }
}

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
      mobile_check=0;
         
     } 
     
   
//   if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 )
//   { document.getElementById("save_tenant").disabled = false;
//   }
//   else{
//   document.getElementById("save_tenant").disabled = true;
//   }
initial_check();
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

  initial_check();
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

//   if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1)
//     { document.getElementById("save_tenant").disabled = false;
//     }
//     else{
//     document.getElementById("save_tenant").disabled = true;

//     }
initial_check();
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
    adhar_check=0;
        
    } 
   
//   if(email_check==1 &&  mobile_check==1 && name_check==1 && adhar_check==1 )
//     { document.getElementById("save_tenant").disabled = false;
//     }
//     else{
//     document.getElementById("save_tenant").disabled = true;
//     }
initial_check();
}

function validateComments(){
    var comments = document.getElementById("tenantComments").value;
    if(comments.length<30){
     document.getElementById("comments_error").style.display="none";
    }
    else{
    document.getElementById("comments_error").style.display="block";
    }
}




      
            
    document.getElementById("show_edit_form").style.display="none";
    document.getElementById("show_table").style.display="block";
    
   
    const url ="https://iqbetspro.com/pg-management/GET-Tenant-details-with-building-and-manager-email-API.php";
    async function getapi(url) {
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   //var buidling_name = document.getElementById("building").value;
  
  var buidling_name =  localStorage.getItem("selected_building1");
 

 
   console.log("buidling_name=",buidling_name);
        fetch(url, {
                  method: 'POST',
                  body: JSON.stringify({
   "manager_email":manager_mail,
   "building_name":buidling_name
}
           )
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
                console.log(data);
                show(data);
        })
    }
        
        getapi(url);
       
        function show(data) {
          var print_tab="";
           let tab =
           
                `<tbody id="table_border" style="text-align:center">
                <tr>
                <th>Id</th>
                
                <th>Name</th>
                
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Joining Date</th>
                
                <th>Action</th>
                </tr>`;
                
                
              print_tab=`<tr>
                <th>Id</th>
                
                <th>Name</th>
                
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Joining Date</th>
                </tr>`;
            
            let i = 1;
            
            // <th>Building Name</th>
            // <th>Adhaar Number </th>
            //<th>Comments</th>
            // <td>${r.building_name} </td>
            // <td>${r.tenant_aadhar_number}</td>
            //<td>${r.comments}</td>
            
            
            
            // Loop to access all rows
            
            if(data.length>0){
             for (let r of data) {
              print_tab += `<tr>
            <td>${i} </td>
            
            <td>${r.tenant_name}</td>
            
            <td>${r.tenant_mobile}</td>
            <td>${r.tenant_email}</td>
            <td>${r.joining_date}</td></tr>`;

            tab += `<tr>
            <td>${i} </td>
            
            <td>${r.tenant_name}</td>
            
            <td>${r.tenant_mobile}</td>
            <td>${r.tenant_email}</td>
            <td>${r.joining_date}</td>
            
            <td id="action_column">
                 <div style=" display: flex;justify-content: space-around;" >
         
               <Button style="margin-right:10px;border-color:white" onclick="edit_row(${r.id})">
               <i class="fa fa-edit btn-outline-primary"></i></Button>
                <Button style="margin-right:10px;border-color:white" onclick="delete_row(${r.id})">
                <i class="fa fa-trash btn-outline-danger"></i></Button>
               

           <button style="border-width:2px;border-color:black" data-toggle="modal" data-target="#view-modal" 
			      data-id="${r.id}" 
            id="getUser"><i class="fa fa-eye"></i></button>
            
             </div>
             </td>
             </tr>`;
             i=i+1;
             }
             tab=tab+` </tbody>`;
             document.getElementById("tenants").innerHTML = tab;
             document.getElementById("tenants_print").innerHTML = print_tab;
             }
               else{
                 tab=tab+`<tr>
        <td colspan="8">No Data Found</td>
      </tr> </tbody>`;
      document.getElementById("tenants").innerHTML = tab;
               }
        
              }
          
  



      </script>

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



      <!--<script type="text/javascript" src="./assets/js/tenant/update.js"></script>-->
      <!-- download pdf  -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
      <script type="text/javascript">
         document.getElementById('tenants_print').style.display="none";
          function Export() {
              document.getElementById('tenants_print').style.display="block";
              html2canvas(document.getElementById('tenants_print'), {
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
              setTimeout(function() { hide_table(); }, 1000);

              // document.getElementById('tenants_print').style.display="none";
          }

          function hide_table(){
            document.getElementById('tenants_print').style.display="none";
          }

        // after clicking delete button ,calling delete api 
//update-TENANT-manager-buidling-API.php
  
  
  
    var form=document.getElementById('tenant');

    form.addEventListener('submit', function(e){
     e.preventDefault()
    
     var id=  document.getElementById("id_value").value; 
        var mobile= document.getElementById("tenantMobileNumber").value;
         var name= document.getElementById("tenantName").value;
        var email= document.getElementById("tenantEmail").value;
        var AdharCardNumber = document.getElementById("tenantAdharCardNumber").value;
        var comments =  document.getElementById("tenantComments").value;
        var joining_date =  document.getElementById("tenantJoiningDate").value;
     console.log(id,mobile,name,email,joining_date);
         //alert("Clicked on Save button...");
    
         fetch('https://iqbetspro.com/pg-management/update-TENANT-manager-buidling-API.php', {
      method: 'POST',
      body: JSON.stringify(
        {
        "id":id,
     "tenant_name":name,
    "tenant_email":email,
    "tenant_mobile":mobile,
    "tenant_aadhar_number":AdharCardNumber, 
    "comments":comments,
    "joining_date":joining_date
    
    }
      ),
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
        window.location = "tenant.php";
        else
        {
            console.log("Updated Successfully...");
            alert("Tenant Details Updated Successfully...");
          window.location = "tenant_table.php";}
    
    }).catch(error => alert('Error:', error)); 
    });

    
    function edit_row(id){
        //alert(id);
                  fetch('https://iqbetspro.com/pg-management/single-TENANT-manager-building-GET-API.php', {
                  method: 'POST',
                  body: JSON.stringify({
            "id":id
           })
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
            console.log('Tenant row Data= ',data);
            
              document.getElementById("show_edit_form").style.display="block";
              document.getElementById("show_table").style.display="none";
        
             document.getElementById("id_value").value=data[0].id;
             document.getElementById("tenantMobileNumber").value=data[0].tenant_mobile;
              document.getElementById("tenantName").value =data[0].tenant_name;
             document.getElementById("tenantEmail").value = data[0].tenant_email;
             document.getElementById("tenantAdharCardNumber").value =  data[0].tenant_aadhar_number;
             document.getElementById("tenantJoiningDate").value =data[0].joining_date;
             document.getElementById("tenantComments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 //  getapi(url);
                }

  
      function delete_row(id){
        var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
                 
                 if(user_answer==true)
                  {
                    fetch('https://iqbetspro.com/pg-management/delete-TENANT-manager-buidling-API.php', {
                      method: 'POST',
                      body: JSON.stringify({
                      "id":id
                  })
                  })
                  .then(function(response){ 
                  return response.json()})
                  .then(function(data)
                  {console.log((data));
                    alert("Tenant Deleted Successfully...!");
                    getapi(url);
                     
                }).catch(error => alert('Error:', error)); 
             
                  }
               
      }



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

<script>
    // function selectedBuilding(){
    //     var selected_building= document.getElementById("building").value;;
    //     // alert(selected_building);
    //     console.log(selected_building);
    //     getapi(url);
    // }
</script>


    </body >

</html>

