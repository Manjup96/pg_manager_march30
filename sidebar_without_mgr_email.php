





<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hi Mahati </h5>
</div>

<hr style="border:1px solid; background-color:#FADBD8; border-color:#FADBD8;">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="dashboard.php" ><i class="fa fa-dashboard"></i> Dashboard</a>
    <!--<a href="building_table.php" ><i class="fa fa-home"></i> Buildings</a> -->
    <a href="room_table.php"  onclick="" ><i class="fa fa-th-large"></i> Rooms</a>
    <a href="adhar_verify_table.php"   onclick="" ><i class="fa fa-user"></i> Aadhar</a>
    <a href="tenant_table.php"   onclick="" ><i class="fa fa-user"></i> Tenants</a>
    <a href="complaint_table.php"   onclick="" ><i class="fa fa-user"></i> complaints</a>
    <a href="news_table.php"   onclick="" ><i class="fa fa-user"></i> News</a>
    <a href="meals_table.php"   onclick="" ><i class="fa fa-money"></i> Meals</a> 
    <a href="account_table.php"   onclick="" ><i class="fa fa-money"></i> Accounts</a> 
    <a href="report.php"   onclick="" ><i class="fa fa-file"></i> Reports</a> 
    <a href="enquiry_table.php"   onclick="" ><i class="fa fa-question"></i> Enquiry</a> 
    <a href="setup.php"  onclick="" ><i class="fa fa-tasks"></i> Set Up</a>
    <a href="logout.php"  onclick="" ><i class=" fa fa-thin fa-power-off"></i>Logout</a>

</div>
</div>
  
</div>
 
<div id="main">
<div class="w3-teal">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
    <div class="w3-container">
   
      </div>




</div>



<?php
// Start the session
//  session_start();


if(isset($_GET['name']))
{
 $n = $_GET['name'];
}
else
{
    $n = $_SESSION['username'];
}
echo "<h5 style='color:blue; margin-left:30vw'>"."Hello " . $n . ".<h5><br>";

?>

