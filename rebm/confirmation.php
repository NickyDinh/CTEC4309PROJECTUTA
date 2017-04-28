<?php include('main.inc.php');?>
<!DOCTYPE html>
<html>
<?php echo makeHead('privacy'); ?>
     <?php echo $nav; ?>

 
<body>
    
<main class="orderConfirmation">
<p>
<h3>Order Confirmation</h3>

	<div class="confirmationMsg">
	<p>Thank you for your purchase of <a href="productpage.php" class="confirmProduct">A Bathing  Ape Green Camo Bapesta Tee</a>! </p>
	Share your purchase with your friends on Facebook, Instagram or Twitter to recieve a 10% discount on your next order! 
	<div class="share">
	<img class="productShare" src="bape1.jpeg">
	<div>
	<a href="https://www.facebook.com/"><img class="social" src="facebook.png"></a>
	<a href="https://twitter.com"><img class="social" src="instagram.png"></a>
	<a href="https://www.instagram.com"><img class="social" src="twitter.png"></a>
	</div>
	</div>
	</div>
	
	<div class="confirmationMsg">
	Your order is currently being proccesed and we will be shipping it out shortly!
        <p>A confirmation <a class="confirmProduct" href='mockup_email.php'>email</a> has been sent to your email account. Included in your confirmation email will be your tracking information for you to stay up to date with your package!</p> 
	</div>

	<div class="confirmationMsg">
	To stay up to date with your package your order number is: x1234567890.  To check your order status, please follow the link provided
	<a class="confirmProduct" href="mockup_orderTracking.php">Order Tracking Page</a>
	</div>

</main>




    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>