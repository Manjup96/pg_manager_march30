<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
   <!-- <body style="background-color:#ececec;">  -->
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>
  
<!-- disable previous dates in Input date type -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
/* 
  .btn {
  background-color:  dark;
  border: none;
  color: white;
  padding: 13px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
} */


</style>
		
    <body class="smokewhite_bg_color">
    
    <?php
    $page = 'meals_table';
       include "./adminHeader.php";
       include "./sidebar.php";
       include "./commonlinks.php";
       ?>
<div class="form_group mt-5 text-center" >
 
 The Selected buiding id : <b> <span id="building"></span></b>
 <script>
 document.getElementById("building").innerHTML=
     localStorage.getItem("selected_building1");
     //var buidling_name =  localStorage.getItem("selected_building1");
 </script>
 
</div>

<div id="show_edit_form">
<div class="container h-80 ">
<div class="row h-90 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid; background-color: white;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px grey;">
   <form id="meals_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Meals form</p></div></center></h1>
 
                    
                        
  <div>
                                                    <input type="checkbox" id="Breakfast" name="drone" value="huey"
                                                             checked>
                                                    <label for="mealsBreakfast">Breakfast</label>
                                                     </div>
                                                     <div>
                                                    <input type="checkbox" id="Lunch" name="drone" value="huey">
                                                    <label for="mealsLunch">Lunch</label>
                                                     </div>
                                                     <div>
                                                     <input type="checkbox" id="Dinner" name="drone" value="huey">
                                                    <label for="mealsDinner">Dinner</label>
                                                     </div>
</br>

                               <div class="form-group">
							          <label for="mealsDate">Date:</label>
							          <input type="date" class="form-control mealsDate" id="mealsDate" placeholder="" name="mealsDate">
                        
					            </div> 
                         

                          <div class="form-group">
                            <label for="mealsComments">comments</label>
                                  <textarea id="mealsComments" name="mealsComments" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"></textarea></div>
                               </br>


                          
						<center><button type="submit" class="btn btn-dark btn-customized">Save</button></center>
						
              
           </form>
           </div>
          </div>
        </div>
</div>




    

         
    <script type="text/javascript" src="./assets/js/script.js"></script>
   <!-- <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px;width:950px">
                    <center><div class="p-3 mb-2 bg text-black">Meals details</div></center>
                     -->
                     <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:0px;width:1380px">
                    <center><div class="p-3 mb-2 bg text-black">Meals Details</div></center>
                    
                     
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search" style="color:white"></i></button>
                      <!--  <a href="meals.php" class="btn btn-dark pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add meals</a>  -->
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

</div>


</br> 

<div style="margin-left:0px" id="show_table">
  <table id="Meals" border="1"></table>
</div>
  </div>
    </div>
      </div>
         </div>
           </div>
              </div>


<script >
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#mealsDate').attr('min', maxDate);
});
</script>


