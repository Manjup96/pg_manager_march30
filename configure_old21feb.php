

<html lang="en" class="h-90">
<head>
<!-- <body style="background-color:#ececec;"> -->
<title></title>
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
<style>
p.two {
  border-style: solid;
  border-width: medium;
  border-radius:20px;
}

h1 {
  color: #0f0f0e;
}
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #EC7063 ;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #EC7063 ;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.form-group div
{
  color: red;
  size: 80%
}
.hidden
{
  display:none;
}


.required::after{
  content:" *";
  color: red;
  font-size:20px;
}
</style>


<?php
            include "./adminHeader.php";
            include "./sidebar.php";
            include "./commonlinks.php";
           
        ?>
 
    <body class="h-100">
        
    
    <input type="text" id="PG_Name" value=" <?php echo $PG_Name  ?>" hidden>
  

 

     <!---- here in the above we will get created pg data -->
    	<div class="container h-90" style="margin-right:900px ">
            <div class="row h-90 ">
                <!-- <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">  -->
                  <div class="col-10 col-md-8 col-lg-6"> 
                    <form id="configure">
                    <h1 class="pt-3">Configure PG </h1>
                    <hr>
                    
                    <div class="flex-container">
                   
                    <!--<label for="building" class="pt-5"style="font-weight:bold;color:black;margin-right:0px">Select your PG:</label>-->
                    <!--<select id="building">-->
                    <!--    <option value="default">Select The Building Name</option>-->
                    <!--</select>-->
                    <br>
                    <label for="floor" class="pt-5"style="font-weight:bold;color:black;margin-right:0px">How many floors are there in your PG:</label>
                    <select id="floor">
                        <option value="default">Select The Floor No</option>
                    </select>
                    <br>
                    <label for="room" class="pt-5"style="font-weight:bold;color:black;margin-right:0px">How many rooms are there in each floor:</label>
                    <select id="room">
                        <option value="default">Select The Room No</option>
                    </select>
                    <br>
                    <label for="bed" class="pt-5"style="font-weight:bold;color:black;margin-right:0px">How many beds are there in each room:</label>
                    <select id="bed">
                        <option value="default">Select The Bed/sharing No</option>
                    </select>
                 
                    
                </div>
                <div class="pt-5">
                    <right>
                        <!-- <button type="submit" name="submit">Submit</button> -->
                         <button type="submit" name="submit">Submit</button> 
                         <button><a href="manage_pg.php"  class="btn btn-success btn-customized">Back </a></button> 
                        <!-- <button type="Back" name="Back">Back</button> -->
                </right>
                </div>
            </form>
                </div>
            </div>
                 </div>
               
               
            <script>
                           // script dropdown for building
                //           var select = document.getElementById("building");
                //           var name = document.getElementById('Name').value;
                //               console.log(Name);
                //          arr = ["Manju PG","Bhagath PG","varun PG"];
                 
                //  for(var j = 0; j < arr.length; j++)
                //  {
                //      var option = document.createElement("OPTION"),
                //          txt = document.createTextNode(arr[j]);
                //      option.appendChild(txt);
                //      option.setAttribute("value",arr[j]);
                //      select.insertBefore(option,select.lastChild);
                //  }
                //         // script dropdown for floors
                var floor = document.getElementById("floor"),
                         arr = ["G","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"];
                 
                 for(var i = 0; i < arr.length; i++)
                 {
                     var option = document.createElement("OPTION"),
                         txt = document.createTextNode(arr[i]);
                     option.appendChild(txt);
                     option.setAttribute("value",arr[i]);
                     floor.insertBefore(option,floor.lastChild);
                 }
                 
                                // script dropdown for rooms
                var rooms = document.getElementById("room"),
                         arr = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"];
                 
                 for(var i = 0; i < arr.length; i++)
                 {
                     var option = document.createElement("OPTION"),
                         txt = document.createTextNode(arr[i]);
                     option.appendChild(txt);
                     option.setAttribute("value",arr[i]);
                     rooms.insertBefore(option,rooms.lastChild);
                 }

                  
                                // script dropdown for beds
                var bed = document.getElementById("bed"),
                         arr = ["1","2","3","4","5","6","7","8","9","10"];
                 
                 for(var i = 0; i < arr.length; i++)
                 {
                     var option = document.createElement("OPTION"),
                         txt = document.createTextNode(arr[i]);
                     option.appendChild(txt);
                     option.setAttribute("value",arr[i]);
                     bed.insertBefore(option,bed.lastChild);
                 }
            </script>
            <script>
                    var form = document.getElementById('configure');
     
    form.addEventListener('submit', function(e){
     e.preventDefault()
     
         var selectFloor = document.getElementById("floor").value; 
         var selectRoom = document.getElementById("room").value; 
         var selectBed = document.getElementById("bed").value; 
      
        var manager_email = document.getElementById("manager_email").value;
     
     var manager_mobile = document.getElementById("manager_mobile").value;
      var PG_Name = document.getElementById("PG_Name").value;
         
         
         console.log("MGR phone=",manager_mobile);
         console.log("MGR email=",manager_email);
         console.log("MGR PG_Name=",PG_Name);
         
          console.log(selectFloor,selectRoom,selectBed);
     fetch('https://iqbetspro.com/pg-management/configure-POST-API.php', {
      method: 'POST',
      body: JSON.stringify({
          "PG_Name":PG_Name,
          "manager_mobile":manager_mobile,
           "manager_email":manager_email,
           "floor":selectFloor,
            "room":selectRoom,
             "bed":selectBed

        
      }),
      headers: {
        'Content-type': 'application/json; charset=UTF-8',
      }
      })
      .then(function(response){ 
      return response.json()})
      .then(function(data)
      {
       
        if(data[0].Message.response =='error')
        {
              alert("Room Configure Data is Saved")
                window.location = "configure_table.php"
            
        }
        
        else
        {
           alert("Room Configure Data NOT Saved")
        window.location = "configure.php"
        }
    
    }).catch(error => console.error('Error:', error)); 
    });
            </script>
            
      
        </body>

            </html>