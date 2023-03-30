


<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;color:white">Hi <?php echo $_SESSION['username'] ;?></h5>
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


echo "<h5 style='color:black; margin-left:30vw'>"."Hello " . $manager_name . ".<h5><br>";

// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $e . ".<h5><br>";
// echo "<h5 style='color:black; margin-left:30vw'>"."mail " . $m . ".<h5><br>";

echo '<input type="hidden" id="manager_email"  value="'.$manager_email.'">';
echo '<input type="hidden" id="manager_mobile" value="'.$manager_mobile.'">';
?>
