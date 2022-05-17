<?php
include 'controller/init.php';

$c_id=$_REQUEST['cart_id'];


$sql = "DELETE FROM cart where cart_id = $c_id";
if($conn->query($sql)===TRUE){
    echo "New record deleted successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
header('location:http://localhost/newFBAR/cart.php');
 ?>
