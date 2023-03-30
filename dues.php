
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
p.two {
  border-style: solid;
  border-width: medium;
  border-radius:20px;
}

h1 {
  color: #B9770E;
}
.wrapper{
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 100px;
        }
        .btn {
  background-color: #117A65;
  border: none;
  color: white;
  padding: 10px 25px;
  padding:0rem 1rem 0rem 1rem ;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #DC7633;
}
</style>
		
    <body class="h-90">
    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    	
        <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-2 mb-6 clearfix" style="width:850px">
                    <center><div class="p-3 mb-2 bg-dark text-white" >Dues Details</div></center>
                   
                    
                     <table id="rooms" border="1" ></table>
                      </div>
</br>
                    
<script>

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
                 <th>Tenant Name</th>
                 <th>Total Amount</th>
                 <th>Paid</th>
                 <th>Dues</th>
                 </tr>`;
             
             // Loop to access all rows
             for (let r of data) {
                 tab += `<tr>
             <td>${r.serial_no} </td>
             <td>${r.tenant_name}</td>
             <td>${r.total_amount}</td>
             <td>${r.paid}</td>
             <td>${r.dues}</td>	
             	
             </tr>`;
             }
             // Setting innerHTML as tab variable
             document.getElementById("rooms").innerHTML = tab;
             }
 </script>         
<?php
    
?>
 
    </table>
    </div>
             
          
          
          
          
          </div>
            </div>
        </div>

    </body>

</html>