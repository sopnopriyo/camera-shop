<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="frontEnd.css">	
</head>
<body>

<header>
	<img src="img/marvel.png" alt="logo">
</header>

<?php 

    include('main-menu.php')
?>
<br><br>
<div class="container">  
  	<form id="contact-us-form">
	    <h2><center>Contact Us Now!</center></h2>
		
	    <fieldset>
	    	<input placeholder="Full Name" type="text" name="name">
	    </fieldset>

	    <fieldset>
	    	<input placeholder="Email Address" type="text" name="email">
	    </fieldset>

	    <fieldset>
	    	<input placeholder="Your Phone Number" type="telephone" name="tel">
	    </fieldset>

	    <fieldset>
	    	<textarea placeholder="Enter Your Message Here" name="message"></textarea>
	    </fieldset>

	    <fieldset>
	      	<button type="submit" name="submit">SUBMIT</button>
	    </fieldset>	
	    
  	</form>
 
  
</div>
</body>
<footer>
      Copyright @University of Malaya
</footer>

</html>