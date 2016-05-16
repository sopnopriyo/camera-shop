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
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Tamron 16-300mm</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$450.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                       <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L2.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Tamron SP 150-600mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$800.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L3.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Tamron SP 150-600mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$810.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L4.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Tamron 16-300mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$410.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                     
                
                
                  
                
                    </ul>
                </div>

</section>

<?php include 'footer.php'; ?>

</body>
</html>