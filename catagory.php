<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>


<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="styles/main.css" />

      <style>

      #catagory-table {
      	margin-left: 40px;
      }
      </style>
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
		<p><a href="addCatagory.php">Add Catagory</a></p>
		<?php 

			if(empty($successMessage)){
				
			}
			else
			{
				echo $successMessage;
			}
		?>
		<p></p>
	<table id="catagory-table">
	  	<tr>
	    	<th>Sr. No</th>
	    	<th>Catagory Name</th>
	    	<th>Action</th>
	    </tr>
			<?php 
				$sql = "SELECT id, name  FROM catagory ORDER BY id ASC";
				$result = $mysqli->query($sql);

				if ($result->num_rows > 0) {
			   		//var_dump($row)

			   		while($row = mysqli_fetch_array($result))
		          	{
		         		 echo "<tr><td>" . $row['id'] . "</td><td> " . $row['name']."<td>"."<a href =\""."delete-catagory.php?id=".$row['id'].""."\"".">"."Delete"."</a>"."</td>"."<td>"."<a href =\""."update-catagory.php?id=".$row['id'].""."\"".">"."Update"."</a>"."</td>"."</tr>"; 
		          	}
			    
				} 
				else {
			    	echo "No result found";
				}
		  ?>
	  
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
