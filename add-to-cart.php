<?php 
	session_start();

	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	
	array_push($_SESSION['cart'], $_GET['id']);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p> Product has been added</p>
<a href="shopping-cart.php">view</a>

</body>
</html>