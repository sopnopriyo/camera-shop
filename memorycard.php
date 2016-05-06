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
                            <div class="img"><a href="#"><img alt="" src="acc/d1.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">SanDisk Ultra 16 GB </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$30.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d2.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Samsung 16 GB </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$30.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d3.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">SanDisk 8 GB SDHC </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$23.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d4.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">SanDisk Ultra 32 GB </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$40.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li><li>
                            <div class="img"><a href="#"><img alt="" src="acc/d5.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony 32 GB SDHC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$40.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                       <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d6.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony 4 GB SDHC </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$15.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d7.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Transcend 32 GB SDHC </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$40.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/d8.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Kingston UHS-I 32 GB SDHC </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$40.00</strong>
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