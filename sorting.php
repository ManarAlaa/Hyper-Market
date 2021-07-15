<?php
include_once("dbconnection.php");
if(isset($_POST['done']))
{
    if($_POST['Default']){
$Result =  selectQuery("users","*","1=1 ORDER BY productName  ");
if($Result == false)
{
    echo "No data.";
}
else{
    while($userData = mysqli_fetch_array($Result))
    {
        $productsName = $Result['productName'];
        $productsType = $Result['productType'];
        $productsPrice = $Result['price'];
        $productsDiscount = $Result['discount'];
        $productsImg = $Result['img'];

    }
}
}

}
?>