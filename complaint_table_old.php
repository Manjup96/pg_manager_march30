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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

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
            
          
        ?>


</head>
<style>
/* p.two {
  border-style: solid;
  border-width: 5px;
  border-radius:10px;
}

h1 {
  color: dark;
} */
/* .wrapper{
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 100px;
        }  */
    .btn {
  background-color: dark;
  border: none;
  color: white;
  padding: 13px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
/* .btn:hover {
  background-color: #DC7633;
}  */

/* .form-group div
    {
      color: red;
      size: 80%
    }
    .hidden
    {
      display:none;
    }
    textarea{
    width:100%;
    padding:15px;
    margin-top:5px;
    border:1px solid #7ac9b7;
    border-radius:5px;
    margin-bottom:10px;
    resize:none;
    font-size:16px;
  } */

</style>
		<script type="text/javascript" src="./assets/js/script.js"></script>
    <body class="h-0">
        
 <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
 </script>
 </div>
    
<?php

// echo "Hello " . $_SESSION["username"] . ".<br>";
?>

         
    
   <div class="wrapper" style="margin-right:700px" >
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px;width:1320px">
                    <center><div class="p-3 mb-2 bg-dark text-white">complaints details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"></i></button>
                        <!--<a href="complaints.php" class="btn btn-success pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add complaints</a> -->
                        <button type="submit" class="btn btn-success " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

</div>
</div>
 </div>
      </div>
    </div>
    </div>
    </div>
</br> 


  
          
<!-- Response form for companits -->
 <div  id="show_response_form">
  <div class="form_group mt-5 text-center" >
    <div class="container h-80 ">
      <div class="row h-90 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
         <form id="response_form">
            <input type="text" id="id_value">
            <h1>
              <center>
                <div class="p-2 mb-2 bg- text-black">
                  <p class="two">Response To Complaint Form</p>
                </div>
              </center>
            </h1>

            <!-- Input fields -->
            <div class="form-group">
              <label for="response" class="required">Response:</label>
              <input type="text" class="form-control response" id="response" placeholder="" name="response" onkeyup="validateResponse()">
              <div id="response_error" style="display:none"> Please Enter your Response in  between 10 chaartcers  to 30 chaartcers </div>
            </div>
            
            <center>
              <button type="submit" id="save_response" class="btn btn-dark btn-customized">Save</button>
            </center>

          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
  <!-- Edit form ends  -->
<script>

document.getElementById("save_response").disabled = true;
var response_check=0;


function check()
{
  if(response_check==1 )
  { 
      document.getElementById("save_response").disabled = false;
  }
  else
  {
  document.getElementById("save_response").disabled = true;
  }
}

function validateResponse(){
    var response1 = document.getElementById("response").value;
    console.log("response1=",response1);
    if((response1.length>=10 )&& (response1.length<=30))
    {
     document.getElementById("response_error").style.display="none";
     response_check=1;
        }
    else{
    document.getElementById("response_error").style.display="block";
     response_check=0;
    }
    check();
}


</script> 


<div style="margin-left:50px" id="show_table">
                    <table id="complaint" border="1"></table>
</div>



<!--<div  id="show_response_form">-->
<!--    <h1>In Form </h1>-->
<!--</div>-->
  

  
  


    <!-- view modal -->
    <div class="modal fade" id="view-Complaint-modal" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--data-toggle="modal" data-target="#view-Complaint-modal"-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
    
    
    <tbody>
          <tr>
        <th>Tenant Name</th>
         <td> <input  id="tenant_name" disabled></td>
      </tr>
      <tr>
        <th>Tenant Mobile</th>
         <td> <input  id="tenant_mobile" disabled></td>
      </tr>
      <tr>
        <th width="30%">Complaint Type</th>
                   <td width="200px"><input type="text"  id="complaint_type"  disabled></td>
      </tr>
    
        
        <tr>
        <th width="30%">Complaint Description</th>
         <td width="40%"> <input  id="complaint_description" disabled></td>
      </tr>
      <tr>
        <th>Floor No</th>
         <td> <input  id="floor_no" disabled></td>
      </tr>
      <tr>
        <th>Room No</th>
         <td> <input  id="room_no" disabled></td>
      </tr>
       <tr>
        <th>Bed No</th>
         <td> <input  id="bed_no" disabled></td>
      </tr>
     
       <tr>
        <th>Response</th>
         <td> <input  id="response" disabled></td>
      </tr>
       <tr>
        <th>Created Date</th>
         <td> <input  id="created_date" disabled></td>
      </tr>
     
      <!-- <tr>-->
      <!--  <th>Resolve Date</th>-->
      <!--   <td> <input  id="resolve_date" disabled></td>-->
      <!--</tr>-->
       <tr>
        <th>Comments</th>
         <td> <input  id="comments" disabled></td>
      </tr>
    </tbody>
  </table>
   
                    <!--<div class="form-group">-->
                    <!--    <label for="tenant_name">Tenant Name</label>-->
                    <!--    <input type="text" class="form-control" id="tenant_name"  placeholder="Enter your name">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="response">Response</label>-->
                    <!--    <input  id="response"  >-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="complaint_type">complaint_type</label>-->
                    <!--    <input type="text" class="form-control" id="complaint_type"  placeholder="Enter your email">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="complaint_description">complaint_description</label>-->
                    <!--    <input type="text" class="form-control" id="complaint_description"  placeholder="Enter your mobile">-->
                    <!--</div>-->
                    <!--id tenant_name`, `tenant_email`, `tenant_mobile`, `floor_no`, `room_no`, `bed_no`, `complaint_type`, `complaint_description`, `response`, `created_date`, `resolve_date`, `comments-->
                    
                    <!--<div class="form-group">-->
                    <!--    <label for="floor_no">Floor No</label>-->
                    <!--    <input type="text" class="form-control" id="floor_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="room_no">Room no</label>-->
                    <!--    <input type="text" class="form-control" id="room_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="bed_no">Bed No</label>-->
                    <!--    <input type="text" class="form-control" id="bed_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                </div>
                <div class="modal-footer">
                <!-- <button type="button" class="btn btn-dark" onclick="viewDetails()">view</button> -->
               <!-- <button type="button" class="btn btn-dark" onclick="updateDetails()">update</button> -->  
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>   
                
                <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>



<script>
 $(document).ready(function(){
   document.getElementById("show_response_form").style.display="none";
         document.getElementById("show_table").style.display="block";
 });

       
       
  //  const url ="https://iqbetspro.com/pg-management/Complaints-GET-API.php";
    
   
    const url ="https://iqbetspro.com/pg-management/GET-complaints-from-tennat-to-manager-API.php";
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
             let tab =
                 `<tr>
                 <th>Id</th>
                 <th>Tenant Name </th>
                 
                 <th>Complaint Type</th>
                 <th>Complaint Description</th>
                 <th>Created Date</th>
                 <th>Resolve Date</th>
                 
                 <th>Response</th>
                <th>Action</th>
                 
                 
                 
                 </tr>`;
                 
             let i=1;
             // Loop to access all rows
             for (let r of data) {
              // console.log(typeof(r.Id));
              
            //<th>Tenant Number</th>   
            //<th>Comments</th>
            
            // <td>${r.comments}</td>
            //   <td >${r.tenant_mobile}</td>
            //  <button style="border-width:5px;border-color:white">View</button>   
               
               
                 tab += `<tr>
             <td>${i} </td>
             <td >${r.tenant_name}</td>
            

             <td>${r.complaint_type}</td>
             <td>${r.complaint_description}</td>
             <td>${r.Date}</td>	
             <td>${r.resolve_date}</td>
            <td >${r.response}</td> 
            
             <td>

            <div style=" display: flex;justify-content: space-around;">
          
                  
                    <button style="border-width:5px;border-color:white" onclick="give_response(${r.id})">Response</button>   
                   
              <button class="btn btn-dark" data-toggle="modal" onclick="viewDetails(${r.id})">View</button>
             </div>
             </td>
             
             
             </tr>`;
             i=i+1;
             }  
            //   <td>`
            
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
            //  let today = new Date("2023-02-01");
            // let gb = new Intl.DateTimeFormat('en-GB').format(today);

             document.getElementById("complaint").innerHTML = tab;
             }

   </script>       
