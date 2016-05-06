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
                       
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f1.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Sony Cyber-shot DSC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$250.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f2.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Sony Cyber-shot DSC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$230.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f3.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon Digital IXUS</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$350.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="img"><a href="#"><img alt="" src="img/f4.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon Digital IXUS</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$350.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f5.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony Cyber-shot DSC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$330.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f6.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon Digital IXUS 160 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$270.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f7.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon Digital IXUS 275 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$400.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f8.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon Coolpix S7000 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$470.00</strong>
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