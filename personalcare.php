<?php
session_start();
include_ONCE("dbconnection.php");
include ("queries.php");
$disAval1= selectQuery('products','*',"productSection='personalcare' && disAvailability=1");


$disAval0= selectQuery('products','*',"productSection='personalcare' && disAvailability=0 ");



//$productsQ = "SELECT * FROM products WHERE productSection='personalcare' && disAvailability=1 ";
//$productsQRes = mysqli_query($mysqlLink , $productsQ );


//$productsQQ = "SELECT * FROM products WHERE productSection='personalcare' && disAvailability=0 ";
//$productsQQRes = mysqli_query($mysqlLink , $productsQQ );
include("personalcare.html");
?>
