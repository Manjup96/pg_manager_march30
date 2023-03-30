
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#D6DBDF;"> -->
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
       <link rel="stylesheet" href="./assets/css/respo.css"></link>


      


</head>

		
<body class="smokewhite_bg_color">
<?php
            
            $page = 'enquiry_table';
            include "./adminHeader.php";
            include "./sidebar.php";   
        ?>
    

<div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
 </script>

<div id="show_edit_form">
<div class="container h-80 ">
<div class="row h-90 justify-content-center align-items-center">
<div class="col-10 col-md-8 col-lg-6" style="border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">

<div id="close_icon_desktop_view" >
          <a href="enquiry_table.php"> <div style="padding-left:500px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
          </div>
          <div class="close_icon_mobile_view">
          <a href="enquiry_table.php"> <div style="padding-left:200px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 pb-1 pt-1"></i></button></div></a>
          </div>
  <form id="enquiry_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Enquiry Form</p></div></center></h1>
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
                    
                   
                          <div class="form-group" >
                          
                            <label for="enquiryRemarks">Remarks</label>
                                  <textarea id="enquiryRemarks" name="enquiryRemarks" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px" onkeyup="validateRemarks()"></textarea>
                                  <div  id="remarks_error" style="display:none" > Please Enter your Remarks (max 100 characters)</div>
                                  </div>
                                </br>

                          <div class="form-group">
                            <label for="enquiryRefernce">Reference</label>
                                  <textarea id="enquiryReference" name="enquiryReference" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px" onkeyup="validateReference()"></textarea>
                                  <div  id="reference_error" style="display:none" > Please Enter your Reference (max 100 characters)</div>
                                  </div>
                                </br>

                          
						<center><button type="submit"  id="save_enq" class="btn btn-dark btn-customized" style="width:100px;padding:0px;margin:10px">Save</button>
                             </center>
						

           </form>
           </div>
          </div>
        </div>
</div>



<script type="text/javascript" src="./assets/js/script.js"></script>
   <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:0px;width:1380px">
                    <center><div class="p-3 mb-2 bg text-black">Enquiry Details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit" ><i class="fa fa-search" style="color:white"; ></i></button>
                  <a href="enquiry.php" class="btn btn-dark pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Enquiry</a>
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

                    </div>
                 
                
             </br> 

     <div style="margin-left:10px;" id="show_table">
      <table id="enquiry" ></table>
  </div>

  <div style="margin-left:0px" id="show_table">
      <table id="enquiry_print" border="1"></table>
  </div> 
  </div>
                </div>
                    </div>
                        </div>
                          </div>
                            </div>  

                    <script>
                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      </script>
 <script>
  // form validation for update//

 
document.getElementById("save_enq").disabled = true;
var mobile_check=0,name_check=0,email_check=0;

function initial_check(){
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
  
    
    
    
  if(email_check==1 &&  mobile_check==1 && name_check==1)
  { document.getElementById("save_enq").disabled = false;
  }
  else{
  document.getElementById("save_enq").disabled = true;
  }
}
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
      
   initial_check();
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

  initial_check();
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

//   if(email_check==1)
//   // email_check==1 &&  mobile_check==1 && name_check==1
//   { document.getElementById("save_enq").disabled = false;
//   }
//   else{
//   document.getElementById("save_enq").disabled = true;

//   }
initial_check();
}

function validateRemarks(){
  var remarks = document.getElementById("enquiryRemarks").value;
  if(remarks.length<=50){
      document.getElementById("remarks_error").style.display="none";
  }
  else{
        document.getElementById("remarks_error").style.display="block";
  }
  initial_check();
}
function validateReference(){
  var reference = document.getElementById("enquiryReference").value;
  if(reference.length<=50){
      document.getElementById("reference_error").style.display="none";
  }
  else{
        document.getElementById("reference_error").style.display="block";
  }
  initial_check();
}


    
    const url ="https://iqbetspro.com/pg-management/Enquiry-Tenant-Details-GET.php";
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
          console.log(data.length);
          var print_tab="";
             let tab =
                 `<tbody id="table_border" style="text-align:center">
                 <tr>
                 <th>S.No</th>
                 <th>Date</th>
                 <th>Name</th>
                 <th>Mobile Number</th>
                 <th>Email</th>
                 <th>Remarks</th>
                 <th>References</th>
                 <th>Action</th>
                 </tr>`;
                 print_tab=`<tr>
                 <th>S.No</th>
                 <th>Date</th>
                 <th>Name</th>
                 <th>Mobile Number</th>
                 <th>Email</th>
                 <th>Remarks</th>
                 <th>References</th>
                 </tr>`;

             let i=1;
             // Loop to access all rows
             if(data.length>0){
              for (let r of data) {
                print_tab += `<tr>
              //  console.log(typeof(r.Name));
                
             <td>${i} </td>
             <td width="200%;">${r.enquiry_date}</td>
             <td>${r.Name}</td>
              <td>${r.Mobile_Number}</td>
             <td>${r.Email}</td>	
             <td>${r.Remarks}</td>
             <td>${r.Reference}</td></tr>`;
            

             tab += `<tr>
            <td>${i} </td>
            <td width="200%;">${r.enquiry_date}</td>
             <td>${r.Name}</td>
              <td>${r.Mobile_Number}</td>
             <td>${r.Email}</td>	
             <td>${r.Remarks}</td>
             <td>${r.Reference}</td>
            
            <td id="action_column">

             <div style=" display: flex;justify-content: space-around;">
          
              <Button style="border-color:white;margin-right:20px" id="edit_button1" onclick='edit_row(${r.Id})'>
            <i class="fa fa-edit btn-outline-primary" ></i>
            
            </Button>

              <Button style="border-color:white;margin-right:20px"  id="delete_button1" onclick="delete_row(${r.Id})" >
              <i class="fa fa-trash btn-outline-danger">
              </i></Button>

              
               
      
             </div>
             </td>
             </tr>`;
             i=i+1;
             }
             tab=tab+` </tbody>`;
             document.getElementById("enquiry").innerHTML = tab;
             document.getElementById("enquiry_print").innerHTML = print_tab;
             }
               else{
                tab=tab+`<tr>
        <td colspan="8">No Data Found</td>
      </tr>`;
      document.getElementById("enquiry").innerHTML = tab;
               }
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             
             }

