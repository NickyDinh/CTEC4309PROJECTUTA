<?php include('main.inc.php');?>
<!DOCTYPE html>
<html>
<?php echo makeHead('product'); ?>
     <?php echo $nav; ?>
<body>
 
  <main>
    <div class="product-page">
     <img class="productimg" alt="A Bathing Ape/Bape Green Camo Bapesta Tee in Black"
     src="bape1.jpeg">
     <div class="product-des">
     <h3>A Bathing Ape Green Camo Bapesta Tee</h3>
     <h1>$100</h1>
     <p class="itemdes">
        FRONT AND BACK GRAPHIC PRINT; SEWN TAG ON SLEEVE
        <br><br>
        100% COTTON
        <br><br>
        MADE IN CHINA
        <br>
     </p>
     <input type="number">
     <a href="shoppingcart.php"><button class="addCart">Add to cart</button></a>
     </div>
     </div>
     
  </main>
    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>