<?php

include_once("dbconnection.php");
require_once("validation.php");
if(isset($_COOKIE['adminCookie']))
{
  $adminCookie=$_COOKIE['adminCookie'];
  $adminData = explode(',',$adminCookie);
  $email = $adminData[0];
  $password = $adminData[1];
    $strQuery = "SELECT adminID FROM admins WHERE email='$email' AND password='$password' ";
    $res = mysqli_query($mysqlLink , $strQuery);
    if($res == FALSE)
    {
      echo "wrong email or password";
      include_once("login.html");
    }
  }
if(isset($_POST['login']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];
   $boolEmail = validateEmail($email);
   $boolPassword = validatePassword($password);
   if($boolEmail == true && $boolPassword == true){
   $strQuery = "SELECT password , customerID FROM customer WHERE email='$email'";
   $res = mysqli_query($mysqlLink,$strQuery );
   while($data = mysqli_fetch_array($res))
   {
       $confirm =  $data['password'] ;
   
   }
     if($password ==  $confirm)
      {
          while($data = mysqli_fetch_array($res))
           {
            $_SESSION['customerID'] = $data['customerID'];
            setcookie('adminCookie',"$email,$password",time()+60*60*24*30);
            }   
            header("location:index.php");
      }
   
   else{
    echo "Wrong Email or Password";
    header("location:login.html");
       }
  }
  else{        echo "Validation Error";
  }
   if($email == null && $password ==null)
   {
     echo "please fill out this form";
     header("location:login.html");
    }
   if(isset($_SESSION['customerID'])){
    header("location:index.php");
    exit;}

}
else{include_once("login.html");}
?>




