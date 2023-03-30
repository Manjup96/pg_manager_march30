
<?php

 $floor = $_GET['floor'];
 $room  = $_GET['room'];
 $bed = $_GET['bed'];
 
 $PG_Name=$_GET['PG_Name'];
//  $manager_mobile=$_GET['manager_mobile'];
//  $manager_email=$_GET['manager_email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Rooms</title>
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
 <div  id="data" hidden>
 <h1> Floor No: <?php echo $floor ?></h1>
<input type="text" id="floor_num" value=" <?php echo $floor ?>">
<h1> Room No: <?php echo $room ?></h1>
<input type="text" id="room_num" value="<?php echo $room ?>">
<h1> Bed No: <?php echo $bed ?></h1>
<input type="text" id="bed_num" value="<?php echo $bed ?>"> 
</div>

<div class="container-fluid p-5 bg text-black text-center">
  <h1>manage Rooms </h1>
  <!-- <p>Resize this responsive page to see the effect!</p>  -->
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-3">
       <h3>Building 
         <!-- <button class="btn" id="add_more_building_fields" ><i class=" fa fa-solid fa-plus"></i></button> --> </h3>  
      
      <!--<button class="building" role="button">MNJ1</button>--> 
     <button class="btn" id="PG_Name" value=" <?php echo $PG_Name  ?>" >  <?php echo $PG_Name  ?></button> 
      
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

<script>
   document.getElementById("data").style.display="block";
</script>

<script>

    // for floor fields  
var survey_floor_options = document.getElementById('survey_floor_options');
var add_more_floor_fields = document.getElementById('add_more_floor_fields');
var remove_floor_fields = document.getElementById('remove_floor_fields');
var floor_num = document.getElementById('floor_num').value;
 
  // for room fields  

var survey_room_options = document.getElementById('survey_room_options');
var add_more_room_fields = document.getElementById('add_more_room_fields');
var remove_room_fields = document.getElementById('remove_room_fields');
var room_num = document.getElementById('room_num').value;
console.log("room_num=",room_num);
console.log("parse INt room_num=",101+parseInt(room_num));


   
// for bed fields  
var alpha=65;
let text = String.fromCharCode(alpha);
var survey_bed_options = document.getElementById('survey_bed_options');
var add_more_bed_fields = document.getElementById('add_more_bed_fields');
var remove_bed_fields = document.getElementById('remove_bed_fields');
var bed_num = document.getElementById('bed_num').value;
console.log("bed_num=",bed_num);



  var final_floor_no=floor_num;  
   var final_room_no=room_num;  
  console.log("final floor n room numbers are",final_floor_no,final_room_no);
  
  var rooms_array=[];
//int l,m,n,floor_num=5,room_num=2;
    for(l=101;l<=(parseInt(final_floor_no)*100)+parseInt(room_num);l++)
       {
    for(m=1;m<=parseInt(room_num);m++)
        { 
           for(n=1;n<=parseInt(final_floor_no);n++)
           {
               if(l>(n*100+parseInt(room_num)) && l<=((n+1)*100))
                l=(n+1)*100+1;
              
           }
        }
           rooms_array.push(l);
       }


console.log(rooms_array);




var beds_array=[],ii,jj,kk,no_of_beds=2;
function removeDuplicates(arr) {
    //console.log("in removeDuplicates(arr) fucnrtion");
      let unique = arr.reduce(function (acc, curr) {
            if (!acc.includes(curr))
                acc.push(curr);
            return acc;
        }, []);
        return unique;
    }
rooms_array=removeDuplicates(rooms_array);
//console.log(removeDuplicates(rooms_array));

    console.log("no of rooms=",rooms_array.length);
    console.log(" rooms=",rooms_array);
      for (jj=0;jj<rooms_array.length;jj++)
      {
        for(ii=1;ii<=no_of_beds;ii++)
        {
            kk=rooms_array[jj]+"_"+ii;
            beds_array.push(kk);
        }
        
      }


console.log(beds_array);

