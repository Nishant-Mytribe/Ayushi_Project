<?php
session_start();
print_r($_SESSION);
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

include "css.php";
 ?>
 <!-- <style>
.background{background-image:url("adidas.png"; style="height:10%; width:60%;"}
</style> -->
<body>
  <?php
include "navbar.php";
   ?>

   <?php
   $aimg=array('http://www.malemodelscene.net/wp-content/uploads/2011/03/Andrew-Cooper-for-Adidas-Spring-Summer-2011-MaleModelSceneNet-05.jpg');
   $vimg=array('vanswall.jpg');
   $rimg=array('reebokwall1.jpg');
   $pimg=array('https://img.kpopmap.com/2015/11/2015-BTS-WINTER-PUMA-4.jpg');
   $productArra=array('adidas'=>$aimg,'vans'=>$vimg,'reebok'=>$rimg,'puma'=>$pimg);
   $adi=$productArra[$_GET['brand']];

   for($i=0; $i<1; $i++)
{
  ?>
     <img src="<?php echo $adi[$i]; ?>"style="width:100%; height:100%;"></img>
<?php
}
?>

<?
$logo=array('adidas'=>'adidas.png','vans'=>'vanslogo.jpg');
if(isset($logo[$logo[$_GET['brand']]]))
?>{
  <img src="<?php echo $logo[$_GET['brand']];?>"
  style="width=236px;height"
}


<div class="row">
<?php

$adi= array('stan.jpg', 'super.jpg', 'alphabounce.jpg','ultra.jpg');
$vans= array('vans2.jpg', 'vans3.jpg', 'vans4.jpg','vans5.jpg');
$reebok=array('vans2.jpg', 'vans3.jpg', 'vans4.jpg','vans5.jpg');
$puma= array('stan.jpg', 'super.jpg', 'alphabounce.jpg','ultra.jpg');
$productArray = array('adidas'=>$adi,'vans'=>$vans,'reebok'=>$reebok,'puma'=>$puma);
$adi = $productArray[$_GET['brand']];


$h=array('stan smith<br><br>$500', 'superstar<br><br>$300','alpha bounce<br><br>$350','ultra boost<br><br>$350');
$i=array('vans2<br><br>$400','vans3<br><br>$300','vans4<br><br>$350','vans5<br><br>$350');
$j=array('reebok2<br><br>$400','reebok3<br><br>$300','reebok4<br><br>$350','reebok5<br><br>$350');
$k=array('puma1<br><br>$500', 'puma2<br><br>$300','puma3<br><br>$350','puma4<br><br>$350');
$productA = array('adidas'=>$h,'vans'=>$i,'reebok'=>$j,'puma'=>$k);
$h = $productA[$_GET['brand']];



for($i=0; $i<=3; $i++)
{
?>

 <div class="col-md-3 card-product">
<div style="width:300px; height:250px; margin:20%;">
<button type="button" class="btn btn-buy-now button" style="display:none; position:absolute; margin-top:34%; margin-left:36%;">Buy Now</button>
 <img src="<?php echo $adi[$i]; ?>" height="150" width="240"style=" margin:20%; margin-left:16%;"></img>
<h4 style="text-align:center;margin-top:-40px;"><?php echo $h[$i]; ?></h4>
</div></div>

<?php
}
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
