<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Virtual Eye Shop !</title>
    <link rel="stylesheet" type="text/css" href="frontEnd.css">
</head>
<body>

<header>
<h1>City Gallery</h1>
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
<h1>Catagories</h1>

    <nav>
       <ul class="sidenav">
           <li> <a href="camera.html">Camera</a></li>
            <li> <a href="accesories.html">Lense</a></li>
            <li> <a href="accesories.html">Memory Card</a></li>
            <li> <a href="accesories.html">Camera Bag</a></li>
            <li> <a href="accesories.html">Accesories</a></li>
       </ul> 
    </nav>
</aside>

<section id="contents">
   <div id="homepage-content">
                    
                    <h1>1 result Found</h1>
                    <ul>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Product 1</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$550.00</strong>
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
