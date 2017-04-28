<?php include('main.inc.php');?>
<html>

    <?php echo makeHead('index'); ?>
     <?php echo $nav; ?>
      
<header>
 <div class="container">
  <img class="promo" src="slideshow_3.jpg">
  </div>
</header>

<body>
 
  <main>
      <div class="brand">
        <a class="brandimg"> <img src="usestamp.png"></a>
         <div class="itemcontainer">
             <a class="img-link" href="productpage.php"><img class="item" src="bape1.jpeg"></a>
               <a class="img-link" href="productpage2.php"><img class="item" src="bape2.JPG"></a>
         </div>
      </div>
     <div class="brand">
         <div class="itemcontainer">
             <a class="img-link" href="productpage3.php"><img class="item" src="guess1.jpg"></a>
             <a class="img-link">  <img class="item" src="guess2.jpg"></a>
         </div>
        <a class="brandimg"> <img  src="usebb.png"></a>
      </div>
      <div class="brand">
        <a class="brandimg"> <img src="slideshow_1.jpg"></a>
         <div class="itemcontainer">
            <a class="img-link"> <img class="item" src="enfants1.jpeg"></a>
              <a class="img-link"> <img class="item" src="enfants2.jpeg"></a>
         </div>
      </div>

  </main>
  
   <?php echo $signup; ?>
    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>