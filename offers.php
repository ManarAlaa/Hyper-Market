<?php
session_start();
include_once("dbconnection.php");
Include ("queries.php");
$disAval1= selectQuery('products','*',"disAvailability = 0 ");

include_once("index.html");
?>