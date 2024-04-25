<?php
include '../../layouts/header.php';
include '../controller/process.php';
include '../JS/myscript.js';
include '../CSS/mystyle.css';

?>
<html>
<head>
</head>
<body>
<form method="POST" action="" onsubmit="return validateForm()">

<fieldset>
  <legend>Sign Up Now!:</legend>



Name: <input type="text" name="Name" id="Name"  placeholder ="Name">
<?php echo $nameError; ?>
<?php echo $name; ?>
<br>
<br>
Email:  
<input type="text" name="Email" placeholder ="Email">
<?php echo $emailError; ?>
<?php echo $email; ?>
<br>
<br>
Password: <input type="password" name="Password" >
<?php echo $passwordError; ?>
<br>
<br>
Phone Number: <input type="text" name="PhoneNumber" id="PhoneNumber">
<?php echo $phonenumberError; ?>
<?php echo $phonenumber; ?>
<br>
<br>
Salary: <input type="text" name="Salary" id="Salary" id="Salary">

<br>
<br>
Address: <input type="text" name="Address" >
<?php echo $addressError; ?>
<?php echo $address; ?>
<br>
<br>
City: <input type="text" name="City" id="City">
<?php echo $cityError; ?>
<?php echo $city; ?>
<br>
<br>
Date Of Birth: <input type="date" name="Date Of Birth" >
<br>
<br>
Nationality:
<select name="Nationality">
    <option value="Bangladeshi">Bangladeshi</option>
    <option value="Others">Others</option>
  </select>
  <?php echo $nationselectError; ?>
<?php echo $nationselect; ?>
  <br>
  <br>
  Occuption:
<select name="Occupation" id="Occupation">
  <option disabled selected value> --select an option--</option>
    <option value="Nurse">Nurse</option>
    <option value="Medical Assistant">Medical Assistant</option>
  </select>
 
  <br>
  <br>
Chose profile picture:
<input type="file" name="file" >
<br>
<br>
<br>
<input type="submit" name="Submit" value="SUBMIT">
<input type="reset" name="Reset" value="RESET">

</table>
</fieldset>
</form>
</body>
</html>

<?php
include '../../layouts/footer.php';
?>