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

<aside id="sidebar">
<h1 style="font-family: tahoma; color: #FF7800">Categories</h1>

    <nav style="font-family: tahoma">
       <ul class="sidenav">
           <li> <a href="camera.php">Camera</a></li>
            <li> <a href="accesories.php">Lense</a></li>
            <li> <a href="accesories.php">Memory Card</a></li>
            <li> <a href="accesories.php">Camera Bag</a></li>
            <li> <a href="accesories.php">Accesories</a></li>
       </ul> 
    </nav>
</aside>


  

<section id="contents">
   <div id="homepage-content">
                    <h3 style="font-family: tahoma">Top products</h3>
                    <ul style="font-family: tahoma">
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon DX-56 VR II Lens</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$550.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                       <li>
                            <div class="img"><a href="#"><img alt="" src="img/eos-rebel.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon Eos Rebel </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$750.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c4.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Nikon D3300</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1050.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f9.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">GE Digital E1410SW</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$530.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/b1.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon Coolpix Soft-3 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$57.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c6.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon EOS 5D Mark III</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$479.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/T7.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Manfrotto Pixi </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$73.40</strong>
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
                                    <span class="st">Our price:</span><strong>$850.00</strong>
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
