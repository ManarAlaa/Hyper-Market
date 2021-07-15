<?php
session_start();
include_once("dbconnection.php");
if(isset($_POST['sub']))
{
 $Fname = $_POST['Fname'];
 $Lname = $_POST['Lname'];
 $email = $_POST['email'];
 $password = $_POST['pass'];
 $confirm = $_POST['confirm'];

if($confirm == $password)
{
$strQuery = "INSERT INTO customer (Fname , Lname , email , password) 
VALUES('$Fname','$Lname','$email', '$password')";
 mysqli_query($mysqlLink,$strQuery);
 include_once("login.html");
}
else {include_once("registered.html");}
}
?>