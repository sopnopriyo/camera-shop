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

                $name = $price = $promotion = "";
               
                $id = $_GET['id'];
                $sql = "SELECT * FROM product where id = $id";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    //var_dump($row)

                    while($row = mysqli_fetch_array($result))
                    {
                        $name = $row['name'];
                        $price = $row['price'];
                        $promotion = $row['promotion'];
                           
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
            $promotion = $_POST['promotion'];
            
        $sql = "UPDATE product SET promotion = '$promotion' WHERE id = $id";
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
        Price: <input type="text" name="price"  value="<?php echo $price;?>"><br>
        Promotion: <input type="text" name="promotion"  value="<?php echo $promotion;?>"><br>
        
        <input type="hidden" name="id" value="<?php echo $id;?>" />  <br>

        <input type="submit" name="submit" value="Add Promotion">  
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