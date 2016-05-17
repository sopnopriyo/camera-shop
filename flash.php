<?php
include_once 'includes/db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="frontEnd.css">

</head>

<body>

<header>
<title>Marvel Camera Shop</title>
<img src="img/marvel.png" alt="logo">
</header>

<?php 

    include('main-menu.php');
    include('search-nav.php');
?>
<aside id="accesories-page-sidebar">
<h1 style="color: #FF7800">Categories</h1>

    <nav>
        <ul class="sidenav">
            <li> <a href="lense.php">Lense</a></li>
            <li> <a href="flash.php">Flash</a></li>
            <li> <a href="tripod.php">Tripod</a></li>
            <li> <a href="memorycard.php">Memory Card</a></li>
            <li> <a href="bagcase.php">Bag and Case</a></li>
            <li> <a href="accesories.php">Accesories</a></li>
       </ul> 
    </nav>
</aside>

<section id="contents">
   <div id="accesories-page-content">
                      <h3>Top products</h3>
                     <ul>

                    <?php
                        $sql = "SELECT * 
                                FROM product
                                WHERE catagory_id = 30
                                ";

                       $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                           

                            while($row = mysqli_fetch_array($result))
                            {

                                ?>
            
                            <li>
                                <div class="img"><a href="#"><img alt="" src="<?php echo $row['image']; ?>"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php"><?php echo $row['name']; ?></a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$<?php echo $row['price']; ?></strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php?id=<?php echo $row['id']; ?>">Details</a>
                                    </div>
                                </div>
                            </li>
                        

                            <?php



                            }
                        
                            } 
                            else {
                                echo "No result found";
                            }
                    ?>

                       
                    

                    </ul>
                </div>

</section>

<footer>
      Copyright @University of Malaya
</footer>

</body>
</html>