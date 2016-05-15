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

   if (isset($_POST['product_data'])) {
      
      $name = $price = $color = $stock_status = $category_id = $description = $image ="" ;
   
      $errors= array();

      $name = $_POST['name'] ;
      $color = $_POST['color'] ;
      $stock_status = $_POST['stock_status'] ;
      $price = $_POST['price'] ;
      $catagory_id = $_POST['catagory_id'] ;
      $description = $_POST['description'] ;

 
      
      if(isset($_FILES['image'])){
         
         $file_name = $_FILES['image']['name'];
         $file_size =$_FILES['image']['size'];
         $file_tmp =$_FILES['image']['tmp_name'];
         $file_type=$_FILES['image']['type'];
         $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
         
         $expensions= array("jpeg","jpg","png");
         
         if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
         }
         
         if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
         }
         
         if(empty($errors)==true){
            move_uploaded_file($file_tmp,"product-img/".$file_name);
            
            $image= "uploads/".$file_name;
           // echo "$file_tmp";
            echo "Success file uploading";
         }
         else{
            print_r($errors);
         }

      }

      $sql = "INSERT INTO product (name,price,image,color,stock_status,catagory_id,description)
                  VALUES ('$name','$price','$image','$color','$stock_status','$catagory_id','$description') ";

      if ($mysqli->query($sql) === TRUE) {
            echo ", done with database"; 
      }
       else {
          echo $conn->error;
      }


   }

?>




<h2>create a form for add product</h2>

      <form action="" method="POST" enctype="multipart/form-data">
         <input type="text" name="name" placeholder="Enter Product Name "/> <br>
         <input type="text" name="color" placeholder="Enter Producgt Color"/> <br>
         <input type="text" name="price" placeholder="Enter Producgt price"/> <br>
         <select name="stock_status">
            <option value="In Stock">In stock</option>
            <option value="Out of Stock">Out of stock</option>
         </select>
         <br>
         <select name="catagory_id">
            <?php 
            $sql = "SELECT id, name  FROM catagory ORDER BY id ASC";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                  //var_dump($row)

                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<option value =\"".$row['id']."\">".$row['name']."</option>";
                  }
             
            } 
           
        ?>
      
         </select> <br>
         <input type="text" name="description" placeholder="Enter Producgt desc"/> <br>
         <input type="file" name="image" /><br>
         <input type="submit" name="product_data" />
      </form>
      
</section>


<?php include 'footer.php'; ?>

 <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
 <?php endif; ?>

</body>
</html>
