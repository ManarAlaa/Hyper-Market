<?php
session_start();
include_ONCE("dbconnection.php");

include ("queries.php");
$disAval1= selectQuery('products','*',"productSection='household' && disAvailability=1");


$disAval0= selectQuery('products','*',"productSection='household' && disAvailability=0 ");




include("household.html");
?>
