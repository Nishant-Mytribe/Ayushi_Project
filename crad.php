<?php
include 'controller/init.php';


 $query = "select * from logo ";
 $result = mysqli_query($conn , $query);

 $brands = array();
 while($row = mysqli_fetch_assoc($result)){
  $brands[] = $row;
 }



?>


<h1 style="margin-top:70px; text-align:center; font-size: 50px;font-family: monospace; color:grey;"><strong>BRANDS IN FOCUS</strong></h1>

<div class= "row" style="margin-top:50px; margin-left:2%;">
<div class="col-md-3"style="margin-top:55px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="box-shadow:4px 4px 8px; border-radius:8px;margin-top:-20%;">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="http://i0.wp.com/www.stiladam.com/wp-content/uploads/2015/11/lacivert-uzun-ceket-dar-kislik-jean.jpg" style="width:150%;height:60%;">
</div>
<div class="item">
<img src="https://78.media.tumblr.com/a7d192ea67361810ff446bc99fb591d4/tumblr_n6azcarkKF1s6si19o1_500.jpg" style="width:150%; height:60%;">
</div>
<div class="item">
<img src="https://i.pinimg.com/736x/c9/bb/e5/c9bbe533c248fbdd7f7ed826fb840362--casual-men-style-men-fashion-and-style.jpg" style="width:150%; height:60%;">
</div>
<div class="item">
<img src="https://get.wallhere.com/photo/face-white-women-model-portrait-nose-rings-long-hair-white-hair-blue-eyes-sitting-photography-singer-black-hair-fashion-hair-Person-Madeline-Juno-girl-beauty-eye-woman-lady-blond-hairstyle-portrait-photography-photo-shoot-brown-hair-art-model-human-hair-color-14249.jpg" style="width:100%;height:60%;">
</div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>




<div class="col-md-9">
<?php foreach ($brands as $key => $value){ ?>
  <div class="col-md-3">
 <a href="http://localhost/newFBAR/brands.php?brand=<?php echo $value['brand']; ?>"><img src="<?php echo $value['Image']; ?>"class="boxing1"></a>
 </div><?php } ?>


<!-- // <div class="col-md-3">
// <a href="http://localhost/newFBAR/adidas1.php"><img src="https://3dexport.com/items/2012/01/03/122125/49895/adidas_logo_3d_model_c4d_max_obj_fbx_ma_lwo_3ds_3dm_stl_384267_o.jpg"class="boxing"></a>
// </div>
// <div class="col-md-3">
// <img src="https://wallpapercave.com/wp/SCatAcr.jpg"class="boxing">
// </div>
// <div class="col-md-3">
// <img src="https://www.brandchannel.com/wp-content/uploads/2017/07/converse-1024x908.jpg" class="boxing">
// <img src="l1.jfif" style="height:20%;margin-top:-10%; float:right; margin-right:-120%; position:relative;transform: scaleX(-1);">
// </div>
// <div class="col-md-3">
// <img src="https://i.pinimg.com/736x/08/58/3c/08583c93590315ad7a4c9f8b95051783--jordan-logo-jordan-.jpg" class="boxing">
// </div>
// <div class="col-md-3">
// <a href="http://localhost/newFBAR/vans.php"><img src="https://wallpapercave.com/wp/qoYCRpE.jpg" class="boxing1"></a>
// </div>
// <div class="col-md-3">
// <img src="https://d2t1xqejof9utc.cloudfront.net/screenshots/pics/0c3c1c38529152031a371928886acaef/large.PNG" class="boxing1">
// </div>
// <div class="col-md-3">
// <img src="https://www.logolynx.com/images/logolynx/fc/fc55a809b0de1254ac4e2702958cb9a3.png"class="boxing1">
// </div>
// <div class="col-md-3">
// <a href="http://localhost/newFBAR/reebok.php"><img src="http://www.sportshdwallpapers.com/download/reebok-logo-black-back_1920x1200_81-wide.jpg" class="boxing1"></a>
// </div>-->

</div></div>
