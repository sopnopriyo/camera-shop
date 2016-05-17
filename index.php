<?php
  include_once 'includes/db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Marvel online camera shop</title>
    <link rel="stylesheet" type="text/css" href="frontEnd.css">
</head>
<body>

<header>
<img src="img/marvel.png" alt="logo">
</header>
<?php 

    include('main-menu.php');
    include ('search-nav.php');
?>

<aside id="sidebar">
<h1 style="font-family: tahoma; color: #FF7800">Top Categories</h1>

    <nav style="font-family: tahoma">
       <ul class="sidenav">
           <li> <a href="camera.php">Camera</a></li>
           <li> <a href="lense.php">Lense</a></li>
            <li> <a href="accesories.php">Accesories</a></li>
       </ul> 
    </nav>
</aside>


  

<section id="contents">
   <div id="camera-page-content">
                    <h3>Top products</h3>
                    
                    <ul>

                    <?php
                        $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 0,8";

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
