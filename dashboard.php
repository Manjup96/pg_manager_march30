<!DOCTYPE html>
<html>
<head>
   
<!-- <body style="background-color:#D6DBDF;"> -->
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
		<style>
		.rectangle {
			width: 400px;
			height: 300px;
			border: 1px solid #000;
			position: relative;
			left:40%;
		}

		.circle {
  width: 50px;
  height: 50px;
  border-radius: 60%;
  text-align: center;
  line-height: 50px;
  font-weight: bold;
  font-size: 24px;
  position: relative;
  margin-bottom: 10px;
  padding: 10px;
}

.circle.yes {
  background-color: green;
}

.circle.no {
  background-color: red;
}

.circle:first-child {
  left: 0;
}

.circle:nth-child(2) {
  left: 120px;
}

.circle:last-child {
  right: 0;
}

.circle span {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
    font-size:12px;
}

      .bg-slate-200{
        background-color: rgb(226 232 240);
      }
      .bg-stone-500{
        /* background-color: rgb(120 113 108); */
        background-color: rgb(214 211 209);
      }
      .bg-orange-100{
        background-color: rgb(255 237 213);
      }
      .bg-teal-50{
        background-color: rgb(240 253 250);
      }
      .bg-green-100{
        background-color: rgb(220 252 231);
      }
    </style>
<body class="smokewhite_bg_color">
    
        <?php
        $page = 'dashboard';
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

                         
           
                                  
<div class="form_group mt-2 text-center" id="before_selecting_building_name_dropdown">
 <!--  <select class="form-control text-center" name="" id="building"></select> --> 
 <label for="building" style="font-weight:bold;color:black;margin-left:-150px;">Select building:</label>
   <select name="building" id="building" onchange="selectedBuilding()">
       
       
   </select> 

 </div>
 
<div class="form_group mt-2 mb-2 " style="margin-left:350px;" id="after_selecting_building_name_dropdown" hidden>
 
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





   <div class="d-flex flex-column justify-content-center">
    <div class="container" style="margin-right:500px">
    <div class="row">            
        
                                 <div class="col-lg-3 mb-2">
                                    <div class="card bg-white text-black shadow" >
                                        <div class="card-body" >
                                            Total Rooms  <label id="total_rooms"></label>

                                            <div class="text-white-100 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card bg-stone-500 text-black shadow">
                                        <div class="card-body">
                                            Total Beds <label id="total_beds"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card bg-white text-black shadow">
                                        <div class="card-body"> 
                                            Available Beds <label id="total_availablebeds"></label>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
</div>
<div class="row">

                                   <div class="col-lg-3 mb-2">
                                    <div class="card bg-stone-500 text-black shadow">
                                        <div class="card-body">
                                            Income <label id="income"></label>
                                            <input type="text" id="income_total" hidden >
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card bg-white text-black shadow" >
                                        <div class="card-body">
                                            Expenses <label id="expenditure"></label>
                                            <input type="text" id="expenditure_total" hidden>
                                            <div class="text-white-50 small"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card bg-stone-500 text-black shadow">
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
                                          <input type="text" id="Solved" hidden>
                                          <input type="text" id="Pending" hidden>
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




                        </div>
                
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="chartCard">
        <div class="chartBox">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="chartCard">
        <div class="chartBox">
          <!--<canvas id="barChart"></canvas>-->
        </div>
      </div>
    </div>
  </div>
</div>

   <div class="barChartCard">
  <div class="barChartBox">
    <canvas id="barChart" class="barChartCanvas"></canvas>
  </div>
  <div class="barChartTitle">Bar Chart Title</div>
  <div class="barChartXAxis">X Axis Label</div>
  <div class="barChartYAxis">Y Axis Label</div>
  <div class="barChartLegend">
    <div class="barChartLegendItem">
      <div class="barChartLegendColor" style="background-color: red;"></div>
      <div>Legend Item 1</div>
    </div>
    <div class="barChartLegendItem">
      <div class="barChartLegendColor" style="background-color: blue;"></div>
      <div>Legend Item 2</div>
    </div>
  </div>
</div>

 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    
<script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script>

        let solved1, pending1;
        // const get_total_expenditure ="https://iqbetspro.com/pg-management/total-expenditure-GET-API.php";
        // const incUrl="https://iqbetspro.com/pg-management/total-income-GET-API.php";
          const dueUrl="https://iqbetspro.com/pg-management/total-dues-GET-API.php";
        
        
     
    
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
        show_accounts_compalints();
        show_pie_accounts();
        //get_incomeapi_search(get_total_income);
         //get_expenditure_api_search(get_total_expenditure);
       //  get_complaints_api_search(get_total_complaints);
         inside_dashborad_get_buiding_name();
         show_meals_count1();
         
       
         document.getElementById("before_selecting_building_name_dropdown").style.display="none";
