
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
  border-width: 5px;
  border-radius:10px;
}

h1 {
  color: #154360;
}
.wrapper{
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 100px;
        } .btn {
  background-color:  #117A65;
  border: none;
  color: white;
  padding: 13px 25px;
  padding:0rem 1rem 1rem 1rem;
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
    	
        <div class="wrapper" style="margin-right:700px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px">
                    <center><div class="p-3 mb-2 bg-dark text-white">Building Details</div></center>
                    <div class="search-container">
                     <input type="text" placeholder="Search.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"></i></button>
                        <a href="building.php" class="btn btn-success pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Building</a>
                        <button type="submit" class="btn btn-success " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button></div>
                        <div style="margin-left:10px">
                    <table id="rooms" border="1"></table>

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
                 <th>Id</th>
                 <th>Number Of Floors</th>
                 <th>Number Of Rooms</th>
                 <th>Sharing Bed/Rooms No</th>
                 </tr>`;
             
             // Loop to access all rows
             for (let r of data) {
                 tab += `<tr>
             <td>${r.id} </td>
             <td>${r.pg_number_of_floors}</td>
             <td>${r.pg_number_of_rooms}</td>
             <td>${r.sharing_room_bed_no}</td>	
             	
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

        <script>
function searchTable() {
   
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("rooms");
  tr = table.getElementsByTagName("tr");

//   console.log(filter)

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // console.log(td)
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
            html2canvas(document.getElementById('rooms'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("BuildingDetails.pdf");
                }
            });
        }
    </script>
    </div>
    </body>

</html>