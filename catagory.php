<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>


<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="styles/main.css" />
</head>
<body>

<header id="dashboard-header">
	<h1>Marvel Camera Shop</h1>
 		
</header>
<?php if (login_check($mysqli) == true) : ?>
<nav id="dashboard-nav">
	<ul>
		<li><a href="product.php"> Product </a></li>
		<li><a href="catagory.php"> Catagory </a></li>
		<li><a href="order.php" >Order</a></li>
		<li><a href="message.php"> Message</a></li>
		
	</ul>
</nav>
<nav id="dashboard-auth">
	<ul>
		<li><a href=""> Welcome <?php echo htmlentities($_SESSION['username']); ?>! </a></li>
		<li style="float: right;"><a href="includes/logout.php"> Log Out</a></li>
	
		
	</ul>
</nav>

<section id="dashboard-main">
		<h2>Colored Table Header</h2>
		<p><a href="addCatagory.php">Add Catagory</a></p>

	<table>
	  	<tr>
	    	<th>Sr. No</th>
	    	<th>Catagory Name</th>
	    </tr>
	  	<tr>
	    	<td>1</td>
	    	<td>Griffin</td>
	   	</tr>
	  
  </table>
</section>

<footer>
Copyright © W3Schools.com
</footer>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