const buttonForBeds = e => {
    //  console.log("button pressed room num:",e.target.id); 
     bedsUnderSpecificRoomsDisplay(e.target.id);
}
var current_beds=[];
// bedsUnderSpecificRoomsDisplay(101);
function bedsUnderSpecificRoomsDisplay(roomNumber){
    
    console.log("button pressed room num:",roomNumber); 
    var check_bed= roomNumber+"_"+1;
    console.log("floor_num",floor_num);
    // for(var ty=0;ty<beds_array.length;ty++){
    //     var bed_check = document.getElementById(beds_array[ty]);
    //     if(bed_check)
    //       current_beds.push(beds_array[ty]);
        
    // }
    // console.log("initial beds=",current_beds);
    if(current_beds.includes(check_bed))
    {
        console.log("Bed already exists");
    }
    else
    {
        for(var t=1;t<=no_of_beds;t++)
          {
              var bed_button_check=document.getElementById(roomNumber+"_"+t);
              console.log("Button check:",bed_button_check);
              if(bed_button_check)
              {
                
              }
              else
              {
              survey_bed_options = document.getElementById("survey_bed_options");
              const btn =  document.createElement("BUTTON");
              //btn.innerHTML = k;
              btn.innerHTML = roomNumber+"_"+t;
              //giving Id to Bed 
              btn.id=roomNumber+"_"+t;
              
             
              var style = document.createElement('style');
              style.type = 'text/css';
              style.innerHTML = '.BttnClass  {margin:10px}';
              document.head.appendChild(style);
              btn.className="BttnClass";
              survey_bed_options.appendChild(btn);
              beds_array.push(roomNumber+"_"+t);
              current_beds.push(roomNumber+"_"+t);
                    
              }
              

              
          }
    }
    console.log("before removing duplicate current_beds=",current_beds);
  current_beds=removeDuplicates(current_beds);
  console.log("after removing current_beds=",current_beds);
  
    var to_hide="";
    // console.log("hided beds=",typeof(beds_array));
    beds_array=removeDuplicates(beds_array);
    console.log("Beds array =",beds_array);
 
 
const namesArr = beds_array;
const namesToDeleteArr =current_beds;
const namesToDeleteSet = new Set(namesToDeleteArr);
const newArr = namesArr.filter((name) => {
  // return those elements not in the namesToDeleteSet
  return !namesToDeleteSet.has(name);
});

console.log("after removing Duplicate beds from  Beds array=",newArr);


var to_hide="";
     for( var rt=0;rt<newArr.length;rt++)
     {
        { 
            to_hide = document.getElementById(newArr[rt]);
            
                        if(to_hide)
                            {
                                 to_hide.remove();
                            }
            
           
        }
     }
     
     current_beds=[];
}


var j=0;
roomsUnderSpecificFloorDisplay(1);
function roomsUnderSpecificFloorDisplay(id){
    var no_of_rooms1=parseInt(final_room_no);
    console.log("Floor Number: ",id);
    var x=1,r=0,v=id,y,flr;
    var counter=0;
    if(parseInt(id)!=1)
    {
        console.log("floor_no=",id);
        for( flr=0;flr<rooms_array.length;flr++)
           { 
            //   console.log(rooms_array[flr]);
            
                r = (parseInt(id)*100);
            if(!((rooms_array[flr]>r) && (rooms_array[flr]<(r+99)))==false)
             console.log("check=",r,rooms_array[flr],!((rooms_array[flr]>r) && (rooms_array[flr]<(r+99)))==false);
            
            if(!((rooms_array[flr]>r) && (rooms_array[flr]<(r+99))))
                        { 
                            // console.log("going to hide")
                            to_hide = document.getElementById(rooms_array[flr]);
                            // console.log(to_hide);
                        if(to_hide)
                            {
                                to_hide.style.display = "none";
                                // console.log("room no:",rooms_array[flr]);
                            }
                        }
                        else{
               to_hide = document.getElementById(rooms_array[flr]);
               if(to_hide)
                            {
                                to_hide.style.display = "block";
                                // console.log("room no:",rooms_array[flr]);
                            }
           }
           
          
           }
           
    
        
       bedsUnderSpecificRoomsDisplay(r+1); 
    }
    
    flr=0;r=0;
    
    
    for(j=(id * 100)+1;j<((id * 100)+1)+parseInt(final_room_no);j++) 
 { 
     console.log("Final room no and id ",final_floor_no,id);
  if(!(document.getElementById(j)))
  {
      survey_room_options = document.getElementById("survey_room_options");
  const btn =  document.createElement("BUTTON");
  btn.innerHTML = j;
  btn.id=j;
  rooms_array.push(j);
  var style = document.createElement('style');
  style.type = 'text/css';
  style.innerHTML = '.BttnClass  {margin:10px}';
  document.head.appendChild(style);
  btn.className="BttnClass";
  survey_room_options.appendChild(btn);
  btn.addEventListener("click", buttonForBeds);
  }
}

if(id==1){
     for( flr=0+room_num;flr<rooms_array.length;flr++){
         to_hide = document.getElementById(rooms_array[flr]);
              if(to_hide)
                            {
                                to_hide.style.display = "none";
                                // console.log("room no:",rooms_array[flr]);
                            }
     }
     for( flr=0;flr<room_num;flr++){
         to_hide = document.getElementById(rooms_array[flr]);
              if(to_hide)
                            {
                                to_hide.style.display = "block";
                                // console.log("room no:",rooms_array[flr]);
                            }
     }
     bedsUnderSpecificRoomsDisplay(101); 
}

}