//          var elements = document.getElementsByClassName("chartCard");
// for (var i = 0; i < elements.length; i++) {
//   elements[i].style.display = "block";
// }
         
   
    //id="after_selecting_building_name_dropdown"> id="before_selecting_building_name_dropdown"
    
    }
</script>
            

   
        
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    
<script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

  <!-- Barchart -->
  <script>
  
    function show_pie_accounts()
    {
        let income1,expenditure1;
         

const data1 = {
      labels: ['Income', 'Expenditure'],
      datasets: [{
        label: 'Accounts',
        //data: [income, expenditure],
        data: [],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(242, 38, 19, 1)',
          
          
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          
        ],
        borderWidth: 2
      }]
    };
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
         
             income1=data1[0]['Total income'];
             
         
          document.getElementById("income_total").value= income1;
       //  alert(income1);
         
         

              
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
         
           
             expenditure1=total_expenditure[0]['Total Expenses'];
             
         
          document.getElementById("expenditure_total").value= expenditure1;
          
        }
        
         updateAccounts(income1,expenditure1);
        
        function updateAccounts(income1,expenditure1)
        {
           
    // update datasets' data with the values of solved1 and pending1
data1.datasets[0].data = [73000, expenditure1];
    console.log("data sets ",data1.datasets[0].data);
    console.log("in update chart income and expensiture ",income1, expenditure1);
    
    // your chart code here
    // ...
            
    // config 
    const config_bar = {
      type: 'bar',
      data1,
      options: {
        plugins: {
          labels: {
            render : (args)=> {
            console.log("accounts pie chart values=",args);
            return `${args.label} : ${args.value}`
            //return `${args.label} : ${args.value} in  ${args.percentage}%`
          }
          }
        }
      }
    };
        
    // render init block
   const barChart = new Chart(
  document.getElementById('barChart'),
  config_bar
);
        }
 
    }

