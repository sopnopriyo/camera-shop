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

	<?php
		// define variables and set to empty values
	$nameErr = $name = $successMessage ="" ;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			
  			if (empty($_POST["name"])) {
    			$nameErr = "Name is required";
  			} 
  			else {
    			$name = test_input($_POST["name"]);
    			// check if name only contains letters and whitespace
		    	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      		$nameErr = "Only letters and white space allowed"; 
		    	}

		    	
  			}


  			if (empty($nameErr)) {
  				$sql = "INSERT INTO catagory (name)
						VALUES ('$name') ";

					if ($mysqli->query($sql) === TRUE) {

						//$_SESSION["successMessage"] = "Record has been added Succesfully !";

						header('Location: ./catagory.php');
                		exit();
			    
					} else {
				    	$nameErr = $conn->error;
					}
  			}
  	}


	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}



?>


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

<h2>Add a product catagory </h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  		Name: <input type="text" name="name" value="<?php echo $name;?>">
  		<span class="error">* <?php echo $nameErr;?></span>
  		<br><br>

  <input type="submit" name="submit" value="Create">  
</form>

<?php
	if (empty($nameErr)) {
		
	}
	else {
		echo "Input error";
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
