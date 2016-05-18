<?php 
	session_start();

	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
		array_push($_SESSION['cart'], $_GET['id']);
		header('Location: ./shopping-cart.php');

	}
	
	array_push($_SESSION['cart'], $_GET['id']);

	header('Location: ./shopping-cart.php');

	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


</body>
</html>