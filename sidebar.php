<head>

</head>


<!-- Sidebar -->
<div class="sidebar" id="mySidebar" style="width:250px;" >
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;color:black">Hi <?php echo $_SESSION['username'] ;?></h5>
</div>

<hr style="border:1px solid; background-color:#FADBD8; border-color:#FADBD8;">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="dashboard.php" class="<?php echo ($page == 'dashboard') ? 'active' : ''; ?>" style="<?php echo ($page == 'dashboard') ? 'background-color:#757575;color:white' : ''; ?>" ><i class="fa fa-dashboard"></i> Dashboard</a>
    <!--<a href="building_table.php" ><i class="fa fa-home"></i> Buildings</a> -->
    <a href="room_table.php" class="<?php echo ($page == 'room_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'room_table') ? 'background-color:#757575;color:white' : ''; ?>"  
    onclick="" ><i class="fa fa-th-large"></i> Rooms</a>
    <a href="adhar_verify_table.php"  class="<?php echo ($page == 'adhar_verify_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'adhar_verify_table') ? 'background-color:#757575;color:white' : ''; ?>" onclick="" ><i class="fa fa-user"></i> Aadhar</a>
    <a href="tenant_table.php" class="<?php echo ($page == 'tenant_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'tenant_table') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-user"></i> Tenants</a>
    <a href="complaint_table.php" class="<?php echo ($page == 'complaint_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'complaint_table') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-user"></i> complaints</a>
    <a href="news_table.php" class="<?php echo ($page == 'news_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'news_table') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-user"></i> News</a>
    <a href="meals_table.php" class="<?php echo ($page == 'meals_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'meals_table') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-money"></i> Meals</a> 
    <a href="account.php" class="<?php echo ($page == 'account') ? 'active' : ''; ?>" style="<?php echo ($page == 'account') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-money"></i> Accounts</a> 
    <a href="report.php" class="<?php echo ($page == 'report') ? 'active' : ''; ?>" style="<?php echo ($page == 'report') ? 'background-color:#757575;color:white' : ''; ?>"  onclick="" ><i class="fa fa-file"></i> Reports</a> 
    <a href="enquiry_table.php"  class="<?php echo ($page == 'enquiry_table') ? 'active' : ''; ?>" style="<?php echo ($page == 'enquiry_table') ? 'background-color:#757575;color:white' : ''; ?>" onclick="" ><i class="fa fa-question"></i> Enquiry</a> 
    <a href="setup_before_configure.php" class="<?php echo ($page == 'setup') ? 'active' : ''; ?>" style="<?php echo ($page == 'setup') ? 'background-color:#757575;color:white' : ''; ?>" onclick="" ><i class="fa fa-tasks"></i> Set Up</a>
    <a href="logout.php" class="<?php echo ($page == 'logout') ? 'active' : ''; ?>" style="<?php echo ($page == 'logout') ? 'background-color:#757575;color:white' : ''; ?>" onclick="" ><i class=" fa fa-thin fa-power-off"></i>Logout</a>

</div>
</div>
  
</div>
<!--<div class="form_group mt-5 text-center">-->
 <!--  <select class="form-control text-center" name="" id="building"></select> --> 
<!-- <label for="building" style="font-weight:bold;color:black;margin-right:0px">Select building:</label>-->
<!--   <select name="" id="building" onchange="selectedBuilding()">-->
       
       
<!--   </select> -->

<!-- </div>-->
<div id="main" class="smokewhite_bg_color">
<div class="w3-teal">
    <button class="openbtn" style="background-color:#363636" onclick="openNav()"><i class="fa fa-home"></i></button>
    <div class="w3-container">
   
      </div>




</div>



<?php
// Start the session
 //session_start();


if(isset($_GET['name']))
{
 $manager_name = $_GET['name'];
}
else
{
    $manager_name = $_SESSION['username'];
}

if(isset($_GET['email']))
{
 $manager_email = $_GET['email'];
}
else
{
    $manager_email = $_SESSION['email'];
}

if(isset($_GET['mobile']))
{
 $manager_mobile = $_GET['mobile'];
}
else
{
    $manager_mobile = $_SESSION['mobile'];
}


// echo "<h5 style='color:black; margin-left:37vw'>"."Hello " . $manager_name . ".</h5><br>";
echo "<h5 style='color:black; margin-left:37vw'>"."Hello " . ucfirst($manager_name ) . ".</h5><br>";

// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $e . ".<h5><br>";
// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $m . ".<h5><br>";

echo '<input type="hidden" id="manager_email"  value="'.$manager_email.'">';
echo '<input type="hidden" id="manager_mobile" value="'.$manager_mobile.'">';
?>




<!--dropdown btn -->
<script src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>


<script>
window.onload = function() {
    openNav();
    console.log('The page has finished loading!');
  };  
function openNav() {
  console.log("inside open nav");
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";  
  document.getElementById("main-content").style.marginLeft = "250px";
  document.getElementById("main").style.display="none";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";  
  document.getElementById("main").style.display="block";  
}
</script>