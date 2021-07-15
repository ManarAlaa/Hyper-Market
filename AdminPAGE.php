<?php 
include_once("dbconnection.php");

include ("queries.php");
if (isset($_POST['insert']))
{
    $productName = $_POST['productName'];
    $productType  = $_POST['productType'];
    $productSection = $_POST['productSection'];
    $price = $_POST['price'];
    $image = $_FILES['img']['name'];
    $discount=$_POST['discount'];
    $disAvailability= $_POST['disAvailability'];
    $img = "images/" . $image;


if($discount == null)
{
    $strQuery=insertQuery('products',' productName,productType,productSection,img,price ,disAvailability' ,"'$productName','$productType','$productSection','$img',$price, $disAvailability");
   /* $strQuery = "INSERT INTO products (productName,productType,productSection,img,price ,disAvailability ) 
VALUES ('$productName','$productType','$productSection','$img',$price, $disAvailability)";
$boolAdd = mysqli_query($mysqlLink,$strQuery);
if($boolAdd){
    echo "DONE";
     }

   
else{
    
    echo mysqli_error($mysqlLink);
}
*/
}
else{
$strQuery = "INSERT INTO products (productName,productType,productSection,img,price ,discount ,disAvailability ) 
VALUES ('$productName','$productType','$productSection','$img',$price,$discount, $disAvailability)";
$boolAdd = mysqli_query($mysqlLink,$strQuery);
if($boolAdd){
    echo "DONE";
}
else{
    
    echo mysqli_error($mysqlLink);
}
}

}
else{
    include_once("AdminPAGE.html");

}
?>
