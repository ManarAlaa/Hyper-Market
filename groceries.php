<?php
session_start();
include_ONCE("dbconnection.php");

include ("queries.php");
$disAval1= selectQuery('products','*',"productSection='groceries' && disAvailability=1");


$disAval0= selectQuery('products','*',"productSection='groceries' && disAvailability=0 ");




include("groceries.html");
?>
