<?php
session_start();
include_ONCE("dbconnection.php");

include ("queries.php");
$disAval1= selectQuery('products','*',"productSection='gourmet' && disAvailability=1");
//$productsQRes = mysqli_query($mysqlLink , $productsQ );
//$productsQ = "SELECT * FROM products WHERE productSection='gourmet' && disAvailability=1 ";

$disAval0= selectQuery('products','*',"productSection='gourmet' && disAvailability=0");
//$productsQQ = "SELECT * FROM products WHERE productSection='gourmet' && disAvailability=0 ";
//$productsQQRes = mysqli_query($mysqlLink , $productsQQ );
include("gourmet.html");
?>
