<?php include('main.inc.php');?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="index.css">
    <title>Black Market USA </title>
</head>

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
             <a class="img-link" href="productpage.html"><img class="item" src="bape1.jpeg"></a>
               <a class="img-link" href="productpage2.html"><img class="item" src="bape2.JPG"></a>
         </div>
      </div>
     <div class="brand">
         <div class="itemcontainer">
             <a class="img-link" href="productpage3.html"><img class="item" src="guess1.jpg"></a>
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
  <div class="sign-up-discount">
 <h3>Sign up for news and get 15% off</h3>
      <div class="email-thing">
      <input type="email" class="email"><button>Sign up</button>
      </div>
  </div>
    
  <?php echo $footer; ?>
   

</body>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="navbar.js"></script>

</html>