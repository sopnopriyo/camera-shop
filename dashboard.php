<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>


<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="styles/main.css" />
<style type="text/css">
	#metrics {
    width: 95%;
    margin: 20px auto;
}
.box {
    background-color: #808080;
    border-radius: 25px;
    height: 180px;
    width: 400px;
    margin: 30px;
    font-weight: bold;
    color:#FFFFFF;
    text-align: center;
    display: inline-block;
    float: left;
}
.head {
    padding: 15px;
    font-size: 30px;
    line-height: 35px;
}
.top_margin {
    margin-top: 10px
}
.count {
    font-size: 60px;
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

			<?php 
				$sql1 = "SELECT id  FROM product";
				$result1 = $mysqli->query($sql1);
				$number_of_product = $result1->num_rows;

				$sql2 = "SELECT id  FROM catagory";
				$result2 = $mysqli->query($sql2);
				$number_of_catagory = $result2->num_rows;

				$sql3 = "SELECT id  FROM message";
				$result3 = $mysqli->query($sql3);
				$number_of_message = $result3->num_rows;


					
		  ?>
		  

	<div id="metrics">
		    <div class="box">
		        <div class="head">Total Product</div>
		        <div class="count"><?php echo $number_of_product; ?></div>
		    </div>
		    <div class="box">
		        <div class="head">Total Catagories</div>
		        <div class="count "><?php echo $number_of_catagory; ?></div>
		    </div>
		    <div class="box">
		        <div class="head">Total Order</div>
		        <div class="count"><?php echo "0"; ?></div>
		    </div>
		    <div class="box">
		        <div class="head">Total Message</div>
		        <div class="count "><?php echo $number_of_message ?></div>
		    </div>
	</div>

</section>
<?php include 'footer.php'; ?>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
