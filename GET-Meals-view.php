<?php
require_once 'config.php';

if(isset($_POST['viewid']))
{
   // alert($viewid);
    $user_id=$_POST['viewid'];
  //  alert($user_id);
    $sql="select * from `meals` where id=$user_id";
    $result=mysqli_query($conn,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    } 
    // alert($response);
    ?>
   
    
    <?php
    echo json_encode($response);
}
else{
    $response['status']=200;
    $response['message']="Invalid or data not found";

}
?>