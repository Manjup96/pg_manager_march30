<html lang="en" class="h-90">
<head>

<title>Account</title>
		<!-- Required meta tags -->

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

      

       
</head>


<body class="smokewhite_bg_color">
   
    
    <?php
             $page = 'account';
            include "./adminHeader.php";
            include "./sidebar.php";
            include "./commonlinks.php";
            // include_once "./config/dbconnect.php";
        ?>
    	<div class="container h-90 pt-5" style="margin-right:900px ">
        <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
			
                    
                	<form class="form-example" action=".php" method="post">
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two smokewhite_bg_color">Add Account Details</p></div></center></h1>
                		
 		
            
                    <center><a href="account_income_table.php"  class="btn btn-dark mb-2"  style="background-color:#ececec; color:black"><i class="fa fa-money"></i> Income</a>
                    <a href="expenditure-table.php"  class="btn btn-dark mb-2 " style="background-color:#ececec; color:black"><i class="fa fa-bars"></i> Expenditure</a>
                    <!-- <a href="dues.php" class="btn btn-dark mb-2"><i class="fa fa-tags"></i> Dues</center></a>
                -->
                	</form>
					<!-- Form end -->
                </div>
            </div>
</div>

        <!-- <script> -->
        <!-- <h1><center><div class="p-3 mb-2 bg- text-black" >Details</div></center></h1>
        <div style="margin-left:200px">
        
        <table style="width:50%" id="rooms" border="1"></table>
        </div>



     const url ="https://iqbetspro.com/pg-management/all-bed-details-GET-API.php";
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
                 <th>Serial No</th>
                 <th>Date</th>
                 <th>Details</th>
                 <th>Income</th>
                 <th>Expenditure</th>
                 <th>Balance</th>
                 </tr>`;
             
             // Loop to access all rows
             for (let r of data) {
                 tab += `<tr>
             <td>${r.serial_no} </td>
             <td>${r.date}</td>
             <td>${r.details}</td>
             <td>${r.income}</td>	
             <td>${r.expenditure}</td>	
             <td>${r.balance}</td>	
             	
             </tr>`;
             }
             // Setting innerHTML as tab variable
             document.getElementById("rooms").innerHTML = tab;
             }
 </script>            -->
        <!-- <script type="text/javascript" src="./assets/js/script.js"></script> -->

 
        </body>
</html>