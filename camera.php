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
                            <div class="img"><a href="#"><img alt="" src="img/eos t51.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Eos T-51</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$750.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/eos-70d.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Eos 70-D</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$579.40</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/EOS-80D.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Eos 80-D</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$499.99</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/EOS-M3.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">EOS M-3</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$679.70</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/eos-rebel.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Eos Rebel</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$750.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c1.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon D7200 DSLR</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$770.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c2.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Nikon D7100 DSLR </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$735.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>

                         <li>
                            <div class="img"><a href="#"><img alt="" src="img/c3.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Nikon D5500 DSLR </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$549.95</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c4.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Nikon D3300 DSLR</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$349.95</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/c5.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon EOS 5D Mark III</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$3009.90</strong>
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
                                    <span class="st">Our price:</span><strong>$2249.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera2.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon AD-3</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$779.90</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera3.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon Mark 9-D</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$2110.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
 <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera4.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon CC-69</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1120.95</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera5.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Nikon Frans 78</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$950.50</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/camera6.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Nikon Fr-60D</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1150.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
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
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/f9.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony Cyber-shot DSC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$600.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
 <li>
                            <div class="img"><a href="#"><img alt="" src="img/r1.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony HDR-CX405 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1050.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/r2.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">GoPro Hero+ LCD Sports </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1011.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/r3.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">IRB W9-SJ4000 W9 WIFI </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$350.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/r5.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Panasonic Standard HC</a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$850.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/r6.jpeg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">GoPro Hero4-CHDHX-401 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$2050.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="img/r7.jpeg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Sony HDR-PJ410 </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1150.00</strong>
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