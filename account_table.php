<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
<title>Accounts form</title>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

</head>


    <body class="h-100">
   
    
<div id="show_edit_form">
<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
  <form id="account_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" >
    <p class="two">Update Account Details</p></div></center></h1>
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
           </div>
          </div>
        </div>
</div>



    	<div class="container h-90" style="margin-right:500px">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    
                	
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Add Account Details</p></div></center></h1>
                		

                    <center>
                        <a href="account_income_table.php"  class="btn"><i class="fa fa-money"></i> Income</a>
                    <a href="expenditure-table.php"  class="btn"><i class="fa fa-bars"></i> Expenditure</a>
                    <a href="dues.php" class="btn"><i class="fa fa-tags"></i> Dues</center></a>

                	
					<!-- Form end -->
                </div>
            </div>
        
        
        <!-- <h1><center><div class="p-3 mb-2 bg- text-black" >Details</div></center></h1>
       
        <div style="margin-left:50px" id="show_table">
        
        <table style="width:50%" id="accounts" border="1"></table>
        </div>


                 
    
   
</br>  -->


        <script type="text/javascript" src="./assets/js/script.js"></script>

<script>


// to show pop up 
document.getElementById("show_edit_form").style.display="none";
document.getElementById("show_table").style.display="block";




     const url ="https://iqbetspro.com/pg-management/Accounts-All-Deatils-GET-API.php";
     async function getapi(url) 
     {
        // console.log('inside function..');

             let result = await fetch(url);
         
             let response = await result.json();
            // console.log('data',response);
             show(response);
             //document.getElementById("demo").innerHTML = response;

         }
         
         getapi(url);

         function show(data) {
             let tab =
                 `<tr>
                 <th data-prirority="6">Id</th>
                 <th>Date</th>
                 <th>Type</th>
                 
                 <th>Tenant Mobile</th>
             <th>Month</th>
             <th>Year</th>  
             <th>Income</th>
                 
                 <th>Action</th>
                 </tr>`;
                 let i = 1;
             // Loop to access all rows
             for (let r of data) {
                 tab += `<tr>
             <td>${i} </td>
             <td>${r.date}</td>
             <td>${r.type}</td>
             
             <td>${r.tenant_mobile}</td>
             <td>${r.month}</td>
             <td>${r.year}</td>             
             <td>${r.income_amount}</td>	
             
            
             <td>
             <div style=" display: flex;justify-content: space-around;">
          
             <Button style="border-color:white;margin-right:10px" id="edit_button1" onclick='edit_row(${r.id})'>
             <i class="fa fa-edit btn-outline-primary" ></i>
        
        </Button>

          <Button style="border-color:white;margin-right:10px"  id="delete_button1" onclick="delete_row(${r.id})" >
          <i class="fa fa-trash btn-outline-danger">
          </i></Button>
         </div>
        </td>	
             	
             </tr>`;
             }
             // Setting innerHTML as tab variable
             document.getElementById("accounts").innerHTML = tab;
             }
          
        

         
    
    // after clicking delete button ,calling delete api 

