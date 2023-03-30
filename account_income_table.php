
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>

  <title>Income</title>
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
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	     $(document).ready(function() {
  $("#popup").hide();
  $("#popupButton").click(function() {
				$("#popup").show();
			});
});
	</script>
	<style>
	    #popup {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
			text-align: center;
			padding-top: 10%;
		}
		#popupContent {
			background-color: white;
			padding: 20px;
			border-radius: 5px;
			display: inline-block;
		}
	</style>
     </head> 
<body class="smokewhite_bg_color">

<?php
     include "./adminHeader.php";
     include "./sidebar.php";
     include "./commonlinks.php";
     ?>
       <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var building_name =  localStorage.getItem("selected_building1");
 </script>

 </div>
 


<div id="show_edit_form">
<div class="container h-80 ">
<div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
  <!-- <form id="enquiry_edit"> -->
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Income form</p></div></center></h1>
  <div class="form-group">
                			<label for="date"> Date :</label>
                			<input type="date" onload="getDate()"class="form-control date" id="date" placeholder="" name="date">
                		</div>
                        <div class="form-group">
							<label for="floor number">Income Type</label>
							<input type="text" class="form-control type" id="type" disabled value="Monthly Rent" name="income_type">
						</div>
                        <div class="form-group">
							<label for="room number">Month</label>
							<input type="text" class="form-control room number" id="month"  name="month">
						</div>
                              <div class="form-group">
							<label for="bednumber">Year</label>
							<input type="text" class="form-control " id="year"  name="year">
						</div>
                        <div class="form-group">
                			<label for="amount">Amount:</label>
                			<input type="" class="form-control amount" id="amount"  name="totalAmount">
                		</div>
                        <div class="form-group">
                			<label for="pay_amount">Paid Amount:</label>
                			<input type="" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div>
                        
						<center>
              <button type="submit" class="btn btn-dark btn-customized">Save

              </button>
                             </center>
						

           </form>

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
                    <center><div class="p-3 mb-2 bg text-black">Monthly wise Income Details</div></center>
                    



                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search"
                      id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search" style="color:white"></i></button>
                        <a href="account_new.php" class="btn btn-dark pull-right" 
                        style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Income</a>
                        <button type="submit" class="btn btn-dark " style="margin:10px"; 
                        onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

                    </div>
                  
</br> 


<div style="margin-left:0px" id="show_table">
                    <table id="account_income" border="1"></table>
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
    
    
    
    
    
    

<!-- Monthy Expenditure reports in table format start -->
 <div id="popup">
    <div id="popupContent">
      <h2>JSON Data</h2>
      <table id="dataTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Type</th>
            <th>Income Amount</th>
				<th>Tenant Mobile</th>
				<th>Month</th>
				
				
				<th>Year</th>
				
				
            
          </tr>
        </thead>
        <tbody></tbody>
      </table>
      <button id="closePopupButton">Close</button>
    </div>
  </div>

   <script>
   
    document.querySelector("#closePopupButton").addEventListener("click", function() {
      document.querySelector("#popup").style.display = "none";
    });
  </script>
