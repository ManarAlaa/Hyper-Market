
<?php
session_start();
include("dbconnection.php");

if (isset($_POST['Done'])) 
{
 $sorting = $_POST['sort'];
 if ($sorting==0) {
  $productsQ = "SELECT * FROM products WHERE  disAvailability=1 && 1=1 ORDER by productName  ASC";
$productsQRes = mysqli_query($mysqlLink , $productsQ );

$productsQQ = "SELECT * FROM products WHERE  disAvailability=0 && 1=1 ORDER by productName  ASC";
$productsQQRes = mysqli_query($mysqlLink , $productsQQ);
include("AdminHP.html");
 }
 
 elseif ($sorting==1) {
  $productsQ = "SELECT * FROM products WHERE  disAvailability=1  && 1=1 ORDER by  price ASC ";
$productsQRes = mysqli_query($mysqlLink , $productsQ );

$productsQQ = "SELECT * FROM products WHERE  disAvailability=0  && 1=1 ORDER BY discount ASC  ";
$productsQQRes = mysqli_query($mysqlLink , $productsQQ );
include("AdminHP.html");
}
 }
 else{
 $productsQ = "SELECT * FROM products WHERE  disAvailability=1 ";
$productsQRes = mysqli_query($mysqlLink , $productsQ );

$productsQQ = "SELECT * FROM products WHERE  disAvailability=0 ";
$productsQQRes = mysqli_query($mysqlLink , $productsQQ );
include("AdminHP.html");
}

if(isset($_POST['submit']))
{
    $productName = $_POST['productsName'];
    $strQuery = "DELETE FROM products WHERE productName = '$productName'";
$boolDel = mysqli_query($mysqlLink,$strQuery);
if($boolDel){
    echo "Deleted";
}
else{
    echo mysqli_error($mysqlLink);
}


}

include_once("AdminHP.html");
?>