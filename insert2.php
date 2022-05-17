<?php
include 'controller/init.php';

$product_id=$_REQUEST['product_id'];


$sql = "INSERT INTO cart(user_id,product_id) VALUES ('1','$product_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('location:http://localhost/newFBAR/cart.php');
 ?>