// validateMobileNumber();
// validateName();
// validateEmail();
// validateRemarks();
// initial_check();
// validateReference();
 </script>           

        <script>
function searchTable() {
   
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("enquiry");
  tr = table.getElementsByTagName("tr");

console.log(filter)

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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
       document.getElementById('enquiry_print').style.display="none";
        function Export() {
          document.getElementById('enquiry_print').style.display="block";
            html2canvas(document.getElementById('enquiry_print'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("enquiry_details.pdf");
                }
            });
            setTimeout(function() { hide_table(); }, 1000);

        }
        function hide_table(){
            document.getElementById('enquiry_print').style.display="none";
          }
        // after clicking delete button ,calling delete api 



function delete_row(Id){
  var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
           
           if(user_answer==true)
            {
              fetch('https://iqbetspro.com/pg-management/delete-Tenant-Enquiry-API.php', {
                method: 'POST',
                body: JSON.stringify({
                "Id":Id
            })
            })
            .then(function(response){ 
            return response.json()})
            .then(function(data)
            {console.log((data));
              alert("Deleted Successfully...!");
              getapi(url);
          }).catch(error => alert('Error:', error)); 
       
            }
         
}
       
        // clicking edit icon
function edit_row(Id){
             //alert(Id)
          fetch('https://iqbetspro.com/pg-management/id-single-Tenant-Enquiry-Details-GET.php', {
          method: 'POST',
          body: JSON.stringify({
    "Id":Id
   })
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(data);
    //alert(data[0].Message.response)

          document.getElementById("show_edit_form").style.display="block";
           document.getElementById("show_table").style.display="none";
     document.getElementById("id_value").value=data[0].Id;
     document.getElementById("enquiryMobileNumber").value=data[0].Mobile_Number;
      document.getElementById("enquiryUsername").value = data[0].Name;
     document.getElementById("enquiryEmail").value =  data[0].Email;
     document.getElementById("enquiryRemarks").value =  data[0].Remarks;
     document.getElementById("enquiryReference").value =  data[0].Reference;

}).catch(error => alert('Error:', error)); 

    
         //  getapi(url);
        }
    </script>
    

    <script>
      var form=document.getElementById('enquiry_edit');

form.addEventListener('submit', function(e){
 e.preventDefault();
 var id=  document.getElementById("id_value").value; 
     var enquiryUsername = document.getElementById("enquiryUsername").value; 
     var enquiryMobileNumber = document.getElementById("enquiryMobileNumber").value; 
     var enquiryEmail = document.getElementById("enquiryEmail").value; 
     //var enquiryJoinDate = document.getElementById("enquiryJoinDate").value; 
     var enquiryRemarks = document.getElementById("enquiryRemarks").value;
     var enquiryReference = document.getElementById("enquiryReference").value;
     console.log(id,enquiryUsername,enquiryMobileNumber,enquiryEmail,enquiryRemarks,enquiryReference);
     // indian format code 
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();

// today = dd + '-' + mm + '-' + yyyy;
today =  yyyy +'-' + mm + '-' +dd;
//alert(today);
     //alert("Clicked on Save button...");
    // var enquiryAction = document.getElementById("enquiryAction").value;
  fetch('https://iqbetspro.com/pg-management/update-Tenant-Enquiry-API.php', {
  method: 'POST',
  body: JSON.stringify({
    "Id":id,
    "Name":enquiryUsername, 
    "Mobile_Number":enquiryMobileNumber, 
    "Email":enquiryEmail,
      "Remarks":enquiryRemarks,
      "Reference":enquiryReference,
      "enquiry_date":today,
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
    window.location = "enquiry.php";
    else
    {console.log("Updated Successfully...");
      window.location = "enquiry_table.php";}

}).catch(error => console.error('Error:', error)); 


})
 async function update_row(){
 //alert("Clicked on Save button...");
};
</script>


    </body>

</html>