<?php

//  $floor_no = $_GET['floor_no'];
//  $room_no  = $_GET['room_no'];
//  $bed_no = $_GET['bed_no'];
//  $amount= $_GET['amount'];
// echo $floor_no;

// echo $floor_no;
// echo $room_no;


?>
<?php

?>

<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
  <title>Admin</title>
  <!-- Required meta tags -->
  
  
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link> <script src="Your jQuery source path"></script> <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- to serach tenant with name -->
  <!-- <script type="text/javascript" src="./assets/js/tenant-bed-assigned-search-details.js"></script> -->
  

        <title>Collecting Fee</title>

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


       <?php
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
.btn {
  background-color: #117A65;
  border: none;
  color: black;
  padding: 10px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}
</style>
		
    <body class="h-100">
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- <script type="text/javascript" src="./assets/js/roomFormData.js"></script> -->
    <a href="room_table.php" >
       <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    <?php #if(!empty($msg)){echo $msg; }?></p>
                	<form name="room" id="form" class="form-example" action="" method="post" >
					<h1>
                        <center>
                            <div class="p-3 mb-2 bg- text-black" >
                                <p class="two">Add Income </p>
                            </div></center>
                        </h1>
                    <div class="form-group">
                    <label for="tenantMobileNumber">Tenant Mobile Number :</label>
							<input type="text" class="form-control tags" id="tags" placeholder="" name="tags">
						</div>
                		<!-- Input fields -->
                    <div id="tenantDetails" style="display:none">
                        
                         <!-- <div class="form-group">
                			<label for="tenantEmail">Tenant Email :</label>
                			<input type="text" class="form-control tenant mail" id="tenantEmail" placeholder="" name="tenantEmail">
                		</div>  -->
                      <div class="form-group">
                        <label for="tenantMobileNumber">Tenant Mobile Number :</label>
                        <input type="text" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder="" name="tenantMobileNumber">
                      </div>
                    </div>      
                    <div class="form-group">
                			<label for="date">Date :</label>
                			<input type="date" onload="getDate()"class="form-control date" id="date" placeholder="" name="date">
                		</div>
                        <div class="form-group">
							<label for="floor number">Income Type</label>
							<input type="text" class="form-control income_type" id="income_type" disabled value="Monthly Rent" name="income_type">
						</div>
                        <div class="form-group">
							<label for="month">Month:</label>						
						
            <select placeholder="Select the month">
    <option name="" value="" style="display:none;" >Select The Month</option>
    <option name="January" value="Jan">January</option>
    <option name="February" value="Feb">February</option>
    <option name="March" value="Mar">March</option>
    <option name="April" value="Apr">April</option>
      <option name="May" value="May">May</option>
    <option name="June" value="Jun">June</option>
    <option name="July" value="Jul">July</option>
    <option name="August" value="Aug">August</option>
      <option name="September" value="Sep">September</option>
    <option name="October" value="Oct">October</option>
    <option name="November" value="Nov">November</option>
    <option name="December" value="Dec">December</option>
  </select>
  </div>

  <div class="form-group">
							<label for="year">Year:</label>						
						
            <select placeholder="Select the Year">
    <option name="" value="" style="display:none;" >Select The Year</option>
    <option name="2022" value="2022">2022</option>
    <option name="2023" value="2023">2023</option>   
    
  </select>
  </div>
                              <!-- <div class="form-group">
							<label for="bednumber">Year</label>
							<input type="text" class="form-control " id="year"  name="year">
						</div> -->
                        <div class="form-group">
                			<label for="amount">Amount:</label>
                			<input type="" class="form-control amount" id="amount"  name="totalAmount">
                		</div>
                        <div class="form-group">
                			<label for="amount">Paid Amount:</label>
                			<input type="" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div>
                        
            
					
<center>
              <button type="submit" class="btn btn-success btn-customized" >Save</button>
                             </center>
						
                	</form>
					
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./assets/js/script.js"></script>
        <!-- <script type="text/javascript" src="./assets/js/tenantFormValidation.js"></script> -->
        <!-- <script type="text/javascript" src="./assets/js/tenantRegistration.js"></script> -->
        
        <script>
          document.getElementById("date").valueAsDate = new Date();

          </script>

<script>
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
    $('#date').attr('min', maxDate);
});
</script>

<script>

  
 var form=document.getElementById('form');

form.addEventListener('submit', function(e){
 e.preventDefault()
 //alert("inside add accounts");
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     //var tenantEmail = document.getElementById("tenantEmail").value; 
     var date =  document.getElementById("date").value; 
     var income_type =  document.getElementById("income_type").value; 
     var month =  document.getElementById("month").value; 
     var year =  document.getElementById("year").value; 
     var amount = document.getElementById("amount").value; 

     var payAmount = document.getElementById("pay_amount").value; 
     alert("Income Registered Succesfully");

 fetch('https://iqbetspro.com/pg-management/Accounts-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
 
    
    "date":date,     
                 //"tenant_email":tenantEmail,
            "tenant_mobile":tenantMobileNumber,          
            "type":income_type,
            "month":month,            
            "year":year, 
            "income_amount":amount,
           // "paid_amount":payAmount,
           "expenditure_amount":null,      
      "balance":null,
      "comments":"sjkldkaj"      


  }),
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
    window.location = "account_new.php"
    else
    window.location = "account_table.php"

}).catch(error => console.error('Error:', error)); 
});
</script>


<script>
      const url_get_tenant_details="https://iqbetspro.com/pg-management/all-bed-details-GET-API.php";
    async function getapi(url) {
        console.log('inside function..');

            let result = await fetch(url);
        
            let response = await result.json();
            console.log('response=',response);

            var newArray=[]
            for(let i=0;i<response.length;i++)
             { 
                //console.log(response[i].tenant_name);
                newArray.push(response[i].tenant_mobile_no); //tenant_mobile_no
               }
            console.log(newArray);
            $( "#tags" ).autocomplete({
                source: newArray,
                select: function( event, ui ) {
                  submit(ui.item.value);
                  console.log(ui.item.value);
                }
              });

              
        }
       async function submit(searchItem)
       {
                
        // let searchItem= document.getElementById("tags").value;
        let result = await fetch(url);
        
        let response = await result.json();
        
        var foundData=response.filter(obj=> obj.tenant_mobile_no == searchItem);
        document.getElementById("tenantDetails").style.display="block";

        // document.getElementById("tenantEmail").value=foundData[0].tenant_email;
       // document.getElementById("tenantUserName").value=foundData[0].tenant_name;
        document.getElementById("tenantMobileNumber").value=foundData[0].tenant_mobile_no;
        document.getElementById("amount").value=foundData[0].amount;
          console.log('searchItem',foundData);
       }
        getapi(url_get_tenant_details);
  </script>

    
     <!-- console.log(tenantMobileNumber,tenantUsername,tenantEmail,tenantJoiningDate,tenantComments,tenantAdharCardNumber); -->
 


    </body>

</html>
