
<?php

 $floor = $_GET['floor'];
 $room  = $_GET['room'];
 $bed = $_GET['bed'];
 
 $PG_Name=$_GET['PG_Name'];
 $manager_mobile=$_GET['manager_mobile'];
 $manager_email=$_GET['manager_email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<body style="background-color:#ececec;">
  <title>Bootstrap 5 Example</title>
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
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
            include "./commonlinks.php";
           
        ?>


</head>
<style>
  .btn {
  background-color: white;
  border: none;
  color: black;
  padding: 12px 16px;
  font-size: 22px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: rgb(190, 192, 199);
}
</style>

<body>
 <div  id="data">
 <h1> Floor No: <?php echo $floor ?></h1>
<input type="text" id="floor_num" value=" <?php echo $floor ?>">
<h1> Room No: <?php echo $room ?></h1>
<input type="text" id="room_num" value="<?php echo $room ?>">
<h1> Bed No: <?php echo $bed ?></h1>
<input type="text" id="bed_num" value="<?php echo $bed ?>"> 
</div>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>manage Rooms </h1>
  <!-- <p>Resize this responsive page to see the effect!</p>  -->
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-3">
       <h3>Building 
         <!-- <button class="btn" id="add_more_building_fields" ><i class=" fa fa-solid fa-plus"></i></button> --> </h3>  
      
      <button class="building" role="button">MNJ1</button>
      
      <div id="survey_building_options"> 
        <div id="div_building_container"></div>
        </div>
       <div class="controls_building">
       <!-- <a href="#" id="remove_building_fields"><i class="fa fa-plus"></i>Remove Field</a> -->
       </div>

    </div>
    <div class="col-sm-3 " >
      <h3>Floor    <button class="btn" id="add_more_floor_fields"  ><i class=" fa fa-solid fa-plus" ></i></button> </h3>
      <div id="survey_floor_options" >
      <div id="div_floor_container"> </div> 
        </div>
       <div class="controls_floor"> 
      <a href="#" id="remove_floor_fields"><i class="fa fa-plus"></i>Remove Floor</a>
      </div>
    </div>
     
    <div class="col-sm-3 " >
      <h3>Room    <button class="btn" id="add_more_room_fields"><i class=" fa fa-solid fa-plus" ></i></button> </h3>
    <div id="survey_room_options"> 
       <div id="div_room_container">  </div>
        </div>
      <div class="controls_room">
      <a href="#" id="remove_room_fields"><i class="fa fa-plus"></i>Remove Room</a>
      </div>
    </div>

  
    <div class="col-sm-3" >
      <h3>Bed   <button class="btn" id="add_more_bed_fields" ><i class=" fa fa-solid fa-plus" ></i></button> </h3>
      <div id="survey_bed_options">
       <div id="div_bed_container"></div>
      </div>
      <div class="controls_bed">
        <a href="#" id="remove_bed_fields"><i class="fa fa-plus"></i>Remove Bed</a>
      </div>

    </div>
      
   
    
    </div>
  </div>
</body>
<script>
   document.getElementById("data").style.display="block";
</script>

<script>

    // for floor fields  
var survey_floor_options = document.getElementById('survey_floor_options');
var add_more_floor_fields = document.getElementById('add_more_floor_fields');
var remove_floor_fields = document.getElementById('remove_floor_fields');
var floor_num = document.getElementById('floor_num').value;
console.log(floor_num);

for(var i=1;i<=floor_num;i++)
 { survey_floor_options = document.getElementById("survey_floor_options");
  const btn =  document.createElement("BUTTON");
  btn.innerHTML = i;
  var style = document.createElement('style');
  style.type = 'text/css';
  style.innerHTML = '.BttnClass  {margin:10px}';
  document.head.appendChild(style);
  btn.className="BttnClass";
  survey_floor_options.appendChild(btn);}

  var final_floor_no=floor_num;    

add_more_floor_fields.onclick = function()
{
  if(i<=20)
  { 
     
    const survey_floor_options = document.getElementById("survey_floor_options");
    const btn =  document.createElement("BUTTON");
    btn.innerHTML = i;
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.BttnClass  {margin:10px}';
    document.head.appendChild(style);
    btn.className="BttnClass";
    survey_floor_options.appendChild(btn);
    i++;
    final_floor_no=i-1;
  console.log("Final floor nu:",final_floor_no);
  }
  else
  {
    alert("limit should not exceed more than 20");
  }
}

remove_floor_fields.onclick = function()
{ i--;
  final_floor_no=i-1;
  console.log("Final floor nu:",final_floor_no);
  var button = survey_floor_options.getElementsByTagName('BUTTON');
  if(button.length > 1) 
  {
    survey_floor_options.removeChild(button[(button.length) - 1]);
  }
}



    // for room fields  

var survey_room_options = document.getElementById('survey_room_options');
var add_more_room_fields = document.getElementById('add_more_room_fields');
var remove_room_fields = document.getElementById('remove_room_fields');
var room_num = document.getElementById('room_num').value;
console.log("room_num=",room_num);
 for(var j=101;j<=101+parseInt(room_num);j++) 
 { 
  
  survey_room_options = document.getElementById("survey_room_options");
  const btn =  document.createElement("BUTTON");
  btn.innerHTML = j;
  var style = document.createElement('style');
  style.type = 'text/css';
  style.innerHTML = '.BttnClass  {margin:10px}';
  document.head.appendChild(style);
  btn.className="BttnClass";
  survey_room_options.appendChild(btn);
}
 
  var final_room_no=room_num;   

add_more_room_fields.onclick = function()
{
  if(j<=10)
  {
   const survey_room_options = document.getElementById("survey_room_options");
   const btn =  document.createElement("BUTTON");
   btn.innerHTML = j;

   var style = document.createElement('style');
   style.type = 'text/css';
   style.innerHTML = '.BttnClass  {margin:10px}';

   document.head.appendChild(style);
   btn.className="BttnClass";
   survey_room_options.appendChild(btn);
   j++;
   final_room_no=j-2;
  console.log("Final room num:",final_room_no);
  }
  else
  {
    alert("limit should not exceed more than 10");
  }
}
  

remove_room_fields.onclick = function()
{ j--;
  final_room_no=j-1;
  console.log("Final room no:",final_room_no);
  
  var button = survey_room_options.getElementsByTagName('BUTTON');
  if(button.length > 1) 
  {
    survey_room_options.removeChild(button[(button.length) - 1]);
  }
}
// remove_room_fields.onclick = function()
// {
//     var button = survey_room_options.getElementsByTagName('BUTTON');
//     if(button.length > 1)
//      {
//       survey_room_options.removeChild(button[(button.length) - 1]);
//      }
// }

   
// for bed fields  
var survey_bed_options = document.getElementById('survey_bed_options');
var add_more_bed_fields = document.getElementById('add_more_bed_fields');
var remove_bed_fields = document.getElementById('remove_bed_fields');
var bed_num = document.getElementById('bed_num').value;
console.log("bed_num=",bed_num);

for(var k=100;k<=100+parseInt(bed_num);k++) 
 { 
  
  survey_room_options = document.getElementById("survey_room_options");
  const btn =  document.createElement("BUTTON");
  btn.innerHTML = k;
  var style = document.createElement('style');
  style.type = 'text/css';
  style.innerHTML = '.BttnClass  {margin:10px}';
  document.head.appendChild(style);
  btn.className="BttnClass";
  survey_room_options.appendChild(btn);
}
 
  var final_bed_no=bed_num;   

var alpha=65;
let text = String.fromCharCode(alpha);
no_of_bed=1;
add_more_bed_fields.onclick = function()
{
  if(no_of_bed<=4)
  {
    text = String.fromCharCode(alpha);
    const survey_bed_options = document.getElementById("survey_bed_options");
    const btn =  document.createElement("BUTTON");
    btn.innerHTML = k+"_"+text;
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.BttnClass  {margin:10px}';
    document.head.appendChild(style);
    btn.className="BttnClass";
    survey_bed_options.appendChild(btn);
    alpha++;
    no_of_bed++;
    final_room_no= no_of_bed-1;
  console.log("Final bed num:",final_bed_no);
  }
  else
  {
  alert("limit should not exceed more than 5 beds");
  }
}
 

remove_bed_fields.onclick = function()
{ no_of_bed--;
  final_bed_no=no_of_bed-1;
  console.log("Final bed no:",final_bed_no);
  
  var button = survey_bed_options.getElementsByTagName('BUTTON');
  if(button.length > 1) 
  {
    survey_bed_options.removeChild(button[(button.length) - 1]);
  }
}


</script>

 



</body>
</html>
