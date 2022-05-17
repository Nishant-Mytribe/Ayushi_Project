<?php
session_start();
print_r($_SESSION);
include "controller\init.php";

?>

 <html>
 <head>
 <title>F-Bar</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <style>
   .button{transition:  0.5s;}
   .button:hover{background-color:black;
    color:white;}

    .button{transition:  0.5s;}
    .button:hover{background-color:black;
     color:white;}

     input[type=text], select {
       width: 30%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       border-radius: 4px;
       box-sizing: border-box;
     }

     input[type=submit] {
       width: 15%;
       background-color: #4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border: none;
       border-radius: 4px;
       cursor: pointer;
     }

     input[type=submit]:hover {
       background-color: #45a049;
     }

     input[type=password] {
     height:5%;
     width:32%;
     }
     input[type=number] {
     height:5%;
     width:30%;
     }
    </style>

    <body>
<?php
 include 'css.php';
 include 'navbar.php';
include 'cart2.php';
 ?>

 <br>
<h2><strong><u><center>SHOPPING CART</center></u></strong></h2>
 <div class="row">
   <div class="col-md-8">

   <?php

   $query = "SELECT * FROM cart
   JOIN adidas_shoes on adidas_shoes.product_id = cart.product_id
   WHERE user_id=1";
   $result = mysqli_query($conn , $query);

   $items = array();
   while($row = mysqli_fetch_assoc($result)){
    $items[] = $row;
  }?>

   <?php
  foreach ($items as $key => $value)
  { ?>

<div class="row">

<div class="col-md-5">
  <img src="<?php echo $value['url']; ?>" height="150" width="240"style=" margin-top:15%; margin-left:10%;"></img>
</div>

<div class="col-md-3">
<h3 style="margin-top:20%;"><strong><?php echo $value['Brand']  ?> </strong></h3>
<p>Size Available: '<?php echo $value['size']?>'</p>

<form action="delete.php" method="POST">
  <input type="hidden" name="cart_id" value="<?php echo $value['cart_id']?>"/>
<button type="submit" class="btn-btn-default" style="color:white;background-color:green;">Remove</button>
</form>


<div class="w3-button w3-pink w3-padding-small w3-small">Wishlist</div></p>
</div>

</div>
<?php }
 ?>
</div>

<div class="col-md-4">
<h2><u><br>ADDRESS MANAGER</b></u></h2>

<form action="user_info2.php" method="POST">
<label for="fname">Name</label>
<input type="text" id="name" name="name" style="width:35%; margin-left: 13%;" placeholder="Your name......"><br>
<label for="email">Address</label>
<input type="text" id="email" name="address" style="width:35%;  margin-left: 10%;" placeholder="Your address......"><br>

<label for="email">Phone Number</label>
<input type="text" id="email" name="phone_no" style="width:35%;  margin-left: 1%;" placeholder="Your number......"><br>

<label for="password">Pincode</label>
<input type="text" id="pin" name="pin_code" style="width:35%;  margin-left: 10%;" placeholder=" Your pincode...."><br>


<br>

<p>Type of Address :-</p>
 <label class="checkbox-inline">
 <input type="checkbox"name="type" value="home">Home
</label>
<label class="checkbox-inline">
 <input type="checkbox"name="type" value="office">Office
</label>
<br>
<center><button type="SUBMIT" class="btn btn-buy-now button">SAVE</button></center>
</div>


</form>
</div>



<center><div class="w3-button w3-black w3-padding-large w3-large">Place Order</div></p></center>
<?php include 'footer.php'; ?>
</body>
</html>
