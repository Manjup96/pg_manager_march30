<?php
       include "./adminHeader.php";
       include "./sidebar.php";
       include "./commonlinks.php";
       ?>

<body class="h-0" onload=start()>

  <link rel="stylesheet" href="./assets/css/tenant_table.css">
  </link>
  <script type="text/javascript" src="./assets/js/tenant/delete.js"></script>
  <script type="text/javascript" src="./assets/js/tenant/filtertable.js"></script>
  <!-- <script type="text/javascript" src="./assets/js/tenant/getall.js"></script> -->
  <script type="text/javascript" src="./assets/js/tenant/getsingle.js"></script>
  <script type="text/javascript" src="./assets/js/tenant/edit_form.js"></script>
  <script type="text/javascript" src="./assets/js/tenant/updatedate.js"></script>

  
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
              <label for="tenantName">Name:</label>
              <input type="text" class="form-control tenantName" id="tenantName" placeholder="" name="tenantName"
                onkeyup="validateName()">
              <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
            </div>
            <div class="form-group">
              <label for="tenantAdharCardNumber">Adhaar Card Number:</label>
              <input type="text" class="form-control tenantAdharCardNumber" id="tenantAdharCardNumber" placeholder=""
                name="tenantAdharCardNumber">
              <div id="adhar_error" style="display:none"> Please Enter a Valid Adhar card number </div>
            </div>
            <div class="form-group">
              <label for="tenantMobileNumber">Mobile Number :</label>
              <input type="tel" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder=""
                name="tenantMobileNumber" onkeyup="validateMobileNumber()">
              <div id="mobile_error" style="display:none"> Please Enter 10 digits number</div>
            </div>
            <div class="form-group">
              <label for="tenantEmail">Email :</label>
              <input type="email" class="form-control tenantEmail" id="tenantEmail" placeholder="" name="tenantEmail"
                onkeyup="validateEmail()">
              <div id="email_error" style="display:none"> Please Enter correct email</div>
            </div>

            <div class="form-group">
              <label for="tenantJoiningDate">Joining Date :</label>
              <input type="date" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder=""
                name="tenantJoiningDate">
                
            </div>
            <div><label for="tenantComments">Comments</label>
              <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38"
                style="height:150px"></textarea>
            </div>
            </br>
            <center>
              <button type="submit" class="btn btn-success btn-customized">Save</button>
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
            <div style="margin-left:50px;widtd:900px">
              <center>
                <div class="p-3 mb-2 bg-dark text-white">Tenant Details</div>
              </center>

              <div class="search-container">
                <input type="text" placeholder="Search witd Name" name="search" id="searchInput"
                  onkeyup="searchTable()">
                <button type="submit"><i class="fa fa-search"></i></button>
                <a href="tenant.php" class="btn btn-success pull-right" style="margin:10px" ;><i
                    class="fa fa-plus"></i>&nbsp;Add Tenant</a>
                <button type="submit" class="btn btn-success " style="margin:10px" ; onclick="Export()"><i
                    class="fa fa-download"></i>&nbsp; Download</button>
              </div>
            </div>

            <!-- Tenatn details header Ends -->
            </br>


            <div style="margin-left:50px" id="show_table">
              <table id="tenants" border="1"></table>
              
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
    
            </div>
          </div>
        </div>
      </div>

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
                <th>Joining Date</th>
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
            <td>${r.joining_date}</td>
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
    
          
        //    <Button style="margin-right:10px"  data-toggle="modal"  data-target="#myModal">
        //     <i class="fa fa-eye btn-outline-success"></i> </Button>
    
            // Setting innerHTML as tab variable
            document.getElementById("tenants").innerHTML = tab;
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


      <script type="text/javascript" src="./assets/js/tenant/update.js"></script>
      <!-- download pdf  -->
      <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
      <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
      <script type="text/javascript">
        function Export() {
          html2canvas(document.getElementById('tenants'), {
            onrendered: function (canvas) {
              var data = canvas.toDataURL();
              var docDefinition = {
                content: [{
                  image: data,
                  widtd: 500
                }]
              };
              pdfMake.createPdf(docDefinition).download("tenantDetails.pdf");
            }
          });
        }

        // after clicking delete button ,calling delete api 

   


</div >
    </div >

    
    
    </body >

</html>