<?php include_once 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="frontEnd.css">

<style>
	img.use {
    float: left;
    margin: 0 0 10px 10px;
    padding: 15px;
}

.clearfix {
    overflow: auto;
}

div {
    background-color: lightgrey;
    border: 25px solid grey;
}

p{
	color: black;
	font-size-adjust: 70px;
	font-family: tahoma;
	color: #413C38;
}
</style>
	
</head>

<body>
<header>
	<img src="img/marvel.png" alt="logo">
</header>


<?php  	include ('main-menu.php');
		include('search-nav.php');

?>
<section id="about-us-section">
	<h2 style="color: white; font-family: verdana;">About Us</h2>

	<div class="clearfix">
		<h3 style="color:white; font-family:verdana;"> WHO ARE WE? </h3>
		<p align="justify"> MARVEL ONLINE CAMERA SHOP WAS ESTABLISHED ON 28 FEBRUARY 2016 OFICIALLY BY MARVEL CO. IT IS AIMED TO HELP USERS AROUND THE WORLD SHOPPING MAID EASY.
		WE ARE FOCUSED ON KEEPING SHOPPING SIMPLE, AT THE SAME TIME, SECURE AND TRUSWORTHY TO ENSURE YOUR ONLINE SHOPPING EXPERIENCE ARE WONDERFUL.
		 </p>
		 <p align="justify"> AT THE SAME TIME, WE WANTED TO REVOLUTIONIZE THE ONLINE SHOPPING WORLD BY PROVIDING A HIGHLY FUNCTIONAL SHOPPING WEBSITE, WITH NEW 
		 RENOVATION AND A NEW SYSTEMATIC MANAGEMENT SYSTEM THAT WILL HELP USERS ALL OVER THE WORLD.
		 </p>
		 <p align="justify"> WE HOPE, WE WILL ACHIEVE OUR GOALS AND MISSIONS IN THIS TRADE AND BECOME A WORLD'S LEADING ONLINE SHOPPING WEBSITE SPECIALIZING IN CAMERA
		 GADGETS AND MODIFICATIONS. WE WILL TRY OUR BEST TO STRIVE FOR PERFECTIONS AND BE A MASTER IN OUR SPECIFICATIONS.
		 </p>
		 <p align="justify"> CHEERS,</p>
		 <p align="justify">THE MARVEL'S TEAM</p>
	</div>
</section>

<?php include 'footer.php'; ?>



</body>
</html>