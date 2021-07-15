<?php
session_start();

include("dbconnection.php");
include ("queries.php");

if (isset($_POST['submit'])) 
{
	$sorting = $_POST['sort'];
	if ($sorting==0) {
		$disAval1= selectQuery('products','*','productSection="beverages" && disAvailability=1');

		
       $disAval0= selectQuery('products','*','productSection="beverages" && disAvailability=0');
   
include("beverages.html");
	}
	
	elseif ($sorting==1) {
		$disAval1= selectQuery('products','*','productSection="beverages"  && disAvailability=1  && 1=1 ORDER by  	price ASC ');
		
$disAval0= selectQuery('products','*','productSection="beverages" && disAvailability=0  && 1=1 ORDER BY discount	 ASC');

	include("beverages.html");
}
	}
	else{
		$disAval1= selectQuery('products','*','productSection="beverages" && disAvailability=1');
	
		$disAval0= selectQuery('products','*','productSection="beverages" && disAvailability=0');


include("beverages.html");
}

?>
