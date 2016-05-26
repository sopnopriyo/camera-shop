<?php
  include_once 'includes/db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Virtual Eye Shop !</title>
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


<section id="contents">
   <div id="homepage-content">

   <h2> Search Result</h2>
      <ul>

                    <?php

                      if (isset($_POST['search'])) {
                       
                        $keyword = $_POST['keyword'];

                        $sql = "SELECT * FROM product WHERE name LIKE '%$keyword%'";

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
