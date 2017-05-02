<?php include('main.inc.php');?>
<!DOCTYPE html>
<html>
<?php echo makeHead('privacy'); ?>
     <?php echo $nav; ?>

 
  <body>
 
<main>
       <div class="title">
           <h2>Shopping Cart</h2>
       </div>
      
     
    
    <div class="shoppingCart">
	<table class='cart'>
		<tr><th>Items</th><th>Quantity</th><th>Price</th><th>Subtotal</th></tr>
		<tr><td class="item"> <img class="cartImg" src="bape1.jpeg" alt="A Bathing Ape/Bape Green Camo Bapesta Tee in Black"> A Bathing Ape Green Camo Bapesta Tee</td>
			<td><input class="quantity" type='number'  value='1'></td><td>$100</td><td>$100</td></tr>


		<tr><td colspan=2></td><th>Total: </th><th>$100</th></tr>
	</table>
	</div>
	<div class="purchaseBtn">
		<a href='verifyinfo.php'><input class="addCart" type='button' name='action' value='Purchase'></a>
	</div>

	


      </main>
    
  <?php echo $footer; ?>
   

</body>
<?php echo $script; ?>

</html>