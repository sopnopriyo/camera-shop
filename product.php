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
		<h2>Colored Table Header</h2>
		<p><a href="addProduct.php">Add Product</a></p>
		<?php 

			if(empty($successMessage)){
				
			}
			else
			{
				echo $successMessage;
			}
		?>
		<p></p>
	<table>
	  	<tr>
	    	<th>Sr. No</th>
	    	<th>Name</th>
	    	<th>Stock Status</th>
			<th>Catagory</th>
			<th>Price</th>
			<th>Quantity</th>
			<th colspan="6"> Action </th>


	    </tr>
			<?php 
				$sql = "SELECT p.id, p.name,p.price,p.stock_status, p.quantity ,c.name as cat  FROM product p, catagory c where c.name =(select name from catagory where id = p.catagory_id)";
				$result = $mysqli->query($sql);

				if ($result->num_rows > 0) {
			   		
			   		while($row = mysqli_fetch_array($result))
		          	{
		         		 echo "<tr><td>" . $row['id'] . "</td><td> " . $row['name'] ."</td><td> " . $row['stock_status'] ."</td><td> " . $row['cat'] ."</td><td> " . $row['price'] ."</td><td>".$row['quantity']."</td>"."<td>"."<a href =\""."delete-product.php?id=".$row['id'].""."\"".">"."Delete"."</a>"."</td>"."<td>"."<a href =\""."update-product.php?id=".$row['id'].""."\"".">"."Update"."</a>"."</td>"."</tr>"; 
		          	}
			    
				} 
				else {
			    	echo "No result found";
				}
		  ?>
	  
  </table>
</section>

<footer>
Copyright © sopnopriyo.com
</footer>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
