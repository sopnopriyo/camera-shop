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
            <h2>Update Product</h2>
            <?php
            if (empty($successMessage)) {

            } else {
            echo $successMessage;
            }
            ?>
            

        <?php 

            if (isset($_GET['id'])) {

                $name = $color = $price = $quantity = $price = $description= "";
               
                $id = $_GET['id'];
                $sql = "SELECT * FROM product where id = $id";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    //var_dump($row)

                    while($row = mysqli_fetch_array($result))
                    {
                        $name = $row['name'];
                        $color = $row['color'];
                        $price = $row['price'];
                        $quantity = $row['quantity'];
                        $description = $row['description'];
                           
                    }
                
                } 
                else {
                    echo "No result found";
                }

            }
      ?>

    <?php
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $name = $_POST['name'];
            $color = $_POST['color'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            
        $sql = "UPDATE product SET name = '$name', color = '$color' , price = '$price' , quantity ='$quantity',description='$description' WHERE id = $id";
            if ($mysqli->query($sql) === TRUE) {
                        echo "Product Has Been updated";
                        header('Location: ./product.php');
                        exit();
                        
            }
               else {
                  echo "error";
            }

        }
    ?>
    <p>
    <span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        Name: <input type="text" name="name"  value="<?php echo $name;?>"><br>
        Color: <input type="text" name="color"  value="<?php echo $color;?>"><br>
        Price: <input type="text" name="price"  value="<?php echo $price;?>"><br>
        Quantity: <input type="text" name="quantity"  value="<?php echo $quantity;?>"><br>
        Description <textarea name="description" rows="5" cols="20" ><?php echo $description;?> </textarea>
        
        <input type="hidden" name="id" value="<?php echo $id;?>" />  <br>

        <input type="submit" name="submit" value="Update">  
    </form>
    
     
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