<script>


var form=document.getElementById('response_form');

    form.addEventListener('submit', function(e)
    {
     e.preventDefault()
    
     var response1=  document.getElementById("response").value; 
     var id1=  document.getElementById("id_value").value; 
    
    console.log("in send_response() funciton id1=",id1);
    fetch('https://iqbetspro.com/pg-management/send-RESPONSE-for-Complaint-by-Manager-to-Tenant.php', {
                  method: 'PUT',
                  body: JSON.stringify({
            "id":id1,
            "response":response1,
           }),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      }
      })
      .then(function(response){ 
      return response.json()})
      .then(function(data)
      {
          console.log(data);
           if(data[0].Message.response =='error')
             {
                 alert("Complaint RESPONSE NOT updated ");
             }
        else
        {
            console.log("Updated Successfully...");
            alert("RESPONDED for Tenant Compalint Successfully...");
          window.location = "complaint_table.php";
            
        }
    
    }).catch(error => alert('Error: from update api', error)); 
    });
    

    function give_response(id)
    {
        console.log("inside give reponse");
        // document.getElementById('show_response_form').hidden = false;
        document.getElementById("show_response_form").style.display="block";
        // document.getElementById("show_table").style.display=none;
         document.getElementById("show_table").style.visibility = "hidden";
       //document.getElementById("myP").style.visibility = "hidden";
       console.log("id=",id);
       var id1=id;
       document.getElementById("id_value").value=id;
    //   send_response(id1);
       console.log("id1=",id1);
       
    }
</script>

 
<script>

    // veiw details
function viewDetails(viewid){
    $('#hiddendata').val(viewid);
    console.log("viewid=",viewid);
//post query
$.post("GET-Complaints-view.php",{viewid:viewid},
function(data,status)
{
    console.log("data=",data);
const userid=JSON.parse(data);
//console.log(JSON.parse(data));
console.log(userid);
$('#tenant_name').val(userid.tenant_name);
$('#tenant_email').val(userid.tenant_email);
$('#tenant_mobile').val(userid.tenant_mobile);
$('#complaint_type').val(userid.complaint_type);
$('#complaint_description').val(userid.complaint_description);
$('#floor_no').val(userid.floor_no);
$('#room_no').val(userid.room_no);
$('#bed_no').val(userid.bed_no);
$('#response').val(userid.response);
$('#created_date').val(userid.created_date);
$('#resolve_date').val(userid.resolve_date);
$('#comments').val(userid.comments);
  


});

//$("#view-Complaint-modal").modal("show");
$('#view-Complaint-modal').modal('show'); 
//modal({ show: true });
//$('#view-Complaint-modal').modal({ show: true });

}

</script>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>