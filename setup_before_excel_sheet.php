

<html lang="en" class="h-90">
<head>

<title>Building form</title>
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

<script type="text/javascript" src="./assets/js/script.js"></script> 
       


</head>


   
<body class="smokewhite_bg_color">
   
    
   <?php
           $page = 'setup';
           include "./adminHeader.php";
           include "./sidebar.php";
           include "./commonlinks.php";
           // include_once "./config/dbconnect.php";
       ?>
   
    
    	<div class="container h-90 pt-5 " style="margin-right:900px ">
        <div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
					<!-- Form -->
                    
                	<form class="form-example" action=".php" method="post">
                     <h1><center><div class="p-3 mb-2  text-black"><p class="two smokewhite_bg_color">Resource Details</p></div></center></h1>
                		

                    <center>
                        <!--<a href="room_setup.php"  class="btn"><i class="fa fa-home"></i> Rooms</a> -->
                       
                        <a href="manage_pg.php" style="background-color:#ececec; color:black" class="btn btn-dark mb-2"><i class="fa fa-home"></i>Manage PG's </a>
               
                    </center>

                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

        

         

    </body>

</html>