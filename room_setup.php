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
           
        ?>

</head>
<style>
     .btn {
  background-color:#117A65;
  border: box;
  color: white;
  padding: 12px 16px;
  padding:0rem 1rem 1rem 1rem;
  font-size: 22px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #ABEBC6;
}
p.two {
  border-style: solid;
  border-width: medium;
  border-radius:22px;
}

h1 {
  color: #B9770E;
}


</style>

    <body class="h-100">
   
    
    	<div class="container h-90" style="margin-left:-40px">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
					<!-- Form -->
                    
                	<form class="form-example" action=".php" method="post">
                     <h1><center><div class="p-3 mb-2 bg- text-black"><p class="two">Adding Details</p></div></center></h1>
                		

                    <center><a href="set_up.php"  class="btn"><i class="fa fa-home"></i> Room</a>
                   </center>

                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>

        <h1><center><div class="pt-3  bg- text-black" style="margin-right:400px" >Details</div></center></h1>
        <div style="margin-left:200px">
        <table  id="rooms" border="1"></table>

        <div class="container">
  <div class="row">
    <div class="col-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Column_name</th>
            <th scope="col">Checkbox</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            
            <td>1</td>
            <td>Name</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>2</td>
            <td>Mobile Number</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              
            </div>
          </td>
         </tr>
         <tr>
            
            <td>3</td>
            <td>Email</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>4</td>
            <td>Floor No</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>5</td>
            <td>Room No</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>6</td>
            <td>Bed No</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>7</td>
            <td>Total Amount</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>8</td>
            <td>Paid Amount</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
          </td>
         </tr>
         <tr>
            
            <td>9</td>
            <td>Due</td>
          
          <td>
            <div class="custom-control custom-checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 
            </div>
          </td>
         </tr>
          
        </tbody>
      </table>
      <center><button type="submit" class="btn btn-success btn-customized">Submit</button>
						</center>
    </div>
  </div>
</div>


        <script type="text/javascript" src="./assets/js/script.js"></script>

    </body>

</html>