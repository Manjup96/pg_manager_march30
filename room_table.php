<!DOCTYPE html>
<html lang="en" class="h-90">
<head>

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
       $page ='room_table';
            include "./adminHeader.php";
            include "./sidebar.php";
           
          
        ?>


</head>
</style>
		
    <body>
   <div class="form_group mt-5 text-center">
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
 </script>

 </div>
  
<?php

// echo "Hello " . $_SESSION["username"] . ".<br>";
?>
  <script type="text/javascript" src="./assets/js/script.js"></script>
    	<input type="hidden" value="<?php echo  $_SESSION["username"]  ?>" id="nm">
        <div class="wrapper" style="margin-right:700px">
        <div class="container-fluid"  style="margin-right:10px">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-2 mb-6 clearfix" style="width:1060px">
                    <center><div class="p-3 mb-2 bg text-black" >Rooms Details</div></center>
                   
                    <div class="search-container" >
                     <input type="text" placeholder="Search.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"  style="color:white";></i></button>
                       <!-- <a href="room.php" class="btn btn-dark pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Rooms</a> -->
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download to pdf</button>
                    <!--<button type="submit" class="btn btn-dark"  style="margin:10px"; onclick="exportTableToExcel('tblData', 'Rooms-Details-data')"> <i class="fa fa-download"></i>&nbsp;Download to Excel File</button> -->
                     </div>
                          
                                 <table id="tblData" border="1" ></table>
                           </div>
                         </div>
                         </div>
                        </div>
                      </div>

</br>
                    
   
<!--<script>-->
<!--    function selectedBuilding(){-->
<!--        var selected_building= document.getElementById("building").value;;-->
        
<!--        console.log(selected_building);-->
<!--        getapi(url);-->
<!--    }-->
<!--</script>-->


<script>



const url ="https://iqbetspro.com/pg-management/Bed-details-GET-API-manager-email.php";
    async function getapi(url) {
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   //var buidling_name = document.getElementById("building").value;
    var buidling_name =  localStorage.getItem("selected_building1");
   console.log("buidling_name=",buidling_name);
        fetch(url, {
                  method: 'POST',
                  body: JSON.stringify({
   "manager_email":manager_mail,
   "building_name":buidling_name
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
             let tab =`<center> 
              

             </center>`;
             
             
           tab +=
                 `<tbody id="table_border" style="text-align:center">
                 <tr>
                 <th data-prirority="6">Id</th>
                 <th>Tenant name </th>
                 <th>Tenant Mobile Number </th>
                 <th>Floor No</th>
                 <th>Room No</th>
                 <th>Bed No</th>
                 <th>Room Sharing</th>
                 <th>Total Amount</th>
                 <th>Paid Amount</th>
                 <th>Due</th>
                 <th>Available</th>
                 
                 </tr>`;
            let i = 1;
             
             // Loop to access all rows   <td>${r.tenant_email}</td>	 <th>Tenanat Email</th>
             for (let r of data) {
                 tab += `<tr>
             <td>${i} </td>
             <td>${r.tenant_name}</td>
             <td>${r.tenant_mobile}</td>
             <td>${r.floor_no}</td>
             <td>${r.room_no}</td>
             <td>${r.bed_no}</td>
             <td>${r.no_of_persons_sharing_per_room}</td>    
              <td>${r.amount}</td>
             <td>${r.paid_amount}</td>
            <td>${r.amount-r.paid_amount}</td>
            
             
             `;
             
             if(r.Available.toLowerCase()=="yes" )
                {
                  console.log(r.Available);
                 // tab += ` <td><input type="submit" value="Book" onclick="bookRoom(${r.floor_no},${r.room_no},${r.bed_no})"></td>`	;
                  tab+=`<td><a href="payAmount.php?floor_no=${r.floor_no}&room_no=${r.room_no}&bed_no=${r.bed_no}&total_amount=${r.amount}">Book</a></td>`
            
                }
             else{
              console.log(r.Available);
             // tab+=`<td><a href="vacateRoom.php?floor_no=${r.floor_no}&room_no=${r.room_no}&bed_no=${r.bed_no}&total_amount=${r.amount}">Vacate</a></td>`
            tab += ` <td><input type="submit" value="Vacate" onclick="vacateRoom(${r.tenant_mobile},${r.floor_no},${r.room_no},${r.bed_no})"></td>`	;

            //${r.floor_no},${r.room_no},${r.bed_no}
             }
             
             tab += `</tr>`;
             i=i+1;
             }
             tab=tab+` </tbody>`;
             
              // Setting innerHTML as tab variable
             document.getElementById("tblData").innerHTML = tab;
            }
            function bookRoom(floor_no,room_no,bed_no){
              console.log(floor_no,room_no,bed_no,);
            }
            // function vacateRoom(floor_no,room_no,bed_no){
            //   console.log(floor_no,room_no,bed_no);
            // }
            

 </script>   
 <script>
      function vacateRoom(tenant_mobile,Floor_no,room_no,bed_no){
     console.log(tenant_mobile,Floor_no,room_no,bed_no);
                       
        var user_answer = confirm('you will be vacated from this room , is that Ok ..?');
if(user_answer==true)
                  {
                    //fetch('https://iqbetspro.com/pg-management/vacate-Tenant-API.php', {
                      fetch('https://iqbetspro.com/pg-management/vacate-Tenant-API-without-IMAGES-Tenant-Table.php', {
                      
                      method: 'POST',
                      body: JSON.stringify(
                        {  
                          "tenant_mobile":tenant_mobile,
                          "floor_no":Floor_no,
                          "room_no":room_no,
                          "bed_no":bed_no

                    }

                  )
                  })
                  .then(function(response){ 
                  return response.json()})
                  .then(function(data)
                  {console.log((data));
                    alert("Vacated Successfully...!");
                    const url ="https://iqbetspro.com/pg-management/all-bed-details-GET-API.php";
                    getapi(url);
                }).catch(error => alert('Error:', error)); 
             
                }  
               
      }
          

  </script>


<!-- 
<script>
   var getuser=document.getElementById("nm").value;
   alert(getuser);  
</script>         -->
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
   table = document.getElementById("tblData");
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tblData'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Rooms-Details.pdf");
                }
            });
        }
    </script>
     <script>
   function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
    </body>

</html>