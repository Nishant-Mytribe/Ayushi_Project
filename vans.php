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

include "css.php";
 ?>
 <!-- <style>
.background{background-image:url("adidas.png"; style="height:10%; width:60%;"}
</style> -->
<body>
  <?php
include "navbar.php";
   ?>

     <img src="vanswall.jpg"style="width:100%; height:100%;"></img>
   <img src="vanslogo.jpg"style="width:236px; height:149px;margin-left:10%;  margin-top:-18%;"></img>

<!-- <div class="container"> -->
<div class="row">
<?php
$adi= array('vans2.jpg', 'vans3.jpg', 'vans4.jpg','vans5.jpg');
$h=array('old skool<br><br>$500', 'vans colored<br><br>$300','vans black & brown<br><br>$350','vans black & white<br><br>$350');
for($i=0; $i<=3; $i++)
{
?>

 <div class="col-md-3 card-product">
<div style="width:300px; height:250px; margin:20%;">
<button type="button" class="btn btn-buy-now button" style="display:none; position:absolute; margin-top:34%; margin-left:36%;">Buy Now</button>
 <img src="<?php echo $adi[$i]; ?>" height="150" width="240"style=" margin:20%; margin-left:16%;"></img>
<center><h4 style="margin-top:-40px;"><?php echo $h[$i]; ?></h4></center>
</div></div>

<?php
}
 ?>
</div>
<hr>


<div class="container">
  <div class="row">
    <div class="col-md-4"><center><h4> FREE SHIPPING</h4><p>Free shipping on all orders above $50</p><i class="fa fa-truck"style="color:red;font-size:51px;"></i></center></div>
    <div class="col-md-4"><center><h4> SUPPORT 24/7</h4><p>Contact us 24 hrs a day,7 days a week</p><i class="fa fa-microphone"style="color:red;font-size:51px;"></i></center></div>
    <div class="col-md-4"><center><h4>15 DAYS RETURN </h4><p> Return the products within 15 days of purchased date</p><i class="fa fa-arrow-left"style="color:red;font-size:51px;"></i></center></div>
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
