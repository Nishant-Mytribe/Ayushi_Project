<?php
include 'controller/init.php';
?>

<?php foreach ($brands as $key => $value):
  ?>

  <div class="col-md-3">
 <a href="http://localhost/FBar/brands.php?brand=<?php echo $value['brand']; ?>">
   <img src="<?php echo $value['image']; ?>"class="boxing1">
 </a>
 </div>
