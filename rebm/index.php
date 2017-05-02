<?php include('main.inc.php');?>
<html>

    <?php echo makeHead('index'); ?>
     <?php echo $nav; ?>
      
<header>
 <div class="container">
  <img class="promo" src="slideshow_3.jpg" alt="Promo banner description for SEO">
  </div>
</header>

<body>
 
  <main>
      <div class="brand">
        <a class="brandimg"> <img src="usestamp.png" alt="Item decription for SEO"></a>
         <div class="itemcontainer">
             <a class="img-link" href="productpage.php"><img class="item" alt="A Bathing Ape/Bape Green Camo Bapesta Tee in Black" src="bape1.jpeg"></a>
               <a class="img-link" alt="A Bathing Ape/Bape Pixel Ape Head Tee in white" href="productpage2.php"><img class="item" src="bape2.JPG"></a>
         </div>
      </div>
     <div class="brand">
         <div class="itemcontainer">
             <a class="img-link" href="productpage3.php"><img class="item" alt="Guess Club X ASAP Rocky Guess club cap in Apricot" src="guess1.jpg"></a>
             <a class="img-link">  <img class="item" alt="Guess Club X ASAP Rocky Guess club cap in Apricot" src="guess2.jpg"></a>
         </div>
        <a class="brandimg"> <img  src="usebb.png" alt="Item decription for SEO"></a>
      </div>
      <div class="brand">
        <a class="brandimg"> <img src="slideshow_1.jpg" alt="Item decription for SEO"></a>
         <div class="itemcontainer">
            <a class="img-link"> <img class="item" src="enfants1.jpeg" alt="Item decription for SEO"></a>
              <a class="img-link"> <img class="item" src="enfants2.jpeg" alt="Item decription for SEO"></a>
         </div>
      </div>

  </main>
  
   <?php echo $signup; ?>
    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>