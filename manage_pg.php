
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:white;"> -->
  <title>Admin</title>
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
 <div class="wrapper" style="margin-right:700px"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2 mb-6 " style="width:850px">
                <h1 class="heading ">Manage PG's</h1>
                <hr>
              <!-- <a href="create.php"  class="btn btn-dark m-2 pl-1" style="margin-left:0px">+ ADD NEW PG </a> -->
              <a href="create.php" class="btn btn-dark" style="margin:10px; background-color:#757575" >
                <i  class="fa fa-plus"></i>&nbsp;ADD NEW PG </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
           
    <div class="wrapper" style="margin-right:700px" id="show_table">
         <div class="container-fluid" >
             <div class="row">
                 <div class="col-md-12 lead">
                     <div class="mt-2 mb-6 clearfix">
                     <div style="margin-left:0px;width:1530px">
                     <center><div class="p-3 mb-2  mr-5 bg text-black" style ="font-size:30px">Manage details</div></center>
                   
                     

 </div>

 </br> 
 <div style="margin-left:0px" id="show_table">
    <table id="create" border="1"></table>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <script>


    // to show pop up 
    
    document.getElementById("show_table").style.display="block";
    


const url ="https://iqbetspro.com/pg-management/GET-PG-Api.php";


async function getapi(url) {
       // var manager_mail = document.getElementById("manager_email").value;
       //var manager_mail = "manjuprasad.4327@gmail.com";//type ur mail id
        var manager_mail =document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   
        fetch(url, {
                  method: 'POST',
                  body: JSON.stringify({
   "manager_email":manager_mail,
   
}
           )
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
                console.log(data);
                show(data);
        })
    }
        
        getapi(url);
function show(data) {
let tab =
`
<tbody id="table_border" style="text-align:center">
<tr>
<th>id</th>
<th>PG Name</th>
<th>manager mobile</th>
<th>manager email</th>
<th>landmark</th>
<th>city</th>
<th>pincode</th>
<th>state</th>
<th>address</th>
<th>PG Type</th>
<th>Action</th>
</tr>`;

//

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
<td>${r.landmark}</td>	
<td>${r.city}</td>
<td>${r.pincode}</td>
<td>${r.state}</td>
<td>${r.address}</td>
<td>${r.PG_Type}</td>
<td>
<button><a href="configure.php?PG_Name=${r.PG_Name}"  class="btn btn-dark m-1" style="background-color:#757575">configure </a></button>
</td>

</tr>`;
i=i+1;
}  
tab=tab+` </tbody>`;
// Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
document.getElementById("create").innerHTML = tab;
}
</script>
</body>
    </html>
  