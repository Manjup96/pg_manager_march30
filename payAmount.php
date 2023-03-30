<?php

 $floor_no = $_GET['floor_no'];
 $room_no  = $_GET['room_no'];
 $bed_no = $_GET['bed_no'];
 $total_amount= $_GET['total_amount'];
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
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- to serach tenant with name -->
  <!-- <script type="text/javascript" src="./assets/js/searchTenant.js"></script> -->
  

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
        <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var building_name =  localStorage.getItem("selected_building1");
 </script>

 </div>
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- <script type="text/javascript" src="./assets/js/roomFormData.js"></script> -->
    <a href="room_table.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    <?php if(!empty($msg)){echo $msg; }?></p>
                	<form name="room" id="form" class="form-example" action="" method="post" >
					<h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Book Rooms</p></div></center></h1>
                    <div class="form-group">
                    <label for="tenantMobileNumber">Tenant Mobile Number :</label>
                    
							<input type="text" class="form-control tags" id="tags" placeholder="" name="tags">
						</div>
                		<!-- Input fields -->
                    <div id="tenantDetails" style="display:none">
                        <div class="form-group">
							<label for="tenantUserName">Tenant Name :</label>
							<input type="text" class="form-control tenantUserName" id="tenantUserName" placeholder="" name="tenantUserName">
						</div>
                        <div class="form-group">
                			<label for="tenantEmail">Tenant Email :</label>
                			<input type="text" class="form-control tenant mail" id="tenantEmail" placeholder="" name="tenantEmail">
                		</div>
                		<div class="form-group">
                			<label for="tenantMobileNumber">Tenant Mobile Number :</label>
                			<input type="number" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder="" name="tenantMobileNumber">
                		</div>
                    </div>      
                		<div class="form-group">
                			<label for="tenantJoiningDate">Joining Date :</label>
                			<input type="date" onload="getDate()"class="form-control tenantJoiningDate" id="tenantJoiningDate" placeholder="" name="tenantJoiningDate">
                		</div>
						<div class="form-group">
							<label for="floor number">Floor Number :</label>
							<input type="number" class="form-control floor_no" id="floor_no" disabled value="<?php echo $floor_no;?>" name="floor number">
						</div>
                        <div class="form-group">
							<label for="room number">Room Number:</label>
							<input type="number" class="form-control room number" id="room_no" disabled value="<?php echo $room_no;?>" name="room number">
						</div>
                              <div class="form-group">
							<label for="bednumber">Bed Number:</label>
							<input type="number" class="form-control bed number" id="bed_no" disabled value="<?php echo $bed_no;?>" name="bed number">
						</div>
                        <div class="form-group">
                			<label for="amount">Total Amount:</label>
                			<input type="number" class="form-control amount" id="total_amount" disabled  value="<?php echo $total_amount;?>" name="totalAmount">
                		</div>
                        <div class="form-group">
                			<label for="amount">Paying Amount:</label>
                			<input type="number" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div>
                          <div class="form-group">
							<label for="your message">Your Message:</label>
							<input type="text" class="form-control your message" id="tenantComments" placeholder="" name="your message">
						</div>
                      
						<center>
						    <!--<button type="submit" id="submit" class="btn btn-success btn-customized">Save</button>-->
						    <button id="rzp-button1" onclick="paynow()">Pay</button>

						</center>
                		<!-- End input fields -->
                		
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

        <script>
           document.getElementById("tenantJoiningDate").valueAsDate = new Date();

          </script>

    </body>

</html>
<!-- Floor No: <input type="text" name="name" value="" disabled> -->



<script>

  
 var form=document.getElementById('form')

