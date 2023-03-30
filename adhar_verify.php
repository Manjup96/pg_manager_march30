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


    
    </head>

   
        <script type="text/javascript" src="./assets/js/script.js"></script>
        <body class="smokewhite_bg_color">

<?php
     include "./adminHeader.php";
     include "./sidebar.php";
     include "./commonlinks.php";
     ?>
    	
        <div class="wrapper" style="margin-left:50px">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                       <div style="margin-left:50px">
                          <center>
                                 <div class="p-3 mb-2 bg text-black">Adhar API</div>
                          </center>
                          <br>
                       </div>  
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <center>
                <input type="button"  class="btn btn-dark" onclick="creds()" id="btn" value="Verify Aadhar number" />
                  <div class="url1">
                     <p id="showUrl"></p>
                  </div>
            </center>
            <!-- <p id="showReqId"></p> -->
                    <input type="hidden" id="showReqId" >
                   <center><Button onclick="getAdhaarDetails()"class="btn btn-success" id="getEadhaar" class=pb>Click to get Adhaar details </Button>
                      <br>
                      <br>
                        <div id="tbl"  style="width:20%;display:none"   >
                            <div class="container h-90"  style="margin-right:200px">
                              <table id="employee_table" border="1"  style="width:300%" class="right" >
                                   <tr>
                                         <td>Adhaar card number</td>
                                         <td WIDTH=200><input type="text" id="adhar_card_number"></td>
                                   </tr>
                                   <tr>
                                         <td>Name </td>
                                         <td><p id="name"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Photo </td>
                                         <td><p id="photo"></p></td>
                                   </tr>
                                   <tr>
                                          <td>DOB </td>
                                          <td><p id="dob"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Gender </td>
                                         <td><p id="gender"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Address </td>
                                         <td><p id="address"></p></td>
                                   </tr>
                                   <tr>
                                         <td>City </td>
                                         <td><p id="city"></p></td>
                                   </tr>
                                   <tr>
                                         <td>District </td>
                                         <td><p id="district"></p></td>
                                   </tr>
                                   <tr>
                                         <td>Pincode </td>
                                         <td><p id="pincode"></p></td>
                                   </tr>
                               </table> 
                               <Button onclick="save()"> Save </Button>      
                           </div>
                       </div>
                   </center>

                   <script>
                    
                    function save(){
                        alert("inside save adhar details");
                        
                        var name = document.getElementById('name').value;
                        var photo = document.getElementById('photo').value;
                        var dob = document.getElementById('dob').value;
                        
                        var gender = document.getElementById('gender').value;
                        var city = document.getElementById('city').value;
                        var district = document.getElementById('district').value;
                        var pincode = document.getElementById('pincode').value;
                        var address = document.getElementById('address').value;
                        var adhar_card_number = document.getElementById("adhar_card_number").value;

                        
                        console.log(name,photo,dob,gender,city,district,pincode,address,adhar_card_number);

                        // fetch('https://iqbetspro.com/pg-management/aadhaar-number-POST-API.php', {
                        // method: 'POST',
                        // body: JSON.stringify({
                        // "Name":"Bhargav",
                        // "Photo":"C://Users/KODUR/Downloads/12321.jpeg",
                        // "DOB":"09-11-2000",
                        // "Aadhaar_Card_No":"9381407314",
                        // "Gender":"Male",
                        // "Address":"H.No.1-34,near School,Kompally",
                        // "City":"hyderbad",
                        // "District":"hyderbad",
                        // "Pincode":"500018"

                        // }),
                        // headers: {
                        //     'Content-type': 'application/json; charset=UTF-8',
                        // }
                        // })
                        // .then(function(response){ 
                        // return response.json()})
                        // .then(function(data)
                        // {console.log(typeof(data[0].Message));
                        //     console.log(data[0].Message.response)
                           
                        //      if(data[0].Message.response =='error')
                        //      window.location = "adhar_verify.php"
                        //      else
                        //      window.location = "adhar_verify_table.php";

                        //     // if(data[0].Message.response =='error')
                        //     // alert(" adhar card details inssertion Failed...!!")
                        //     // else
                        //     // alert(" adhar card details insserted successfully...!!")

                        // }).catch(error => console.error('Error:', error)); 


                    }
                    </script>




                <script>
                    document.getElementById("getEadhaar").style.display="none";
                    function creds()
                    {
                       document.getElementById("btn").style.display="none";
                       var reqid=''; 
                       fetch('https://signzy.tech/api/v2/patrons/63845a2711d90001f2f1d4dc/digilockers',
                       {
                          method: 'POST',
                          // body: '{"task":"url", "essentials":{"redirectUrl":"http://localhost/AdhaarApi/getDetailsv1.php"}}',
                          body: '{"task":"url"}',
                          //body: '{"task":"url", "essentials":{"redirectUrl":"/"}}',
                          headers:
                           {
                               'Content-type': 'application/json; charset=UTF-8',
                               'Accept': '*/*',
                               'Authorization': 'Md7tBHZl5MR9bzyl4NezU0mMpKcEdy2TcGzz2EGDRDAfltaX7K5cv4aFA8B047Sr'
                           }
                        })
                       .then(function(response)
                       { 
                          return response.json()}).
                          then(
                          function(data)
                          {
                             console.log('data=',data.result.requestId);
                             // Getting URL 
                             document.getElementById("showUrl").innerHTML='<a  href="'+data.result.url+'" target="_blank">Go to DigitalLocker</a>';
                             reqid=data.result.requestId;
                             document.getElementById("showReqId").value=reqid.toString();
                             console.log(JSON.stringify({"task":"getEadhaar", essentials: {"requestId": data.result.requestId}}));                
                             //  document.getElementById("getEadhaar").style.display="block";
                           }).catch(err => console.error(err));

                           // end of getting url 
                    }
                    function getAdhaarDetails()
                    {
                    document.getElementById("tbl").style.display="block";
                       var reqId=document.getElementById("showReqId").value;
                       fetch('https://signzy.tech/api/v2/patrons/63845a2711d90001f2f1d4dc/digilockers',
                       {
                            method: 'POST',
                            body: JSON.stringify({"task":"getEadhaar", essentials: {"requestId": reqId}}),
                            headers: {
                            'Content-type': 'application/json; charset=UTF-8',
                             'Accept': '*/*',
                            'Authorization': 'Md7tBHZl5MR9bzyl4NezU0mMpKcEdy2TcGzz2EGDRDAfltaX7K5cv4aFA8B047Sr'
                            }
                        })
                       .then(function(response)
                        { 
                           return response.json()
                        }).
                        then(
                        function(data)
                        {
                           console.log('data=',data.result);
                           //document.getElementById("adhaar").innerHTML=' '+JSON.stringify(data.result.name) ;
                           document.getElementById("name").innerHTML = ' '+ (data.result.name).toString();
                           document.getElementById("photo").innerHTML = ' '+ '<img src='+(data.result.photo).toString()+' alt="Girl in a jacket" width="50" height="60">';
                           document.getElementById("dob").innerHTML =' ' + (data.result.dob).toString();
                           document.getElementById("gender").innerHTML =' '+ (data.result.gender).toString();
                           document.getElementById("address").innerHTML =' '+ (data.result.address).toString();
                           document.getElementById("city").innerHTML =' '+ (data.result.splitAddress.city).toString();
                           document.getElementById("district").innerHTML =' ' + (data.result.splitAddress.district).toString();
                           document.getElementById("pincode").innerHTML = ' '+ (data.result.splitAddress.pincode).toString();
                        }
                        ) 
                    }

                    $(document).ready(function()
                    {
                        $(".url1").click(function()
                        {
                            $(this).hide();
                            $("#getEadhaar").fadeIn(5000);
                        });
                   });
               </script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        </div>
    </body>
</html>