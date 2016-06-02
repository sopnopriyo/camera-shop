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
		<h2>Order</h2>
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
	    	
	    	<th> Name</th>
	    	<th>Email</th>
	    	<th> Phone</th>
	    	<th >Address</th>
			<th >Total Price</th>
			<th >Item Names</th>
			<th >Order Status</th>
			<th >Created Date</th>
			<th >Action</th>
			
			
			
			
	    </tr>
			<?php 
				$sql = "SELECT c.name,c.email,c.phone,c.address ,o.id,o.status,o.item_id,o.created_date FROM customer c,orderProduct o WHERE o.customer_id = c.id  ";
				$result = $mysqli->query($sql);

				if ($result->num_rows > 0) {
			   		//var_dump($row)

			   		while($row = mysqli_fetch_array($result))
		          	{

		          		$name= "";
		          		$price=0;

		          		$whereIn = $row['item_id'];
		          		$sql2 = "SELECT name,price FROM product WHERE id IN ($whereIn)";
        
        				$result2 = $mysqli->query($sql2);
        					
        				 while($row2 = mysqli_fetch_assoc($result2)){
        				 	$name.=$row2['name'].",  ";
        				 	$price+= $row2['price'];
        				 }


		         		 echo "<tr><td>" . $row['name'] . "</td><td> " . $row['email'] ."</td><td> " . $row['phone'] ."</td>"."<td>" . $row['address']."</td>"."<td> " . $price."</td>"."<td> " . $name."</td>"."<td> " . $row['status']."</td>"."<td> " . $row['created_date']."</td>"."<td>"."<a href =\""."update-order.php?id=".$row['id'].""."\"".">"."Update"."</a>"."</td>"."</tr>"; 
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
  