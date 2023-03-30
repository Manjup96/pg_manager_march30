<!DOCTYPE html>
<html>
<head>
   
<body style="background-color:#D6DBDF;">
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
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
  </head>
</head>
<body>
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
            
           // include_once "./config/dbconnect.php";
        ?>
        
<?php
// Start the session
 //session_start();

// $building_name = $_GET["building"];
// if(isset($_SESSION['building']))
// {
//  $building_name = $_SESSION['building'];
// }
// else
// {
//     $building_name = $_SESSION['building_name'];
// }
?>


    <!-- Color System -->
    <!-- <label style="color:red"><?php #echo $property_name; ?></label>  -->

                         
                           
<div class="form_group mt-5 text-center" id="before_selecting_building_name_dropdown">
 <!--  <select class="form-control text-center" name="" id="building"></select> --> 
 <label for="building" style="font-weight:bold;color:black;margin-right:0px">Select building:</label>
   <select name="building" id="building" onchange="selectedBuilding()">
       
       
   </select> 

 </div>
 
<div class="form_group mt-5 text-center" id="after_selecting_building_name_dropdown" hidden>
 
 The Selected buiding id : <b> <span id="building1"></span></b>
 <button id="change_building_name"  onclick="show_selectedBuilding()"> Change Building Name</button>
 <script>
 function inside_dashborad_get_buiding_name()
 {
 document.getElementById("building1").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
    // [DIV].style.visibility='visible'
      //document.getElementById("after_selecting_building_name_dropdown").style.display="block";
      //document.getElementById("after_selecting_building_name_dropdown").style.visibility='visible';
      document.getElementById('after_selecting_building_name_dropdown').hidden = false;
 }
 </script>

 </div>




    <div class="container" style="margin-right:500px">
    <div class="row">            
        
                                 <div class="col-lg-3 mb-4">
                                    <div class="card bg-dark text-white shadow" >
                                        <div class="card-body" >
                                            Total Rooms  <label id="total_rooms"></label>

                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Total Beds <label id="total_beds"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body"> 
                                            Available Beds <label id="total_availablebeds"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
</div>
<div class="row">

                                   <div class="col-lg-3 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Income <label id="income"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-danger text-white shadow" >
                                        <div class="card-body">
                                            Expenses <label id="expenditure"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Dues  <label id="dues"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                          Complaints : <label id="complaints" onclick="window.location.href ='complaint_table.php';"> </label>
                                          <!--Complaints  <label id="complaints" onclick="javascript:alert('event has been triggered');"></label>-->
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
</div>
                               <!-- <div class="col-lg-3 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

              <!-- Barchart -->
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>

                        </div>

   

       
            
        <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script>


        // const get_total_expenditure ="https://iqbetspro.com/pg-management/total-expenditure-GET-API.php";
        // const incUrl="https://iqbetspro.com/pg-management/total-income-GET-API.php";
         const dueUrl="https://iqbetspro.com/pg-management/total-dues-GET-API.php";
        
        
       const get_total_expenditure = "https://iqbetspro.com/pg-management/total-expenditure-manager-mail-buidling-GET-API.php";
        
  

const get_total_income="https://iqbetspro.com/pg-management/total-income-mulitple-buildings-GET-API.php";



    async function get_incomeapi_search(url) {
      console.log("url=",url);
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   var buidling_name = document.getElementById("building").value;
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
            //please check from here, i worte code 
              
                console.log("ttoal income=",data);
                search1(data); // error 
        })
    }
        
    get_incomeapi_search(get_total_income);
    
    
    async function search1(data) 
    {
          
        
            let result = data;
             
             let data1 = result;
             
             console.log(data1[0]['Total income']);
            let lab=`<label>${data[0]['Total income']}</label>`;
         document.getElementById("income").innerHTML = lab;

              
        }
     
        

    async function get_expenditure_api_search(url) {
      console.log("url=",url);
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   var buidling_name = document.getElementById("building").value;
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
            //please check from here, i worte code 
              
                console.log("toTal EXPENDITURE=",data);
                search_expenditure(data); // error 
        })
    }
        
    get_expenditure_api_search(get_total_expenditure);
    
    
   
    async function search_expenditure(data) 
    {

            let result = data;
             
             let total_expenditure = result;
             
             console.log(total_expenditure[0]['Total Expenses']);
           let lab=`<label>${total_expenditure[0]['Total Expenses']}</label>`;
          // let lab=`<label>${data[0]['Total income']}</label>`;
         document.getElementById("expenditure").innerHTML = lab;
        }
  
     
