<?php


if (array_key_exists("SubmitThis", $_POST)) {
    

    
    
    
    $required = array('FirstName1', 'LastName1', 'BillAddrss', 'City1', 'State1', 'Zip1', 'CardType', 'CardNum', 'ExpDate', 'FirstName2', 'LastName2', 'ShipAddrss', 'City2', 'State2', 'Zip2');   
    $expected = array('FirstName1', 'LastName1', 'Email', 'BillAddrss', 'City1', 'State1', 'Zip1', 'CardType', 'CardNum', 'ExpDate', 'FirstName2', 'LastName2', 'ShipAddrss', 'City2', 'State2', 'Zip2', 'comment');
    $missing = array();
    


foreach($expected as $thisField) {
    
    
    
    $thisUserInput = $_POST[$thisField];
    
    if(in_array($thisField, $required)) {
        
        
        
        if(empty($thisUserInput)) {
            
        array_push($missing, $thisField);
            
        }
        else {${$thisField} = $thisUserInput;
    }
}
    else {${$thisField} = $thisUserInput;
}

}
        
   
    
    if (empty($missing)) {
        
        
        
       // $tagStr = implode(",", $tag);
        
      //  print_r ($tag);
        
       if(!empty($Email)) {
            $FirstName1 = "<a href='mailto:$Email'>$FirstName1</a>";
        }
      
        
        $output = "<div class='information'>
                   <div class='billing'>
                   <b>First Name</b>: $FirstName1<br/>
                   <b>Last Name</b>: $LastName1<br/>
                   <b>Email</b>: $Email<br/>
                   <b>Billing Address</b>: $BillAddrss<br/>
                   <b>City</b>: $City1<br/>
                   <b>State</b>: $State1<br/>
                   <b>Zip</b>: $Zip1<br/>
                   <b>Card Type</b>: $CardType<br/>
                   <b>Card Number</b>: $CardNum<br/>
                   <b>Expiration Date</b>: $ExpDate<br/>
                   </div>
                   <div class='shipping'>
                   <b>First Name</b>: $FirstName2<br/>
                   <b>Last Name</b>: $LastName2<br/>
                   <b>Shipping Address</b>: $ShipAddrss<br/>
                   <b>City</b>: $City2<br/>
                   <b>State</b>: $State2<br/>
                   <b>Zip</b>: $Zip2<br/>
                   <b>comment</b>: $comment<br/>
                   <br/>
                   <br/>
                   <a href='confirmation.php'><input type='Submit' class='addCart' name='Confirm' value='Confirm Info'></a>
                   </div>
                   </div>";

        



                   }
   else {


		$missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}


} else {
	$output = "Please post your message use <a href='post_form_3.php'>this form</a>.";
};

include('main.inc.php');

?>

<!doctype html>
<html>   
<?php echo makeHead('other'); ?>
     <?php echo $nav; ?>
<body>
<main>

	<?php echo $output; ?>
</main>	
<?php echo $footer; ?>
   

</body>
<?php echo $script; ?>
        
</html>