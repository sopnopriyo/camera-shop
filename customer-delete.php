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
<?php include('admin-nav.php'); ?>
<nav id="dashboard-auth">
	<ul>
		<li><a href=""> Welcome <?php echo htmlentities($_SESSION['username']); ?>! </a></li>
		<li style="float: right;"><a href="includes/logout.php"> Log Out</a></li>
	
		
	</ul>
</nav>

<section id="dashboard-main">


<?php

   if (isset($_GET['id'])) {
      
     
   		$id = $_GET['id'];
      	$sql = "DELETE FROM customer WHERE id = $id";

	    if ($mysqli->query($sql) === TRUE) {
	            echo "customer Has Been Deleted";
	            header('Location: ./customer-list.php'); 
	    }
	   	else {
	          echo $conn->error;
	    }
	}

?>




      
</section>


<?php include 'footer.php'; ?>

 <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