const get_total_complaints="https://iqbetspro.com/pg-management/total-no-of-complaints.php";



    async function get_complaints_api_search(url) {
      console.log("url=",url);
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
   var buidling_name = document.getElementById("building").value;
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
            //please check from here, i worte code 
              
                console.log("ttoal complaints=",data);
                search_complaints(data); // error 
        })
    }
        
    get_complaints_api_search(get_total_complaints);
    
    
    async function search_complaints(data) 
    {
          
        
            let result = data;
             
             let data1 = result;
             
             console.log(data1[0]['Total Complaints']);
            let lab=`<label>${data[0]['Total Complaints']}</label>`;
         document.getElementById("complaints").innerHTML = lab;

              
        }
     
        

    
    async function getDueApi(url) {
             let result = await fetch(url);
             let data = await result.json();
             console.log(data[0]['Total Dues']);
            let lab=`<label>${data[0]['Total Dues']}</label>`;
         document.getElementById("dues").innerHTML = lab;
         }
      //   getExpApi(get_total_expenditure);
       //  getIncApi(incUrl);
         getDueApi(dueUrl);

         const totalRoomsUrl ="https://iqbetspro.com/pg-management/total-rooms-GET-API.php";
        const totalBedsUrl="https://iqbetspro.com/pg-management/total-no-of-beds-GET-API.php";
        const totalAvailableBedsUrl="https://iqbetspro.com/pg-management/total-beds-Available-GET-API.php";
         const totalComplaintssUrl ="https://iqbetspro.com/pg-management/total-rooms-GET-API.php";
     async function getTotalRoomsApi(url) {
             let result = await fetch(url);
             let data = await result.json();
             let lab=`<label>${data[0]['Total Rooms']}</label>`;
         document.getElementById("total_rooms").innerHTML = lab;
         }
    async function getTotalBedsApi(url) {
             let result = await fetch(url);
             let data = await result.json();
            let lab=`<label>${data[0]['Total Beds']}</label>`;
         document.getElementById("total_beds").innerHTML = lab;
         }
    async function getTotalAvailableBedsApi(url) {
             let result = await fetch(url);
             let data = await result.json();
            let lab=`<label>${data[0]['Total Available Beds']}</label>`;
         document.getElementById("total_availablebeds").innerHTML = lab;
         }
         getTotalRoomsApi(totalRoomsUrl);
         getTotalBedsApi(totalBedsUrl);
         getTotalAvailableBedsApi(totalAvailableBedsUrl);

        </script>

  
<script>
function show_selectedBuilding(){
    selectedBuilding();
    // alert("in show_selectedBuilding" );
     document.getElementById("before_selecting_building_name_dropdown").style.display="block";
     document.getElementById('after_selecting_building_name_dropdown').hidden = true;
     
    //selectedBuilding();
}
    function selectedBuilding(){
         
       
        var selected_building= document.getElementById("building").value;;
        // alert(selected_building);
        console.log(selected_building);
        localStorage.setItem("selected_building1", selected_building);
        //return true;
         get_incomeapi_search(get_total_income);
         get_expenditure_api_search(get_total_expenditure);
         get_complaints_api_search(get_total_complaints);
         inside_dashborad_get_buiding_name();
         document.getElementById("before_selecting_building_name_dropdown").style.display="none";
   
    //id="after_selecting_building_name_dropdown"> id="before_selecting_building_name_dropdown"
    
    }
</script>
        

  <!-- Barchart -->
  <script>
    // setup 
    const data = {
      labels: [ 'Total Bed', 'Available Beds'],
      datasets: [{
        label: 'PG Manager',
        data: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1],
        backgroundColor: [
          'rgba(40, 40, 40, 0.2)',
          'rgba(54, 60, 60, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1,
        barThickness:80
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>
   
    <!-- Barchat CSS -->
     <style>
     
     * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      
      .chartCard {
        width: 100vw;
        padding-bottom:30px;     
        display: flex;
        align-items: center;
        justify-content: start;
        margin-left:100px;
      }
      
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        
      }

    </style>

 <script>
  var manager_mail = document.getElementById("manager_email").value;
  console.log(manager_mail);
  fetch('https://iqbetspro.com/pg-management/GET-Building-details-API.php', {
  
      method: 'POST',
      body: JSON.stringify(
        {
          "manager_email":manager_mail
    }),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      }
      })
      .then(function(response){ 
      return response.json()})
      .then(function(data)
      {
        console.log(data);
        // alert("ok");
        var option ="";
        var option ="<option value=''>Select the Building name</option>";
        for (var i=0;i<data.length;i++)
        {
          option+= '<option value="' + data[i].building_name + '" >' + data[i].building_name + "</option>"
        }
  
        document.getElementById('building').innerHTML = option;
    })
     
</script>
</html>