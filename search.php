<?php
session_start();

include_once("dbconnection.php");
 

 if(isset($_POST['sub'] ))
{
 $search = $_POST['Search'];
 include_once("search.html");
}