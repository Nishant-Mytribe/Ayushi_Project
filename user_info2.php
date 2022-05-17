<?php

include 'controller/init.php';

$user_name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$phone_no=$_REQUEST['phone_no'];
$pin_code=$_REQUEST['pin_code'];
$type_add=$_REQUEST['type'];


$sql = "INSERT INTO user_info (user_name,address,phone_no,pin_code,type_add) VALUES('$user_name','$address','$phone_no','$pin_code','$type_add')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
