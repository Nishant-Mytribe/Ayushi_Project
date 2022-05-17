<?php

include "controller/init.php";
session_start();
$_SESSION['active']=false;

header('location:http://localhost/newFBAR/signup.php');

 ?>
