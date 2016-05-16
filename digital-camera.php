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

    include('main-menu.php')
?>
<nav id="search-nav">
  <center>
    <form method="post" action="search-result.html">
      <input type="text" name="keyword" placeholder="Type an item">
      <select>
        <option value="camera">Camera</option>
        <option value="lense">Lenses</option>
        <option value="accesories">Accesories</option>
        <option value="mercedes">Others</option>
      </select>
      <button type="submit" name="search">Search</button>
    </form>
  </center> 
</nav>

<aside id="camera-page-sidebar">
<h1 style="color: #FF7800">Categories</h1>

    <nav>
       <ul class="camera-page-sidenav">
            <li> <a href="dslr.php">DSLR</a></li>
            <li> <a href="digital-camera.php">Digital Camera</a></li>
            <li> <a href="camrecorder.php">Camrecorder</a></li>
            <li> <a href="dslr.php">Broadcast Camera</a></li>
       </ul> 
    </nav>
</aside>

<section id="camera-contents">
   <div id="camera-page-content">
                    <h3>Top products</h3>
                    
                    <ul>

                    <?php
                        $sql = "SELECT * 
                                FROM product
                                WHERE catagory_id = 28";

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
                                        <a href="product-details.php">Details</a>
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