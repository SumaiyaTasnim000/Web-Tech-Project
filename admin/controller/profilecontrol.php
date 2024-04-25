<?php
include '../models/mydb.php';
session_start();

$mydb = new Model();
$conobj = $mydb -> OpenCon();
$result = $mydb -> getUserInfo($conobj,"ma_register",$_SESSION["Email"]);

if($result->num_rows > 0)
{
    echo "Welcome ";
    foreach($result as $row)

    {
    
        echo $row['name'];
    }
 
}
if(isset($_REQUEST['updateProfile'])){
    //header("Location: ../controller/editusercontrol.php");
    header("Location:../view/edituser.php");
}
?>