form.addEventListener('submit', function(e){
 e.preventDefault()
    
    var tenantUsername = document.getElementById("tenantUserName").value;
     var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value; 
     var floor_no =  document.getElementById("floor_no").value; 
     var room_no =  document.getElementById("room_no").value; 
     var bed_no =  document.getElementById("bed_no").value; 
     var total_amount = document.getElementById("total_amount").value; 
     var payAmount = document.getElementById("pay_amount").value;
     //var building_name = document.getElementById("building").value;
     var building_name =  localStorage.getItem("selected_building1");
    var managerEmail = document.getElementById("manager_email").value;
    var managerMobile = document.getElementById("manager_mobile").value; 
    console.log("building_name=",building_name)
    console.log("managerEmail=",managerEmail)
    console.log("managerMobile=",managerMobile)
    console.log("tenantUsername=",tenantUsername)
    console.log("tenantMobileNumbe=",tenantMobileNumber)
    console.log("tenantEmail=",tenantEmail)
    console.log("tenantJoiningDate=",tenantJoiningDate)
    console.log("tenantComments=",tenantComments)
    console.log("floor_no=",floor_no)
    console.log("bed_no=",bed_no)
    console.log("room_no=",room_no,)
    console.log("total_amount=",total_amount)
    console.log("payAmount=",payAmount)


 fetch('https://iqbetspro.com/pg-management/Alloting-Bed-to-Tenant-PUT-API.php', {
  method: 'PUT',
  body: JSON.stringify({
    
           "building_name": building_name,
             "manager_email":managerEmail,
            "manager_mobile":managerMobile,
            "tenant_name":tenantUserName,
            "tenant_email":tenantEmail,
            "tenant_mobile":tenantMobileNumber,
            "floor_no":floor_no,
            "room_no":room_no,
           
            "bed_no":bed_no, 
            "amount":total_amount,
            "paid_amount":payAmount,
          
            "due":"0",
            "Available":"no" ,
            "joining_date" :"",




          // "building_name":"MNJ1",
          //    "manager_email":"manjuprasad.4327@gmail.com",
          //   "manager_mobile":"8834567891",
          //   "tenant_name":"Yuva",
          //   "tenant_email":"yuva@gmail.com",
          //   "tenant_mobile":"7779955959",
          //   "floor_no":"2",
          //   "room_no":"201",
           
          //   "bed_no":"2",
          //   "amount":"9000",
          //   "paid_amount":"9000",
          //   "due":0,
          //   "Available":"no" ,
          //   "joining_date" :""
            

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
    // if(data[0].Message.response =='error')
    // window.location = "room_table.php"
    // else
    // window.location = "room_table.php"

}).catch(error => console.error('Error:', error)); 
});


</script>

<script>
  
//const url ="https://iqbetspro.com/pg-management/Bed-details-GET-API-manager-email.php";
const url_get_tenant_details="https://iqbetspro.com/pg-management/GET-Tenant-details-with-building-and-manager-email-API.php";
    async function getapi_search(url) {
      console.log("url=",url);
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
  // var building_name = document.getElementById("building").value;
  var building_name =  localStorage.getItem("selected_building1");
   console.log("building_name=",building_name);
        fetch(url, {
                  method: 'POST',
                  body: JSON.stringify({
   "manager_email":manager_mail,
   "building_name":building_name
}
           )
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          { 
            //please check from here, i worte code 
              
                console.log(data);
                search1(data); // error 
        })
    }
        
    getapi_search(url_get_tenant_details);
    
    var tenant_json_data = {}
    function search1(data) 
    {
          
            console.log('response=',data);
            tenant_json_data=data;
            var newArray=[]
            for(let i=0;i<data.length;i++)
             { 
                newArray.push(data[i].tenant_mobile);
               }
            console.log("newArray=",newArray);
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
        console.log("recieved mobile no =",searchItem);
        console.log("tenant json data =",tenant_json_data);
       
        var foundData=tenant_json_data.filter(obj=> obj.tenant_mobile == searchItem);
        console.log('Filtered tenant details =',foundData);
        document.getElementById("tenantDetails").style.display="block";

        document.getElementById("tenantEmail").value=foundData[0].tenant_email;
        document.getElementById("tenantUserName").value=foundData[0].tenant_name;
        document.getElementById("tenantMobileNumber").value=foundData[0].tenant_mobile;
       document.getElementById("tenantComments").value=foundData[0].comments;
       }
        
  </script>
  
<script>
    // function selectedBuilding(){
    //     var selected_building= document.getElementById("building").value;;
    //     // alert(selected_building);
    //     console.log(selected_building);
    //      getapi_search(url_get_tenant_details);
    // }
</script>





<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function paynow(){
        console.log("Inside paynow fun...");
        
        var tenantUsername = document.getElementById("tenantUserName").value;
         var tenantMobileNumber = document.getElementById("tenantMobileNumber").value; 
     var tenantEmail = document.getElementById("tenantEmail").value; 
     var tenantJoiningDate = document.getElementById("tenantJoiningDate").value; 
     var tenantComments = document.getElementById("tenantComments").value; 
     var floor_no =  document.getElementById("floor_no").value; 
     var room_no =  document.getElementById("room_no").value; 
     var bed_no =  document.getElementById("bed_no").value; 
     var total_amount = document.getElementById("total_amount").value; 
     var payAmount = document.getElementById("pay_amount").value *100;
     //var building_name = document.getElementById("building").value;
     var building_name =  localStorage.getItem("selected_building1");
    var managerEmail = document.getElementById("manager_email").value;
    var managerMobile = document.getElementById("manager_mobile").value; 
    
    console.log("tenantMobileNumber=",tenantMobileNumber);
//   var name = document.getElementById("name").value;
//   var email = document.getElementById("email").value;
//   var mobile = document.getElementById("mobile").value;
//   var amount = parseInt(document.getElementById("amount").value) * 100;
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function(){
           if (xhttp.status === 200) {
                console.log(xhttp.responseText);
              } else {
                console.log('Error!');
              }
          var orderID = this.responseText;
        var options = {
            // "key": "rzp_test_jIUzBukJnwE5kE", // Enter the Key ID generated from the Dashboard   rzp_live_meYRQwcQTdON8u
            "key": "rzp_live_meYRQwcQTdON8u",
            "amount": parseInt(payAmount) * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "iiiQBets", //your business name
            "description": "Test Transaction",
            "image": "https://iqbetspro.com/seeders/img/india.jpg", // company Logo
            "order_id":orderID, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            // "callback_url": "https://iqbetspro.com/raz/success.php",
            "handler": function (response) {
                //      alert(response.razorpay_payment_id);
                // alert(response.razorpay_order_id);
                // alert(response.razorpay_signature);
                console.log(response.razorpay_payment_id);
                // send to database 
                
                fetch('https://iqbetspro.com/pg-management/razorpay-orderID-tenant-fee-pay-update-API.php', {
      method: 'POST',
      body: JSON.stringify(
        {
            "manager_email":managerEmail,
            "building_name":building_name,
            "tenant_mobile": tenantMobileNumber,
             "tenant_name":tenantUsername,
                "tenant_email":tenantEmail,
                "date":"03-12-2022",
                 "type":"Monthly Rent",
                 "month":"02",
                 "year":"2023",
                 "income_amount":payAmount,
                 "comments":tenantComments,
                
                "razorpay_payment_id":response.razorpay_payment_id,
                 "razorpay_order_id":response.razorpay_order_id,
                  "razorpay_signature":response.razorpay_signature,
    
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
        console.log(data[0].Message.response);
       
        if(data[0].Message.response =='error'){
            
        
        window.location = "room_table.php";
         alert("Payment NOT stored in Database...");
        }
        else
        {
            console.log("Updated Successfully...");
            alert("Payment Done Successfully...");
          window.location = "room_table.php";
            
        }
    
    }).catch(error => alert('Error:', error)); 
               
                
                
              },
            // "redirect": true,
            "prefill": {
                "name": tenantUsername, //your customer's name
"email": tenantEmail,
                "contact": "+91"+tenantMobileNumber
                                 
                  
            },
            "notes": {
                "address": "Bangalore Head Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed',function(response){
    alert(response.error.code);
});
    rzp1.open();
  
}
xhttp.open("GET","https://iiiqbets.com/razor/orders.php?name="+tenantUsername+"&email="+tenantEmail+"&amount="+payAmount,true);
xhttp.send();
}
</script>