<!-- Monthy Expenditure reports in table format ENd -->

  <!-- view modal -->
    <div class="modal fade" id="view-income-monthly-report-modal" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--data-toggle="modal" data-target="#view-income-monthly-report-modal"-->
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
			    <th>ID</th>
			 <td> <input  id="id" disabled></td>
			</tr>
			
			<tr>
			    <th>Date</th>
			     <td> <input  id="date" disabled></td>
				
			</tr>
			<tr>
				<th>type</th>
				<td> <input  id="type" disabled></td>
				
			</tr>
			
			<tr>
				<th>Income Amount</th>
				<td> <input  id="income_amount" disabled></td>
				
			</tr>
			<tr>
				<th>Month</th>
				
				<td> <input  id="month" disabled></td>
			</tr>
			<tr>
				<th>Year</th>
				
				<td> <input  id="year" disabled></td>
			</tr>
			<tr>
				<th>Tenant Mobile</th>
				
				<td> <input  id="tenant_mobile" disabled></td>
			</tr>
			
            
			
    
        
    </tbody>
  </table>
   
                </div>
                <div class="modal-footer">
                <!-- <button type="button" class="btn btn-dark" onclick="viewDetails()">view</button> -->
               <!-- <button type="button" class="btn btn-dark" onclick="updateDetails()">update</button> -->  
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>   
                
                <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>




    

      
             
           <script>
                     
                      


    const url ="https://iqbetspro.com/pg-management/monthly-wise-total-income-report-GET-API.php";
     async function getapi(url) {
         console.log('inside function..');

             let result = await fetch(url);
         
             let response = await result.json();
             console.log('data',response);
             show(response);
             //document.getElementById("demo").innerHTML = response;

         }
         
         getapi(url);

         function show(data) {
             let tab =
                 `
                 <tbody id="table_border" style="text-align:center">
                 <tr>
                 <th>S.No</th>
                 <th>Month</th>
                 <th>Year</th>
                 <th>Total income</th>
                 <th>Action</th>
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               //console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
             
             <td><p id="month1">${r.Month} </p></td>
             <td><p id="year1">${r.Year}</p></td>
             <td>${r.Income}</td>	
             <td> <div style=" display: flex;justify-content: space-around;">
          
              <button style="border-width:5px;border-color:white"   onclick="viewDetails('${r.Month+-+r.Year}')"><i class="glyphicon glyphicon-eye-open"></i> View</button>
                        </div>        
                </div>
            </td>
                 </tr>`;
             i=i+1;
             }   
             tab=tab+` </tbody>`;
             document.getElementById("account_income").innerHTML = tab;
             }
            
</script>


	
<script>
//function viewDetails(month,year)
function viewDetails(month)
{
    // $('#hiddendata').val(id);
    //var uid = $(this).data('id'); 
    console.log(" before sending data to API, id value=",month);
   
   
    //var month=month;
    var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   //var building_name = document.getElementById("building").value;
  
  var building_name =  localStorage.getItem("selected_building1");
    console.log("building_name=",building_name); 
    
    var concatenatedString = `${month}-${building_name}-${manager_mail}`;

console.log(" before sending data to API, string value is=",concatenatedString);


var url = 'https://iqbetspro.com/pg-management/GET-API-Monthly-Income-Reports-View.php';
 //var data = { id: id };


	
		$.ajax({
			url: url,
			type: 'POST',
			
		//	data:{ data:concatenatedString},
// 			dataType: 'html',

  dataType: 'json',
  data: JSON.stringify({ data: concatenatedString }),
  contentType: 'application/json; charset=utf-8',
  success: function(response) {
   
        // Handle the response (e.g. update the UI with the data)
       console.log("response=",response);
       
       var data = response;
          var tableBody = document.querySelector("#dataTable tbody");
          tableBody.innerHTML = "";
          for (var i = 0; i < data.length; i++) {
            var row = tableBody.insertRow(-1);
            var idCell = row.insertCell(0);
            var dateCell = row.insertCell(1);
            var typeCell = row.insertCell(2);
            var incomeCell = row.insertCell(3);
            var tenantMobileCell = row.insertCell(4);
            var monthCell = row.insertCell(5);
            var yearCell = row.insertCell(6);
            
            
            idCell.innerHTML = data[i].id;
            typeCell.innerHTML = data[i].type;
            incomeCell.innerHTML = data[i].income_amount;
            dateCell.innerHTML = data[i].date; 
           monthCell.innerHTML = data[i].month;
           yearCell.innerHTML = data[i].year;
           
            tenantMobileCell.innerHTML = data[i].tenant_mobile;
          }
          
          console.log("before pop up show");
        //   document.querySelector("#popup").style.display = "block";
          $("#popup").show();
   


    },


  error: function(xhr, status, error) {
        // Handle errors (e.g. display an error message)
        console.log(xhr.responseText);
    }
});
}


</script>

  </body>
  </html>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
  

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  
  