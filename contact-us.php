<?php include_once 'includes/db_connect.php'; ?>

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

<?php  	include ('main-menu.php');
		include('search-nav.php');

?>
<?php 
   

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['message'])){
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$tel = $_POST['tel'];
    	$message = $_POST['message'];

    	$successMessage= "";
    	if(!empty($name) && !empty($email) && !empty($tel) && !empty($message)){

    		$sql = "INSERT INTO message (name,email,phone,message)
						VALUES ('$name','$email','$tel','$message') ";

					if ($mysqli->query($sql) === TRUE) {

						//$_SESSION["successMessage"] = "Record has been added Succesfully !";

					//	header('Location: ./contact-us.php');
                	//	exit();
                		$successMessage = "message has been sent  !";
			    
					} else {
				    	echo "error";
					}

    	} else {
    		echo "All fileds are required";
    	}
    }
?>
<br><br>
<div class="container">  
  	<form id="contact-us-form" action="" method="POST" >
	    <h2><center>Contact Us Now!</center></h2>

	    <?php if (!empty($successMessage)) {
	    	echo "<p>".$successMessage."</p>";
	    } ?>
		
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
	      	<button type="submit" name="submit" value="Send">SUBMIT</button>
	    </fieldset>	
	    
  	</form>
 
  
</div>
</body>
<footer>
      Copyright @University of Malaya
</footer>

</html>