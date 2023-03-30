<!DOCTYPE html>

<html>
  <head>
  <!-- <body style="background-color:#D6DBDF;"> -->
        <title>Admin</title>
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
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: url(bg-image.jpg);
    background-size: cover;
}

.container{
    width: 100%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}

.form-title{
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

.main-user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label{
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}

.user-input-box input{
    height: 40px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

.gender-title{
    color:white;
    font-size: 24px;
    font-weight: 600;
    border-bottom: 1px solid white;
}

.gender-category{
    margin: 15px 0;
    color: white;
}

.gender-category label{
    padding: 0 20px 0 5px;
}

.gender-category label,
.gender-category input,
.form-submit-btn input{
    cursor: pointer;
}

.form-submit-btn{
    margin-top: 40px;
}

.form-submit-btn input{
    display: block;
    width: 100%;
    margin-top: 10px;
    font-size: 20px;
    padding: 10px;
    border:none;
    border-radius: 3px;
    color: rgb(209, 209, 209);
    background: rgba(63, 114, 76, 0.7);
}

.form-submit-btn input:hover{
    background: rgba(56, 204, 93, 0.7);
    color: rgb(255, 255, 255);
}

@media(max-width: 600px){
    .container{
        min-width: 280px;
    }

    .user-input-box{
        margin-bottom: 12px;
        width: 100%;
    }

    .user-input-box:nth-child(2n){
        justify-content: space-between;
    }

    .gender-category{
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .main-user-info{
        max-height: 380px;
        overflow: auto;
    }

    .main-user-info::-webkit-scrollbar{
        width: 0;
    }
}
  </style>
  <body >
  
    <!-- <a href="manage pg.html">  -->
    <div class="container ">
      <h1 class="form-title" id="Create PG">Create PG</h1> 
      <form id="create">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="PG_Name">PG Name</label>
            <input type="text"
                    id="PG_Name"
                    name="PG_Name"
                    placeholder="Enter Full Name"/>
          </div>
           
           <div class="user-input-box">
            <label for="Landmark">Landmark</label>
            <input type="text"
                    id="landmark"
                    name="landmark"
                    placeholder="Landmark"/>
          </div>

          <div class="user-input-box">
          <label for="state">State</label>

          <select id="state" name="state">
          <option value="AN">Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
</div>
          
          <!-- <div class="user-input-box">
            <label for="state">State</label>
              <input type="text"
                    id="state"
                    name="state"
                    placeholder="State"/> 
          </div> -->
          <div class="user-input-box">
            <label for="City">City</label>
              <input type="text"
                    id="city"
                    name="city"
                    placeholder="City"/> 
          </div>
          <div class="user-input-box">
            <label for="Pincode">Pincode</label>
              <input type="text"
                    id="pincode"
                    name="pincode"
                    placeholder="Pincode"/> 
          </div>
        
          <div class="user-input-box">
            <label for="text">Address</label>
                    <textarea id="address" name="address" placeholder="Address" rows="3" cols="38" style="height:150px">
                    </textarea>
          </div> 
        
       <div class="gender-details-box" >
          <span class="gender-title">PG Type</span>
          <div class="gender-category">
            <input type="radio" name="PG_Type" id="male" onclick="selected(this)" value="male">
            <label for="male">Male</label>
            <input type="radio" name="PG_Type" id="female"  onclick="selected(this)" value="female">
            <label for="female">Female</label>
            <input type="radio" name="PG_Type" id="other"  onclick="selected(this)" value="other">
            <label for="other">Other</label>
          </div>        
        </div>
        
       <!-- <div class="form-submit-btn">
        <input type="submit" value="Register" > 
          
        </div>  -->
   <div>
        <!-- <center><button type="submit" name="submit">Submit</button></center>  -->
       <button type="submit" class="btn btn-success btn-customized" id="save_pg" >Save</button>
    </div>
  </div>
      </form>
    </div>
    
    <script>
      var gender="";
      function selected(val){
      // alert(val.value);
      gender=val.value;
      }
    
      var form=document.getElementById('create');
     
      form.addEventListener('submit', function(e){
      e.preventDefault()
          var pgName = document.getElementById("PG_Name").value; 
          var landmark = document.getElementById("landmark").value; 
          var state = document.getElementById("state").value; 
          var city = document.getElementById("city").value; 
          var pincode = document.getElementById("pincode").value;
          var address = document.getElementById("address").value;
         
          var PG_type = gender;
          console.log("PG_type=",PG_type);
          // var pgType = document.getElementById("female").value;
          // var pgType = document.getElementById("other").value;
            var manager_mail = document.getElementById("manager_email").value;
            var manager_mobile = document.getElementById("manager_mobile").value;
            
          console.log("manager_email=",manager_email);  
          console.log("manager_mobile=",manager_mobile);  
          
          console.log(pgName,landmark,state,city,pincode,address,PG_type);
          // console.log(pgName,landmark,state,city,pincode,address);
      fetch('https://iqbetspro.com/pg-management/create-PG-POST-API.php', {
       method: 'POST',
       body: JSON.stringify({
          "PG_Name":pgName, 
     "manager_mobile":manager_mobile,
      //"manager_email":manager_email,
      "manager_email":"koduri.bhagath@gmail.com",
       "landmark":landmark,
        "city":city,
         "pincode":pincode,
        "state":state,
        "address":address,
        "PG_Type":PG_type,
        //"PG_Type":pgType
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
             alert("PG Details NOT Saved");
         window.location = "create.php"
          
         }
         else
         {
              alert("PG Details Saved Successfully");
         window.location = "configure.php"
         
         }
     
     }).catch(error => console.error('Error:', error)); 
     });
     </script>
      
      <script>
       // creating states name drop-down
    let text_box = '<input type="text" class="input-text" id="state">';
    // let state_code_id = document.getElementById("state-code");

    function create_states_dropdown() {
        // get selected country code
        // let country_code = document.getElementById("country").value;
        // let states = states_list[country_code];
        // invalid country code or no states add textbox
        if(!states){
            state_code_id.innerHTML = text_box;
            return;
        }
        let option = '';
        if (states.length > 0) {
            option = '<select id="state">\n';
            for (let i = 0; i < states.length; i++) {
                option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
            }
            option += '</select>';
        } else {
            // create input textbox if no states 
            option = text_box
        }
        state_code_id.innerHTML = option;
    }


    </script>
  </body>
</html>
     