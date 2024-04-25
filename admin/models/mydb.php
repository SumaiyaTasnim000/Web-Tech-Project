<?php
class Model
{

    function OpenCon(){
      $conn= new mysqli("localhost","root","","ma");
      return $conn;
    }
    function AddStudent($conn,$table, $name, $email, $password, $PhoneNumber, $nationselect){
        $sql="INSERT INTO $table (name,email, password, phonenumber, nationselect) VALUES ('$name', '$email', '$password', '$PhoneNumber', '$nationselect')";
        $result= $conn->query($sql);
        return $result;
    }

    function CheckLoginCredentials($conn, $table, $email, $password){
     $sql ="SELECT email, password from $table WHERE Email='$email' AND Password='$password' ";
     $result= $conn->query($sql);
     return $result;
    }

    function getUserInfo($conn,$table,$email)
    {
      $sql = "SELECT name,email,phonenumber,nationselect from $table WHERE Email='$email' ";
      $result = $conn -> query($sql);
      return $result;
    }
    function UpdateProfile($conn,$table,$name,$email,$password,$phonenumber,$nationselect)
    {
      $sql = "UPDATE $table SET name = '$name', email ='$email', password ='$password', phonenumber='$phonenumber', nationselect='$nationselect'";
      $result = $conn -> query($sql);
      return $result;
    }
    function ShowUser($conn,$name)
    {
        $sql = "SELECT name,email,phonenumber,nationselect from ma_register WHERE Name ='$name' ";
        return $conn->query($sql);
    }
  }
  ?>