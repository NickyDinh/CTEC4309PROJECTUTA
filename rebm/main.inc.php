<?php

function makeHead ($page) 
{
	
	if ($page == 'index') 
	{
		$href = 'index.css';
	} 
	else 
	{
		$href = 'main.css';
	}

	$head = "<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width'>
     <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css' rel='stylesheet' type='text/css' />
     <link rel='stylesheet' href='$href'>
    <title>Black Market USA </title>
</head>
";

	return $head;
}

$nav ="<nav class='main-nav'>
    <a href='index.php'><img src='logo.png'></a>
 <div class='navbar'>
 <a class='list' href='index.php'>Home</a>
 <div class='dropdown'>
 <a href='#brands' onclick='myFunction()' class='dropbtn'>Designers</a>
  <div id='myDropdown' class='dropdown-content'>
   <div class='brands'>
    <a href=''>adidas</a>
    <a href=''>A Bathing Ape</a>
    <a href=''>Gosha Rubchinsky</a>
    <a href='designers.php'>All Designers</a>
    </div>
    <div class='brands'>
    <a href=''>Yeezy</a>
    <a href=''>Human Made</a>
    <a href=''>D.T.T.K.</a>
    </div>
    <div class='brands'>
    <a href=''>Stone Island</a>
    <a href=''>Rockit</a>
    <a href=''>Stussy</a>
    </div>
     </div>
     </div>
  <a href='' onclick='myFunction2()' class='dropbtn2'>Shop</a>
  <div id='myDropdown2' class='dropdown-content2'>
   <div class='shop'>
    <a href=' '>Accessories</a>
    <a href=' '>Tops</a>
    <a href=' '>Bottoms</a>
    <a href=' '>Footwear</a>
    </div>    
 </div>
  <a class='list' href='#'>Shopping Cart</a>
    

     </div>
    </nav>";

$footer ="<footer>
   <div class='footernav'>
    <ul>
        <li><h3>Navigation</h3></li>
         <li><a href='index.php'>Home</a></li>
         <li><a href='desigers.php'>Designers</a></li>
         <li><a href=''>Shop</a></li>
         
     </ul> 
     <ul>
        <li><h3>Information</h3></li>
         <li><a href='privacy.php'>Privacy Policy</a></li>
         <li><a href='return.php'>Customer Care</a></li>
     </ul> 
     <ul>
        <li><h3>Social Media</h3></li>
         <li><a href='https://www.facebook.com/BLKMKTus/'>Facebook</a></li>
         <li><a href='https://twitter.com/blkmktus'>Instagram</a></li>
         <li><a href='https://www.instagram.com/blackmarketusa/'>Twitter</a></li>
     </ul> 
      </div>
     <h6>THIS IS FOR USE FOR AARON AND NICKY'S CTEC4309 PROJECT</h6>
  </footer>";

$script ="<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='navbar.js'></script>";

$signup ="<div class='sign-up-discount'>
 <h3>Sign up for news and get 15% off</h3>
      <div class='email-thing'>
      <input type='email' class='email'><button>Sign up</button>
      </div>
  </div>"

?>