function show_accounts_compalints() {
  // define data here, but leave the datasets' data empty for now
  const data = {
    labels: ['Solved', 'Pending'],
    datasets: [{
      label: 'Complaints',
      data: [],
      backgroundColor: [
        'rgba(214,211,209)',
        'rgba(158, 158, 158)',
      ],
      borderColor: [
        'rgba(214,211,209)',
        'rgba(255,255,255)',
      ],
      borderWidth: 2
    }]
  };

  // define solved1 and pending1 outside of search_complaints
  let solved1;
  let pending1;

  async function search_complaints(data) {
    let result = data;
    let data1 = result;
    console.log(data1[0]['Solved Complaints']);
    console.log(data1[0]['Total Complaints']);
    
    let lab = `<label>${data[0]['Total Complaints']}</label>`;
    document.getElementById("complaints").innerHTML = lab;
    
    solved1 = data1[0]['Solved Complaints'];
    pending1 = data1[0]['Pending Complaints'];
    document.getElementById("Solved").value = solved1;
    document.getElementById("Pending").value = pending1;

    // call your function that needs access to solved1 and pending1 here
    updateChartData(solved1, pending1);
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
    
    
     
  
  function updateChartData(solved1, pending1) {
    // update datasets' data with the values of solved1 and pending1
    data.datasets[0].data = [solved1, pending1];
    console.log("data sets ",data.datasets[0].data);
    console.log("in update chart ",solved1, pending1);
    
    // your chart code here
    // ...
     // config 
    const config = {
      type: 'pie',
      data,
      options: {
        plugins: {
          labels: {
            render : (args)=> {
            console.log(args);
            //return `${args.label} : ${args.value}`
            return `${args.label} : ${args.value} in  ${args.percentage}%`
          }
          }
        }
        
      }
    };

   

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    
    
  }
}








    </script>
   
    <!-- Barchat CSS -->
     <style>
     .barChartCard {
  width: 100%;
  margin: 20px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.barChartBox {
  position: relative;
  height: 300px;
}

.barChartCanvas {
  max-width: 100%;
  height: auto !important;
}

.barChartTitle {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
}

.barChartXAxis {
  font-size: 14px;
  font-weight: bold;
}

.barChartYAxis {
  font-size: 14px;
  font-weight: bold;
}

.barChartLegend {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.barChartLegendItem {
  display: flex;
  align-items: center;
  margin-right: 20px;
}

.barChartLegendColor {
  width: 20px;
  height: 20px;
  margin-right: 5px;
}

     .chartContainer {
  display: flex;
  justify-content: center;
  align-items: center;
}

.chartCard {
  width: 100%;
  margin: 20px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.chartBox {
  position: relative;
  height: 300px;
}

.canvas {
  max-width: 100%;
  height: auto !important;
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

<div class="rectangle">
	
	<style>
	    .meals-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.meals-row {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
}

.meals-text {
  width: 100px;
  text-align: right;
  margin-right: 10px;
}


.yes {
  background-color: green;
}

.no {
  background-color: red;
}

	</style>
	

		
		
	<div class="meals-container">
  <div class="meals-row">
    <div class="meals-text">Breakfast</div>
    <div class="circle breakfast yes"><span id="breakfast-yes-count" class="count meals_text"></span></div>
    <div class="circle breakfast no"><span id="breakfast-no-count" class="count"></span></div>
  </div>
  <div class="meals-row">
    <div class="meals-text">Lunch</div>
    <div class="circle lunch yes"><span id="lunch-yes-count" class="count meals_text"></span></div>
    <div class="circle lunch no"><span id="lunch-no-count" class="count"></span></div>
  </div>
  <div class="meals-row">
    <div class="meals-text">Dinner</div>
    <div class="circle dinner yes"><span id="dinner-yes-count" class="count meals_text"></span></div>
    <div class="circle dinner no"><span id="dinner-no-count" class="count"></span></div>
  </div>
</div>
	</div>
	


	<script>
	function show_meals_count1()
	{
		// Define parameters
	 var manager_email = document.getElementById("manager_email").value;
   console.log("manager_email=",manager_email);
   var building_name = document.getElementById("building").value;
   console.log("building_name=",building_name);

		// Define data to send as JSON
		const data_meals = {
			building_name: building_name,
			manager_email: manager_email
		};

		// Make API request with JSON data
		fetch('https://iqbetspro.com/pg-management/GET-Meals-yes-or-no-API.php', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json'
			},
			body: JSON.stringify(data_meals)
		})
			.then(response => response.json())
			.then(data => {
			    console.log("breakfast yes count"+data[0].breakfast_yes_count);
// 			// Assign values to corresponding circles
// 				document.querySelector('.breakfast').classList.toggle('yes', data1.breakfast);
// 				document.querySelector('.breakfast').classList.toggle('no', !data1.breakfast);
// 				document.querySelector('.lunch').classList.toggle('yes', data1.lunch);
// 				document.querySelector('.lunch').classList.toggle('no', !data1.lunch);
// 				document.querySelector('.dinner').classList.toggle('yes', data1.dinner);
// 				document.querySelector('.dinner').classList.toggle('no', !data1.dinner);


// Sample counts for each meal type
let breakfastYesCount = data[0].breakfast_yes_count;
let breakfastNoCount = data[0].breakfast_no_count;
let lunchYesCount = data[0].lunch_yes_count;
let lunchNoCount = data[0].lunch_no_count;
let dinnerYesCount = data[0].dinner_yes_count;
let dinnerNoCount = data[0].dinner_no_count;


// Display the counts for each meal type
// document.getElementById('breakfast-count').innerHTML = 'Breakfast: ' + (breakfastYesCount + breakfastNoCount);
//document.getElementById('breakfast-count').innerHTML = 'Breakfast: ';
document.getElementById('breakfast-yes-count').innerHTML = 'Yes:' + breakfastYesCount;
document.getElementById('breakfast-no-count').innerHTML = 'No:' + breakfastNoCount;

// document.getElementById('lunch-count').innerHTML = 'Lunch: ' + (lunchYesCount + lunchNoCount);
 //document.getElementById('lunch-count').innerHTML = 'Lunch: ';
document.getElementById('lunch-yes-count').innerHTML = 'Yes:' + lunchYesCount;
document.getElementById('lunch-no-count').innerHTML = 'No:' + lunchNoCount;

// document.getElementById('dinner-count').innerHTML = 'Dinner: ' + (dinnerYesCount + dinnerNoCount);
 //document.getElementById('dinner-count').innerHTML = 'Dinner: ';
document.getElementById('dinner-yes-count').innerHTML = 'Yes:' + dinnerYesCount;
document.getElementById('dinner-no-count').innerHTML = 'No:' + dinnerNoCount;

// Assign values to corresponding circles
			
			})
			.catch(error => console.error(error));
	}
	</script>

  </body> 
</html>