function delete_row(id)
{
  var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
           
           if(user_answer==true)
            {
              fetch('https://iqbetspro.com/pg-management/delete-Accounts-API.php', 
              {
                method: 'DELETE',
                body: JSON.stringify({
                "id":id
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


var form=document.getElementById('account_edit');

form.addEventListener('submit', function(e){
 e.preventDefault()

   var id=  document.getElementById("id_value").value; 
   var accountDate =  document.getElementById("date").value;
   var accountIncomeType =  document.getElementById("type").value;
   var accountMonth =  document.getElementById("month").value;
   var accountYear =  document.getElementById("year").value;
   var accountAmount =  document.getElementById("amount").value;
   var accountPaidAmount =  document.getElementById("pay_amount").value;
     alert("Clicked on Save button...");

     fetch('https://iqbetspro.com/pg-management/update-Accounts-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {   
      "id":id,
    "date":accountDate,
     "type":accountIncomeType,
     "tenant_mobile":"89389494439",
      "month":accountMonth,
      "year":accountYear,
      "expenditure_amount":"null",
      "income_amount":"3600", 
      "balance":"null",
      "comments":"xyz"
    
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
     alert("ok")
    if(data[0].Message.response =='error')
    window.location = "account.php";
    else
    {console.log("Updated Successfully...");
      window.location = "account_table.php";}

}).catch(error => alert('Error:', error)); 
});





          // clicking edit icon
          function edit_row(id){
       // alert("inside edit row "); 
                  fetch(' https://iqbetspro.com/pg-management/id-single-Account-Details-GET.php', {
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
            document.getElementById("date").value = data[0].complaint_type;
             document.getElementById("type").value =  data[0].type;
             //document.getElementById("createdDate").value =  data[0].created_date;
             //document.getElementById("resolveDate").value =data[0].resolve_date;
             //document.getElementById("comments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 //  getapi(url);
                }










  //Update News

           
//   var form=document.getElementById('account_edit');

// form.addEventListener('submit', function(e){
//  e.preventDefault()
// alert("before id value");

//   var id=  document.getElementById("id_value").value; 
  
//       var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
//       var balance = document.getElementById("balance").value; 
//       var date =  document.getElementById("date").value; 
//       var income_type =  document.getElementById("income_type").value; 
//       var month =  document.getElementById("month").value; 
//       var year =  document.getElementById("year").value; 
//       var amount = document.getElementById("amount").value; 
//       var payAmount = document.getElementById("pay_amount").value; 
     
//       // indian format code 
//        var date = new Date();
//        var dd = String(date.getDate()).padStart(2, '0');
//        var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
//        var yyyy = date.getFullYear();
 
//  // date = dd + '-' + mm + '-' + yyyy;
//  date =  yyyy +'-' + mm + '-' +dd;
 
 
//       //alert("Clicked on Save button...");
//      // var enquiryAction = document.getElementById("enquiryAction").value;
//    fetch('https://iqbetspro.com/pg-management/update-Accounts-API.php', {
//    method: 'POST',
//    body: JSON.stringify({
//      "id":id,
//      "date":date,     
//                   //"tenant_email":tenantEmail,
//              "tenant_mobile":tenantMobileNumber,          
//              "type":income_type,
//              "month":month,            
//              "year":year, 
//              "income_amount":amount,
//             // "paid_amount":payAmount,
//             "expenditure_amount":"null",      
//        "balance":"null",
//        "comments":"sjkldkaj" 
     
//    }),
//   headers: {
//     'Content-type': 'application/json; charset=UTF-8',
//   }
//   })
//   .then(function(response){ 
//   return response.json()})
//   .then(function(data)
//   {console.log(typeof(data[0].Message));
//     console.log(data[0].Message.response);
//      alert("ok")
//     if(data[0].Message.response =='error')
//     window.location = "account_new.php";
//     else
//     {console.log("Updated Successfully...");
//       window.location = "account_table.php";}

// }).catch(error => alert('Error:', error)); 
// });





//  function edit_row(id)
//  {
//              // alert(id);
//            fetch('https://iqbetspro.com/pg-management/id-single-Account-Details-GET.php', {
//            method: 'GET',
//            body: JSON.stringify({
//      "id":id
//     })
//    })
//    .then(function(response){ 
//    return response.json()})
//    .then(function(data)
//    {
//     alert(data);
//     console.log(data);
//      //alert(data[0].Message.response)
 
//            document.getElementById("show_edit_form").style.display="block";
//             document.getElementById("show_table").style.display="none";
      
//             document.getElementById("id_value").value=data[0].id;
      
//       document.getElementById("date").value=data[0].date;
//        document.getElementById("income_type").value = data[0].type;
//       document.getElementById("tenantMobileNumber").value =  data[0].tenant_mobile;
//       document.getElementById("month").value =  data[0].month;
//       document.getElementById("year").value =  data[0].year;
//       document.getElementById("amount").value =  data[0].income_amount;
//       document.getElementById("balance").value =  data[0].balance;
//       document.getElementById("comments").value =  data[0].comments;
     
 
//  }).catch(error => alert('Error:in Sending Accounts Data', error)); 
 
     
//           //  getapi(url);
//          } 
     
     
         
   

</script>
   

    </body>

</html>