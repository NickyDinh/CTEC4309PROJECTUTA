<?php include('main.inc.php');?>
<!DOCTYPE html>
<html>
<?php echo makeHead('privacy'); ?>
     <?php echo $nav; ?>

 
<body>
   
<main>
<div class="title">
           <h2>Order confirmation</h2>
       </div> 
       
       <div class="orderConfirmation">
<p>
	<div class="confirmation">
	<p>Thank you for your purchase of <a href="productpage.php" class="confirmProduct">A Bathing  Ape Green Camo Bapesta Tee</a>! </p>
	Share your purchase with your friends on Facebook, Instagram or Twitter to recieve a 10% discount on your next order! 
	<div class="share">
	<img class="productShare" alt="A Bathing Ape/Bape Green Camo Bapesta Tee in Black" src="bape1.jpeg">
	<div>
	<a href="https://www.facebook.com/"><img class="social" alt="facebook button" src="facebook.png"></a>
	<a href="https://twitter.com"><img class="social" alt="instagram button" src="instagram.png"></a>
	<a href="https://www.instagram.com"><img class="social" alt="twitter button" src="twitter.png"></a>
	</div>
	</div>
	</div>
	
	<div class="confirmation">
	Your order is currently being proccesed and we will be shipping it out shortly!
        <p>A confirmation <a class="confirmProduct" href='emailconfirmation.html'>email</a> has been sent to your email account. Included in your confirmation email will be your tracking information for you to stay up to date with your package!</p> 
	</div>

	<div class="confirmation">
	To stay up to date with your package your order number is: x1234567890.  To check your order status, please follow the link provided
	<a class="confirmProduct" href="mockup_orderTracking.php">Tracking Page</a>
	</div>
</div>
</main>




    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>