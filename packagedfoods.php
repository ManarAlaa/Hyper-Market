<?php
session_start();
include_ONCE("dbconnection.php");
include ("queries.php");
$disAval1= selectQuery('products','*',"productSection='packagedfoods' && disAvailability=1");


$disAval0= selectQuery('products','*',"productSection='packagedfoods' && disAvailability=0 ");




include("packagedfoods.html");
?>
