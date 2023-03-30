
<?php
// Start the session
 //session_start();

 
// if(isset($_SESSION['building_name']))
// {
//  $building_name = $_SESSION['building_name'];
// }
// // else
// // {
// //     $building_name = $_SESSION['building_name'];
// // }

// else
// { 
//  ?>
<!--<script> alert("seelct buidling name");</script> -->
   <?php
//  }
// ?> 

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
       <link rel="stylesheet" href="./assets/css/respo.css"></link>




</head>

<body class="smokewhite_bg_color">
<?php       
            $page = 'news_table';
            include "./adminHeader.php";
            include "./sidebar.php";   

            include_once "./config/dbconnect.php";
        ?>

                          
<div class="form_group mt-5 text-center">
 
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
       <div id="close_icon_desktop_view" >
          <a href="news_table.php"> <div style="padding-left:500px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 "></i></button></div></a>
          </div>
      <div class="close_icon_mobile_view">
          <a href="news_table.php"> <div style="padding-left:200px">
        <button style="font-size:20px"><i class="fa fa-close pr-1 pl-1 "></i></button></div></a>
          </div>
   
          <form id="news_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two smokewhite_bg_color">Update News Form</p></div></center></h1>
 
                    
                                  
                          <div><label for="newsType">News Type</label>
                                  <input type="text" id="newsType" name="newsType" placeholder=" " ></textarea></div>
                               </br>

                          <div><label for="newsDescription">Description</label>
                                  <textarea id="newsDescription" name="newsDescription" placeholder=""rows="3" cols="40" style="height:150px" style="width:150px"></textarea></div>
                               </br>

                          
						<center><button type="submit" class="btn btn-dark btn-customized" style="width:100px;padding:0px;margin:10px">Save</button></center>
						
              
           </form>
           </div>
          </div>
        </div>
</div>


      
    <script type="text/javascript" src="./assets/js/script.js"></script>

      <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:0px;width:1380px">
                    <center><div class="p-3 mb-2 bg text-black">News Details</div></center>
                    

                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search" id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"  style="color:white";></i></button>
                        <a href="news.php" class="btn btn-dark pull-right" style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add News</a>
                        <button type="submit" class="btn btn-dark " style="margin:10px"; onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

</div>

</br> 

<div style="margin-left:0px" id="show_table">
  <table id="news" ></table>
     </div> 
      </div>
        </div>
         </div>
           </div>
            </div>
              </div>


              <script>
                
                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
              </script>
 <script>
        function searchTable() {
  // Declare variables 
     var input, filter, table, tr, td, i;
     input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("news");
    tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

 
</script>

<script>


                      
//const url_get_news_details ="https://iqbetspro.com/pg-management/NEWS-GET-API-manager-bulding.php";
  const url_get_news_details ="https://iqbetspro.com/pg-management/GET-NEWS-for-PG-Manager-API.php";
     //var buidling_name = document.getElementById("building").value;
     
   
    async function getapi_news(url) 
    {
      console.log("url=",url);
        var manager_mail = document.getElementById("manager_email").value;
   console.log("manager_mail=",manager_mail);
  // var buidling_name = document.getElementById("building").value;
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
            //please check from here, i worte code 
              
                console.log(data);
                show(data); // error 
        })
    }

    //  async function getapi_news(url) {
    //      console.log('inside function..');

    //          let result = await fetch(url);
         
    //          let response = await result.json();
    //          console.log('data',response);
    //          show(response);
    //          //document.getElementById("demo").innerHTML = response;

    //      }
         
         getapi_news(url_get_news_details);

         function show(data) {
             let tab =
                 `<tbody id="table_border" style="text-align:center">
                 <tr>
                 <th>Id</th>
                 
                 <th>News Type</th>
                 <th>News Description</th>
                 <th>Created Date</th>
                <th>Action</th> 
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
            
             <td>${r.news_type}</td>
             <td>${r.news_description}</td>
             <td>${r.created_at}</td>	
        
             <td>

            <div style=" display: flex;justify-content: space-around;">
          
              <Button style="border-color:white;margin-right:10px" id="edit_button1" onclick="edit_row(${r.id})">
             <i class="fa fa-edit btn-outline-primary" ></i>
            
            </Button>

            <Button style="border-color:white;margin-right:10px"  id="delete_button1" onclick="delete_row(${r.id})" >
               <i class="fa fa-trash btn-outline-danger">
             </i></Button>

              
               
      
             </div>
             </td>
             </tr>`;
             i=i+1;
             }
             tab=tab+` </tbody>`;
             // Setting innerHTML as tab variable  onclick='changeImage(\""+item.product_image2+"\");'
             document.getElementById("news").innerHTML = tab;
             }



              // after clicking delete button ,calling delete api 

      function delete_row(id){
        var user_answer = confirm('Entire row will be deleted , is that Ok ..?');
                 
                 if(user_answer==true)
                  {
                    fetch('https://iqbetspro.com/pg-management/delete-NEWS-API.php', {
                      method: 'POST',
                      body: JSON.stringify({
                      "id":id
                  })
                  })
                  .then(function(response){ 
                  return response.json()})
                  .then(function(data)
                  {console.log((data));
                    alert("Deleted Successfully...!");
                    getapi_news(url_get_news_details);
                     
                }).catch(error => alert('Error:', error)); 
             
                  }
               
      }



  //Update News

           
   var form=document.getElementById('news_edit');

