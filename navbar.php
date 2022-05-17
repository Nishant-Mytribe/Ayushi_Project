
<div class="w3-top">

    <div class="w3-col s2">
      <a href="http://localhost/newFBAR/main.php" class="w3-button w3-block w3-black">HOME</a>
    </div>

    <div class="w3-col s2">
      <a href="about.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>

    <div class="w3-col s2">
      <a href="#menu" class="w3-button w3-block w3-black">MALE</a>
    </div>

    <div class="w3-col s2">
      <a href="#where" class="w3-button w3-block w3-black">FEMALE</a>
    </div>


    <div class="w3-col s2">
      <?php if ($_SESSION['active']): ?>
<a href="cart.php" class="w3-button w3-block w3-black">CART</a>
<?php else: ?>
<a href="http://localhost/newFBAR/signup.php"class="w3-button w3-block w3-black">CART</a>
<?php endif; ?>


    </div>


<?php if ($_SESSION['active']): ?>
  <div class="w3-col s2">
<a href="new.php"><div class="w3-button w3-block w3-black">LOG OUT</div></a>
</div>


<?php else: ?>
  <div class="w3-col s2">
    <a href="signup.php" class="w3-button w3-block w3-black">LOG IN / SIGN UP</a>
  </div>


  <?php endif; ?>

</div>
