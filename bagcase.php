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
                            <div class="img"><a href="#"><img alt="" src="acc/b1.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon Coolpix Soft-3 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$70.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b2.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon DSLR Camera Bag </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$57.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b3.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon Camera Bag</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$63.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b4.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">E-VOGUE CBRT1 DSLR </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$83.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b5.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony Camera Bag</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$59.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b6.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon EOS Camera Bag</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$59.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b7.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">EasyCover Camera Case </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$39.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b8.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">EasyCover Camera Case </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$39.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b9.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Lowepro Camera Bag</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$209.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b10.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Lowepro Tahoe BP 150 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$270.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b11.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">EasyCover Camera Case </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$39.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b12.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Lowepro Rezo TLZ 10 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$109.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li> <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b13.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Lowepro Toploader Zoom </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$109.00</strong>
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