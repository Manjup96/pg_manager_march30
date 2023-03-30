<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
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
}.btn {
  background-color:#117A65;
  border: box;
  color: white;
  padding: 12px 16px;
  padding:0rem 1rem 1rem 1rem;
  font-size: 22px;
  cursor: pointer;
}


</style>
    <body class="h-100">
   
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <a href="account.php"  > <div style="margin-left:910px">
<button style="font-size:24px"><i class="fa fa-close"></i></button></div></a>
    	<div class="container h-90">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    
                	<form class="form-example" action="account.php" method="post">
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Add Expenditure Details</p></div></center></h1>
                		
                		<!-- Input fields -->
                        <div class="form-group">
                			<label for="username">Expenditure Types:</label>
                			<input type="text" class="form-control username" id="username" placeholder="" name="username">
                		</div>
                        
                		<div class="form-group">
                			<label for="JoiningDate">Date :</label>
                			<input type="date" onload="getDate()"class="form-control JoiningDate" id="JoiningDate" placeholder="" name="JoiningDate">
                		</div>
						<div class="form-group">
							<label for="password">Amount :</label>
							<input type="number" class="form-control number" id="bed number" placeholder="" name="number">
					
                		</div>
                          <div><label for="subject">Your Message</label>
        <textarea id="Your Message" name="subject" placeholder=""rows="3" cols="40" style="height:150px"></textarea></div>
</br>
						<center><button type="submit" class="btn btn-success btn-customized">Save</button>
                             </center>
						
                		<!-- End input fields -->
                		
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>
    
        <script type="text/javascript" src="./assets/js/script.js"></script>
        <script>
           document.getElementById("JoiningDate").valueAsDate = new Date();

          </script>

    </body>

</html>