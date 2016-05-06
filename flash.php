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
                                <div class="img"><a href="#"><img alt="" src="acc/F1.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Nikon - SB-700 AF </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$230.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F2.jpg"></a></div>
                                <div class="info">
                                   <a class="title" href="product-details.php">Canon - Speedlite 430EX III</a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$310.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F3.jpg"></a></div>
                                <div class="info">
                                   <a class="title" href="product-details.php">Insigniaâ„¢ - TTL </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$370.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F4.jpg"></a></div>
                                <div class="info">
                                   <a class="title" href="product-details.php">Canon - Speedlite 270EX II </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$290.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F5.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Canon - Speedlite 600EX-RT </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$340.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li><li>
                                <div class="img"><a href="#"><img alt="" src="acc/F6.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Insigniaâ„¢ - TTL </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$405.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                           <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F7.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Insigniaâ„¢ - Mini Flash Diffuser</a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$440.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F8.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Sunpak - DigiFlash 3000 </a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$270.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img"><a href="#"><img alt="" src="acc/F9.jpg"></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php">Insigniaâ„¢ - Flash Diffuser 12 x 8</a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$490.00</strong>
                                    </div>
                                    <div class="actions">
                                        <a href="product-details.php">Details</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
    </div>                    
</section>

<footer>
      Copyright @University of Malaya
</footer>

</body>
</html>