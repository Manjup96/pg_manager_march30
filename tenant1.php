<html lang="en" class="h-90">
<head>
  <?php  include "./adminHeader.php"; include "./sidebar.php"; include "./commonlinks.php";
  ?>
<link rel="stylesheet" href="./assets/css/tenant_form.css">
  </head>

  <body class="h-100">
    <!-- close icon  -->
    <a href="tenant_table.php">
      <div style="margin-left:910px">
        <button style="font-size:24px"><i class="fa fa-close"></i></button>
      </div>
    </a>
    
    <div class="container h-90">

      <div class="row h-90 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">

      <form name="form" id="form">
            <h1>
              <center>
                <div class="p-3 mb-2 bg- text-black">
                  <p class="two">Tenant Reg Form</p>
                </div>
              </center>
            </h1>
            <!-- Input fields -->
            <div class="form-group">
              <label for="tenantName">Name:</label>
              <input type="text" class="form-control tenantName" id="tenantName" placeholder="" name="tenantName">
              <div id="name_error" style="display:none"> Please Enter a Valid Name </div>
            </div>
            <div class="form-group">
              <label for="tenantAdharCardNumber">Adhaar Card Number:</label>
              <input type="text" class="form-control tenantAdharCardNumber" id="tenantAdharCardNumber" placeholder=""
                name="tenantAdharCardNumber">
              <div id="adhar_error" style="display:none"> Please Enter a Valid Adhar card number </div>
            </div>

            <div class="form-group">
              <label for="tenantMobileNumber">Mobile Number :</label>
              <input type="tel" class="form-control tenantMobileNumber" id="tenantMobileNumber" placeholder=""
                name="tenantMobileNumber">
              <div id="mobile_error" style="display:none"> Please Enter 10 digits number</div>
            </div>

            <div class="form-group">
              <label for="tenantEmail">Email :</label>
              <input type="email" class="form-control tenantEmail" id="tenantEmail" placeholder="" name="tenantEmail">
              <div id="email_error" style="display:none"> Please Enter correct email</div>
            </div>

            <div class="form-group">
              <label for="tenantJoiningDate">Joining Date :</label>
              <input type="date" class="form-control tenatJoiningDate" id="tenantJoiningDate" placeholder=""
                name="tenantJoiningDate">
            </div>
            <div><label for="tenantComments">Comments</label>
              <textarea id="tenantComments" name="tenantComments" placeholder="" rows="3" cols="38"
                style="height:150px"></textarea>
            </div>
            </br>
            <center>
              <button type="submit" class="btn btn-success btn-customized">Save</button>
            </center>
      </form>

        </div>
      </div>
    </div>

    <script>
      document.getElementById("tenantJoiningDate").valueAsDate = new Date();
    </script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<script type="text/javascript" src="./assets/js/tenant/insert.js"></script>


  </body>

</html>