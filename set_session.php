<?php

// $username = $_GET["username1"];
$manager= json_decode($_GET['mgr']);

print_r($manager->email);
$username = $manager->username;
$email = $manager->email;
$mobile = $manager->mobile;
session_start();
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['mobile'] = $mobile;

$building_name = $_GET["building"];
if(isset($_SESSION['building']))
{
 $building_name = $_SESSION['building'];
}



if (isset($_POST['building_name'])) {
    $_SESSION['building_name'] = $_POST['building_name'];
   
} 

?>