<script>

 function searchTable() {
   
   var input, filter, table, tr, td, i, txtValue;
   input = document.getElementById("searchInput");
   filter = input.value.toUpperCase();
   table = document.getElementById("Meals");
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


<script>


                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      

const url ="https://iqbetspro.com/pg-management/GET-Meals-API.php";
     
   
  //  const url ="https://iqbetspro.com/pg-management/GET-Tenant-details-with-building-and-manager-email-API.php";
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
          .then(function(dinner){ 
          return dinner.json()})
          .then(function(data)
          {
                console.log(data);
                show(data);
        })
    }
        
        getapi(url);
    
    
         function show(data) {
             let tab =
                 `<tbody id="table_border" style="text-align:center">
                 <tr>
                 <th>id</th>
                 <th>Tenant Name</th>
                 <th>Tenant Mobile</th>
                 <th>breakfast</th>
                 <th>lunch</th>
                 <th>dinner</th>
                 <th> date</th>
                 <th>Comments</th>
                  <th>Action</th>
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               
                 tab += `<tr>
             <td>${i} </td>
             <td>${r.tenant_name}</td>
             <td>${r.tenant_mobile}</td>
             <td>${r.breakfast}</td>
             <td>${r.lunch}</td>
             <td>${r.dinner}</td>	
             <td>${r.date}</td>
             <td>${r.comments}</td>
              <td>

            <div style=" display: flex;justify-content: space-around;">
          
              <button style="border-width:5px;border-color:white" data-toggle="modal" onclick="viewMealsDetails(${r.id})">View</button>
             </div>
             </td>
             </tr>`;
             i=i+1;
             }  
             tab=tab+` </tbody>`;
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("Meals").innerHTML = tab;
             }


             </script>

    




 
    <!-- view modal -->
    <div class="container">
      <div class="row">
       <div class="col-col-md-12">
    <div class="modal fade" id="view-Meal-modal" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!--data-toggle="modal" data-target="#view-Meal-modal"-->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
    
    
    <tbody>
          <tr>
        <th>Tenant Name</th>
         <td> <input  id="tenant_name" disabled></td>
      </tr>
      
       <tr>
        <th>Tenant Mobile</th>
         <td> <input  id="tenant_mobile" disabled></td>
      </tr>
      <tr>
        <th width="30%">Breakfast</th>
                   <td width="200px"><input type="text"  id="breakfast"  disabled></td>
      </tr>
    
        
        <tr>
        <th width="30%">Lunch</th>
         <td width="40%"> <input  id="lunch" disabled></td>
      </tr>
       <tr>
        <th>Dinner</th>
         <td> <input  id="dinner" disabled></td>
      </tr>
      <tr>
        <th>Floor No</th>
         <td> <input  id="floor_no" disabled></td>
      </tr>
      <tr>
        <th>Room No</th>
         <td> <input  id="room_no" disabled></td>
      </tr>
       <tr>
        <th>Bed No</th>
         <td> <input  id="bed_no" disabled></td>
      </tr>
      
       <tr>
        <th>Date</th>
         <td> <input  id="date" disabled></td>
      </tr>
     
      <!-- <tr>-->
      <!--  <th>Resolve Date</th>-->
      <!--   <td> <input  id="resolve_date" disabled></td>-->
      <!--</tr>-->
       <tr>
        <th>Comments</th>
         <td> <input  id="comments" disabled></td>
      </tr>
    </tbody>
  </table>
                    <!--<div class="form-group">-->
                    <!--    <label for="tenant_name">Tenant Name</label>-->
                    <!--    <input type="text" class="form-control" id="tenant_name"  placeholder="Enter your name">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="breakfast">breakfast</label>-->
                    <!--    <input type="text" class="form-control" id="breakfast"  placeholder="Enter your email">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="lunch">lunch</label>-->
                    <!--    <input type="text" class="form-control" id="lunch"  placeholder="Enter your mobile">-->
                    <!--</div>-->
                    <!--id tenant_name`, `tenant_mobile`, `tenant_mobile`, `floor_no`, `room_no`, `bed_no`, `breakfast`, `lunch`, `dinner`, `date`, `resolve_date`, `comments-->
                    
                    <!--<div class="form-group">-->
                    <!--    <label for="floor_no">Floor No</label>-->
                    <!--    <input type="text" class="form-control" id="floor_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="room_no">Room no</label>-->
                    <!--    <input type="text" class="form-control" id="room_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="bed_no">Bed No</label>-->
                    <!--    <input type="text" class="form-control" id="bed_no"  placeholder="Enter your place">-->
                    <!--</div>-->
                </div>
                <div class="modal-footer">
                <!-- <button type="button" class="btn btn-dark" onclick="viewMealsDetails()">view</button> -->
               <!-- <button type="button" class="btn btn-dark" onclick="updateDetails()">update</button> -->  
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>   
                
                <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
  



<script>

    // veiw details
function viewMealsDetails(viewid){
    $('#hiddendata').val(viewid);
    console.log("viewid=",viewid);
//post query
$.post("GET-Meals-view.php",{viewid:viewid},
function(data,status)
{
    console.log("data=",data);
const userid=JSON.parse(data);
//console.log(JSON.parse(data));
console.log(userid);
$('#tenant_name').val(userid.tenant_name);
$('#tenant_mobile').val(userid.tenant_mobile);

$('#breakfast').val(userid.breakfast);
$('#lunch').val(userid.lunch);
$('#floor_no').val(userid.floor_no);
$('#room_no').val(userid.room_no);
$('#bed_no').val(userid.bed_no);
$('#dinner').val(userid.dinner);
$('#date').val(userid.date);
//$('#resolve_date').val(userid.resolve_date);
$('#comments').val(userid.comments);
  


});

//$("#view-Meal-modal").modal("show");
$('#view-Meal-modal').modal('show'); 
//modal({ show: true });
//$('#view-Meal-modal').modal({ show: true });

}

</script>

  
  
  </body
  </html>