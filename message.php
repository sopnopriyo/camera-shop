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
		<h2>Message</h2>
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
	    	<th>Name</th>
	    	<th>Email</th>
	    	<th>Phone</th>
			<th colspan="6">Message</th>
			
	    </tr>
			<?php 
				$sql = "SELECT name, email, phone , message FROM message ORDER BY id DESC";
				$result = $mysqli->query($sql);

				if ($result->num_rows > 0) {
			   		//var_dump($row)

			   		while($row = mysqli_fetch_array($result))
		          	{
		         		 echo "<tr><td>" . $row['name'] . "</td><td> " . $row['email'] ."</td><td> " . $row['phone'] ."</td><td> " . $row['message']."</td></tr>"; 
		          	}
			    
				} 
				else {
			    	echo "No result found";
				}
		  ?>
	  
  </table>
</section>

<?php include('footer.php');?>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
  