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
                            <div class="img"><a href="#"><img alt="" src="acc/T1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Manfrotto Compact </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$350.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T2.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Tecno Selfie Stick</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$100.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T3.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Velbon EF-44 Tripod</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$209.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T4.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Manfrotto 190GO!</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$304.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T5.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Manfrotto 391RC2 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$205.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T6.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Manfrotto Befree Co. </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$570.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T7.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Manfrotto Pixi Mini </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$369.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li><li>
                            <div class="img"><a href="#"><img alt="" src="acc/T8.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Manfrotto Compact Li. </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$409.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                       <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T9.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Manfrotto 055XPRO3 3</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$390.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T10.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Steadicam Curve</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$376.00</strong>
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