form.addEventListener('submit', function(e){
 e.preventDefault()

   var id=  document.getElementById("id_value").value; 
    //var mobile= document.getElementById("tenantMobileNumber").value;
    // var name= document.getElementById("tenantName").value;
    var newsType= document.getElementById("newsType").value;
    var newsDescription= document.getElementById("newsDescription").value;
    //var comments =  document.getElementById("tenantComments").value;
    //var joining_date =  document.getElementById("tenantJoiningDate").value;
     //alert("Clicked on Save button...");

     fetch('https://iqbetspro.com/pg-management/UPDATE-NEWS-API.php', {
  method: 'POST',
  body: JSON.stringify(
    {   
    "id":id,
       "news_type":newsType,
      "created_at":new Date().toLocaleDateString,
    "news_description":newsDescription
     
}
  ),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(typeof(data[0].Message));
    console.log(data[0].Message.response);
    // alert("ok")
    if(data[0].Message.response =='error')
    {
    window.location = "news.php";
    alert("NOT Updated Successfully...");
    }
    else
    {
        alert("Updated Successfully...");
      window.location = "news_table.php";
        
    }

}).catch(error => alert('Error:', error)); 
});





          // clicking edit icon
          function edit_row(id){
         // alert("inside edit row "); 
                  fetch(' https://iqbetspro.com/pg-management/id-Single-NEWS-GET-API.php', {
                  method: 'POST',
                  body: JSON.stringify({
            "id":id
           })
          })
          .then(function(response){ 
          return response.json()})
          .then(function(data)
          {
            console.log('Tenant row Data= ',data);
            
              document.getElementById("show_edit_form").style.display="block";
              document.getElementById("show_table").style.display="none";
        
             document.getElementById("id_value").value=data[0].id;
             //document.getElementById("tenantMobileNumber").value=data[0].tenant_mobile;
              document.getElementById("newsType").value = data[0].news_type;
             document.getElementById("newsDescription").value =  data[0].news_description;
             //document.getElementById("createdDate").value =  data[0].created_date;
             //document.getElementById("resolveDate").value =data[0].resolve_date;
             //document.getElementById("comments").value =  data[0].comments;
          
            
        
        }).catch(error => alert('Error:', error)); 
        
            
                 //  getapi(url);
                }
         
   
             </script>

    

    </body>
    </html>