<!DOCTYPE html>
<html lang="en" class="h-90">
<head>

  <title>Configure </title>
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
           
        ?>
  
    <!-- <script type="text/javascript" src="./assets/js/script.js"></script> -->
    <div class="wrapper" style="margin-right:700px" id="show_table">
         <div class="container-fluid" >
             <div class="row">
                 <div class="col-md-12 lead">
                     <div class="mt-2 mb-6 clearfix">
                     <div style="margin-left:0px;width:1500px">
                     <center><div class="p-3 mb-2  mr-5 bg text-black">Configure details</div></center>
                   
       

                     
 </div>

 </br> 
 <div style="margin-left:0px" id="show_table">
    <table id="configure" border="1"></table>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <script>


    // to show pop up 
    
    document.getElementById("show_table").style.display="block";
    


const url ="https://iqbetspro.com/pg-management/GET-configure-PG-details.php";
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
<th>id</th>
<th>PG Name</th>
<th>manager mobile</th>
<th>manager email</th>
<th>floor</th>
<th>room</th>
<th>bed</th>
<th>Action</th>
</tr>`;

let i=1;
// Loop to access all rows
//<button><a href="manage_rooms.html"  class="btn" onclick='manage_beds(${r.id})'>Manage beds  </a> </button>
for (let r of data) {
console.log(typeof(r.id));
tab += `<tr>
<td>${i} </td>
<td>${r.PG_Name}</td>
<td>${r.manager_mobile}</td>
<td>${r.manager_email}</td>
<td>${r.floor}</td>	
<td>${r.room}</td>
<td>${r.bed}</td>
<td>
    
   <button><a href="manage_rooms.php?PG_Name=${r.PG_Name}&floor=${r.floor}&room=${r.room}&bed=${r.bed}" class="btn btn-dark m-1" style="background-color:#757575">Manage beds </a></button> 
   
   
</td>
</tr>`;
i=i+1;
}  
tab=tab+` </tbody>`;
// Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
document.getElementById("configure").innerHTML = tab;
}
</script>
</body>
</html>