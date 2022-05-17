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
 <style>
   .button{transition:  0.5s;}
   .button:hover{background-color:black;
    color:white;}
    </style>
 <?php

 include 'css.php';
 include 'navbar.php';
  ?>
  <!-- <style>
 .background{background-image:url("adidas.png"; style="height:10%; width:60%;"}
 </style> -->
 <body>


<!-- <h1 align="center"><strong>Products</strong></h1> -->


 <div class="row">
 <?php
 $query = "select * from adidas_shoes ";
 $result = mysqli_query($conn , $query);

 $items = array();
 while($row = mysqli_fetch_assoc($result)){
  $items[] = $row;
 }

foreach ($items as $key => $value)
{ ?>
  <form action="insert2.php">
    <input type="hidden" name="product_id" value="<?php echo $value['product_id']?>"/>
    <div class="col-md-3 card-product">
 <div style="width:300px; height:250px; margin:20%;">

   <?php if ($_SESSION['active']): ?>
     <button type="submit" class="btn btn-buy-now button" style="display:none; position:absolute; margin-top:34%; margin-left:36%;">Buy Now</button>

   <?php else: ?>
     <a href="http://localhost/newFBAR/signup.php"><button type="button" class="btn btn-buy-now button" style="display:none; position:absolute; margin-top:34%; margin-left:36%;">SIGN UP</button></a>


        <?php endif; ?>


  <img src="<?php echo $value['url']; ?>" height="150" width="240"style=" margin:20%; margin-left:16%;"></img>
 <h4 style="text-align:center;margin-top:-40px;"><?php echo $value['price']; ?> </h4>
 </div>
 </div>
</form>

<?php }
?>
 </div>
 <hr>


 <div class="container">
   <div class="row">
     <div class="col-md-4"><center><h4> FREE SHIPPING</h4><p>Free shipping on all orders above $50</p></center></div>
     <div class="col-md-4"><center><h4> SUPPORT 24/7</h4><p>Contact us 24 hrs a day,7 days a week</p></center></div>
     <div class="col-md-4"><center><h4>15 DAYS RETURN </h4><p> Return the products within 15 days of purchased date</center></div>
   </div>


 </div>

 <?php
 include "footer.php";
  ?>

  <script>

  $( document ).ready(function() {
     console.log( "ready!" );


      $( ".card-product" ).hover(
        function() {
          $(this).find('.btn-buy-now').toggle();
          // $( this ).append( $( "<span> ***</span>" ) );
        }, function() {
          $(this).find('.btn-buy-now').toggle();

          // $( this ).find( "span:last" ).remove();
        }
      );
 });



 </script>
 </body>
 </html>
