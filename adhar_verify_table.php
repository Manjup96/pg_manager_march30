
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#D6DBDF;"> -->
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


      


</head>
<style>
/* p.two {
  border-style: solid;
  border-width: 5px;
  border-radius:10px;
}

h1 {
  color: #154360;
} */
/* .wrapper{
            width: 800px;
            margin: 0 auto;
        } */
        /* table tr td:last-child{
            width: 100px;
        }  */
        
.btn {
  background-color:  #117A65;
  border: none;
  color: white;
  padding: 13px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over
.btn:hover {
  background-color: #DC7633;
} */

/* .form-group div
    {
      color: red;
      size: 80%
    }
    .hidden
    {
      display:none;
    } */

</style>

		
<body class="smokewhite_bg_color">

<?php
     $page = 'adhar_verify_table';
     include "./adminHeader.php";
     include "./sidebar.php";
     include "./commonlinks.php";
     ?>

<div id="show_edit_form">
<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
 
           </div>
          </div>
        </div>
</div>

    <script type="text/javascript" src="./assets/js/script.js"></script>
   <div class="wrapper" style="margin-right:800px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:0px;width:1390px">
                    <center><div class="p-3 mb-2 bg text-black">Adhar Details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"  style="color:white";></i></button>
                        <a href="adhar_verify.php" class="btn btn-dark pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Adhar</a>
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</br> 
<div style="margin-left:10px" id="show_table">
                    <table id="adhaar" border="1"></table>
</div>
  </body>
                    <script>
                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      </script>
<script>
  // form validation//

  function validateName(){

var name = document.getElementById("enquiryUsername").value;
 console.log("Name=",name);

var nameRegEx= /^([\w"."]{1,})+([\w\s]{0,})+$/i; 

if(nameRegEx.test(name))
  {
    // console.log("true");
  document.getElementById("name_error").style.display="none";
}
else
   document.getElementById("name_error").style.display="block";  
    // console.log("Error");

}

function validateMobileNumber(){
var mobile = document.getElementById("enquiryMobileNumber").value;
console.log("MobileNumber=",mobile);

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

if(mobileRegEX.test(mobile))
  {
    
    document.getElementById("mobile_error").style.display = "none";

  } else
    document.getElementById("mobile_error").style.display = "block";    
}

function validateEmail() {
var email = document.getElementById("enquiryEmail").value;
console.log("Email =",email);

var emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(emailRegEx.test(email))
{
    document.getElementById("email_error").style.display ="none";

}else 
    document.getElementById("email_error").style.display = "block";
}










     const url ="https://iqbetspro.com/pg-management/GET-Aadhaar-Details-API.php";
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
                 <th>Name</th>
                 <th>Aadhaar_Card_No</th>
                 <th>Photo</th>
                 <th>Dob</th>
                 <th>Gender</th>
                 
                 <th>City</th>
                 <th>District</th>
                 <th>Pincode</th>
                </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               console.log(typeof(r.Name));
                 tab += `<tr>
             <td>${i} </td>
             <td>${r.Name}</td>
             <td>${r.Aadhaar_Card_No}</td>
             
             <td><img src=${r.Photo} alt="Girl in a jacket" width="50" height="60"></td>	
             <td>${r.DOB}</td>
             <td>${r.Gender}</td>
             
             <td>${r.City}</td>
             <td>${r.District}</td>
             <td>${r.Pincode}</td>
             </tr>`;
             i=i+1;
             }  
             tab=tab+` </tbody>`;
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("adhaar").innerHTML = tab;
             }
 </script>           
<?php
    
?>
 
    </table>
    </div>
             
          
          
          
          
          </div>
            </div>
        </div>
        <script>
function searchTable() {
   
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("adhaar");
  tr = table.getElementsByTagName("tr");

 console.log(filter)

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
     console.log(td)
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  <!-- download pdf  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('adhaar'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Adhar_Details.pdf");
                }
            });
        }
        // after clicking delete button ,calling delete api 
    
    </script>
    


    </body>

</html>