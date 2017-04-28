<?php include('main.inc.php');?>
<!DOCTYPE html>
<html>
<?php echo makeHead('product'); ?>
     <?php echo $nav; ?>

<body>
<main>
 <div class="title">
           <h2>Information</h2>
       </div>
<form action= "confirmation.php" method="post">
<div class="information">
<div class="billing">
 <h3>Billing Address</h3>
* required fields
First Name * : <input type="text" name="FirstName1"><br/>
Last Name * : <input type="text" name="LastName1"><br/>
Email: <input type="text" name="Email"><br/>
Billing Address * : <input type="text" name="BillAddrss"><br/>
City *  <input list="City1" name="City1">
<datalist id="City1">
<option value="Dallas">
<option value="Fort Worth">
<option value="Arlington">
</datalist> <br/>
State * : <input type="text" name="State1"><br/>
Zip	* : <input type="text" name="Zip1"><br/>
Credit Card Type * : <input type="text" name="CardType"><br/>
Credit Number * : <input type="text" name="CardNumber"><br/>
Expiration Date * : <input type="text" name="ExpDate"><br/>
  </div>
  <div class="shipping">  
<h3>Shipping Address</h3>
First Name : <input type="text" name="FirstName2"><br/>
Last Name : <input type="text" name="LastName2"><br/>
Shipping Address * : <input type="text" name="ShipAddrss"><br/>
City *  <input list="City2" name="City2">
<datalist id="City2">
<option value="Dallas">
<option value="Fort Worth">
<option value="Arlington">
</datalist> <br/>
State : <input type="text" name="State2"><br/>
Zip	: <input type="text" name="Zip2"><br/>
Delivery Comments : <br/><textarea name="comment" rows="5" cols="40"></textarea><br>

<input type="Submit" name="SubmitThis" value="Submit">
    </div>
    </div>
</form>

 <?php echo $footer; ?>
    </main>  

</body>
<?php echo $script; ?>

</html>