
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>

  <title>Expenditure</title>
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
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icov/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>


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
    }
    #popupContent {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      max-width: 800px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
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
<div class="container h-80">
<div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
  <!-- <form id="enquiry_edit"> -->
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Expenditure form</p></div></center></h1>
  <div class="form-group">
                			<label for="date"> Date :</label>
                			<input type="date" onload="getDate()"class="form-control date" id="date" placeholder="" name="date">
                		</div>
                        <div class="form-group">
							<label for="floor number">Expenditure Type</label>
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
                        <!-- <div class="form-group">
                			<label for="pay_amount">Paid Amount:</label>
                			<input type="" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div> -->
                        
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
            <th>Expenditure Amount</th>
            <th>Comments</th>
            
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
    <div class="modal fade" id="view-Expenditure-modal" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--data-toggle="modal" data-target="#view-Expenditure-modal"-->
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
				<th>expenditure_amount</th>
				<td> <input  id="expenditure_amount" disabled></td>
				
			</tr>
			
			<tr>
				<th>Comments</th>
				
				<td><?php echo $row["comments"]; ?></td>
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




    

         
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- Expenditure details header starts -->
   <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px;width:730px">
                    <center><div class="p-3 mb-2 bg text-black">Expenditure Details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search"
                      id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search" style="color:white"></i></button>
                        <a href="expenditure.php" class="btn btn-dark pull-right" 
                        style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Expenditure</a>
                        <button type="submit" class="btn btn-dark " style="margin:10px"; 
                        onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

                    </div>
                    </div>
</br> 
<!-- </div>
          </div>
        </div>
      </div>
      </div> -->

<div style="margin-left:50px" id="show_table">
                    <table id="account_expenditure" border="1"></table>
</div>
  </body>
           <script>
            var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   //var building_name = document.getElementById("building").value;
  
  var building_name =  localStorage.getItem("selected_building1");
    console.log("building_name=",building_name); 

                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      


    const url ="https://iqbetspro.com/pg-management/monthly-wise-total-expenditure-report-GET-API.php";
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
                 `<tr>
                 <th>S.No</th>
                 <th>Month</th>
                 <th>Year</th>
                 <th>Total Expenditure</th>
                 <th>test</th>
                 <th>Action</th>
                 </tr>`;
             let i=1;
             var month_year='';
             // Loop to access all rows
             for (let r of data) {
              // console.log(typeof(r.Id));
              
              month_year = r.Month+'-'+r.Year;
            // let month_year1 = month_year.toString();
               console.log(month_year);
                 tab += `<tr>
             <td>${i} </td>
             
             <td>${r.Month}</td>
             <td>${r.Year}</td>
             <td>${r.Expenditure}</td>
             <td>${r.Month+-+r.Year}</td>
             <td> <div style=" display: flex;justify-content: space-around;">
          
           
             
            <button style="border-width:5px;border-color:white" id="open-modal" data-toggle="modal" onclick="viewDetails('${month_year}')"><i class="glyphicon glyphicon-eye-open"></i> View</button>
            
                        </div>        
           
           
            </div>
            </td>
                 </tr>`;
             i=i+1;
             }  
            //   <button style="border-width:2px;border-color:black" id="open-modal" data-toggle="modal" onclick="viewDetails(${r.Month}-${r.Year})"><i class="glyphicon glyphicon-eye-open"></i> View</button>
//             <button  style="border-width:5px;border-color:white" data-toggle="modal" data-target="#view-income-monthly-report-modal" 
// 			data-id="${r.Month}-${r.Year}" 
//             id="get_Month_Year"  "><i class="glyphicon glyphicon-eye-open"></i> View</button>
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("account_expenditure").innerHTML = tab;
             }

</script>


<script>



    // veiw details
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


var url = 'https://iqbetspro.com/pg-management/GET-API-Monthly-Expedniture-Reports.php';
 //var data = { id: id };


	
		$.ajax({
			url: url,
			type: 'POST',
			
			data:{ data:concatenatedString},
// 			dataType: 'html',
		

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
//             var dcv = row.insertCell(1);

// // ... code that updates the content of the cell ...

// var cellAsString = dcv.outerHTML;
// console.log("date ",cellAsString); // output: "<td>cell content goes here</td>"


// var formattedDate = cellAsString.replace(/(\d{4})-(\d{2})-(\d{2})/, '$3/$2/$1');
// console.log("Formatted date: " + formattedDate); // output: "26/03/2023"

//             //var dateCell = formattedDate;
            
            var typeCell = row.insertCell(2);
            var expenditureCell = row.insertCell(3);
            var commentsCell = row.insertCell(4);
            idCell.innerHTML = data[i].id;
            typeCell.innerHTML = data[i].type;
            expenditureCell.innerHTML = data[i].expenditure_amount;
            dateCell.innerHTML = data[i].date; 
           
            commentsCell.innerHTML = data[i].comments;
          }
          document.querySelector("#popup").style.display = "block";
   


// const dcv=(userid[0].date);

// const dateString = dcv;
// const dateParts = dateString.split("-");
// const formattedDate = `${dateParts[2]}/${dateParts[1]}/${dateParts[0]}`;
// console.log(userid[0].date + "converted into " +formattedDate); // Output: "14/03/2023"

// $("#date").val(formattedDate); 




// $('#comments').val(userid[0].comments);
  

// $('#view-Expenditure-modal').modal('show'); 

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