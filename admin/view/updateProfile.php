<?php 
include "../controller/updateControl.php";
?>
<html>
    Edit User:
    <form method = "POST" action = "">
        <input type = "text" name = "name" value = "<?php echo $name;?>"/>
        <input type = "text" name = "email" value = "<?php echo $email;?>"/>
        <input type = "password" name = "password" value = "<?php echo $password;?>"/>
        <input type = "text" name = "phonenumber" value = "<?php echo $phonenumber;?>"/>
        <input type = "text" name = "nationselect" value = "<?php echo $nationselect;?>"/>
        <input type = "submit" name = "update" value = "Update"/>
    

