
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
     ?>
    

<div id="show_edit_form">
<div class="container h-80">
<div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
  <!-- <form id="enquiry_edit"> -->


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



     
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- Expenditure details header starts -->
 
     <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:0px;width:1380px">
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
                    
</br> 

   

<div style="margin-left:0px" id="show_table">
                    <table id="account_expenditure" border="1"></table>
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
                 `<tbody id="table_border" style="text-align:center">
                 <tr>
                 <th>S.No</th>
                 <th>Month</th>
                 <th>Year</th>
                 <th>Total Expenditure</th>
                 <th>Action</th>
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
             
             <td>${r.Month}</td>
             <td>${r.Year}</td>
             <td>${r.Expenditure}</td>	
             <td> <div style=" display: flex;justify-content: space-around;">
          
            <button style="border-width:5px;border-color:white" >View</button>         
           
            </div>
            </td>
                 </tr>`;
             i=i+1;
             }  
             tab=tab+` </tbody>`;
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("account_expenditure").innerHTML = tab;
             }

</script>
</body>
</html>