const buttonPressed = e => {
    // console.log("button pressed floor num:",e.target.id); 
 //final_floor_no=e.target.id;
  roomsUnderSpecificFloorDisplay(e.target.id);// Get ID of Clicked Element
}
for(var i=1;i<=final_floor_no;i++)
 { 
     survey_floor_options = document.getElementById("survey_floor_options");
  const btn =  document.createElement("BUTTON");
  btn.innerHTML = i;
  btn.id=i; // floor no 
  var style = document.createElement('style');
  style.type = 'text/css';
  style.innerHTML = '.BttnClass  {margin:10px}';
  document.head.appendChild(style);
  btn.className="BttnClass";
  survey_floor_options.appendChild(btn);
 btn.addEventListener("click", buttonPressed);

     
 }
  

add_more_floor_fields.onclick = function()
{
  if(i<=20)
  { 
     
    const survey_floor_options = document.getElementById("survey_floor_options");
    const btn =  document.createElement("BUTTON");
    btn.innerHTML = i;
    btn.id=i;
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.BttnClass  {margin:10px}';
    document.head.appendChild(style);
    btn.className="BttnClass";
    survey_floor_options.appendChild(btn);
    i++;
    final_floor_no=i-1;
    btn.addEventListener("click", buttonPressed);
  console.log("Final floor nu:",final_floor_no);
  }
  else
  {
    alert("limit should not exceed more than 20");
  }
}

remove_floor_fields.onclick = function()
{ 
    i--;
  final_floor_no=i-1;
  console.log("Final floor nu:",final_floor_no);
  var button = survey_floor_options.getElementsByTagName('BUTTON');
  if(button.length > 1) 
  {
    survey_floor_options.removeChild(button[(button.length) - 1]);
  }
}



  

// for loop 



//  for(var j=101;j<101+parseInt(room_num);j++) 
//  { 
  
//   survey_room_options = document.getElementById("survey_room_options");
//   const btn =  document.createElement("BUTTON");
//   btn.innerHTML = j;
//   var style = document.createElement('style');
//   style.type = 'text/css';
//   style.innerHTML = '.BttnClass  {margin:10px}';
//   document.head.appendChild(style);
//   btn.className="BttnClass";
//   survey_room_options.appendChild(btn);
// }

 
  

add_more_room_fields.onclick = function()
{
  if(j>=10)
  {
   const survey_room_options = document.getElementById("survey_room_options");
   const btn =  document.createElement("BUTTON");
   btn.innerHTML = j;
   btn.id=j;
   var style = document.createElement('style');
   style.type = 'text/css';
   style.innerHTML = '.BttnClass  {margin:10px}';

   document.head.appendChild(style);
   btn.className="BttnClass";
   survey_room_options.appendChild(btn);
   j++;
   final_room_no=j-2;
   rooms_array.push(j);
   btn.addEventListener("click", buttonForBeds);
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




// for(var k=101;k<=100+parseInt(bed_num);k++) 
//  { 
  
//   survey_bed_options = document.getElementById("survey_bed_options");
//   const btn =  document.createElement("BUTTON");
//   //btn.innerHTML = k;
//   btn.innerHTML = k+"_"+text;
//   var style = document.createElement('style');
//   style.type = 'text/css';
//   style.innerHTML = '.BttnClass  {margin:10px}';
//   document.head.appendChild(style);
//   btn.className="BttnClass";
//   survey_bed_options.appendChild(btn);
// }
 
  var final_bed_no=bed_num;   



no_of_bed=1;
add_more_bed_fields.onclick = function()
{
  if(no_of_bed<=final_bed_no)
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
    
    final_bed_no= no_of_bed-1;
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
