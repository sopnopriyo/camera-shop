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
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L5.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Tamron 18-270mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$992.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L7.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon EF 600mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1099.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L8.jpg"></a></div>
                            <div class="info">
                               <a class="title" href="product-details.php">Canon EF 800mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$999.10</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L9.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon EF 200-400mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1011.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="#"><img alt="" src="acc/L10.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="product-details.php">Canon EF 400mm </a>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1164.00</strong>
                                </div>
                                <div class="actions">
                                    <a href="product-details.php">Details</a>
                                </div>
                            </div>
                        </li>
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

<?php include 'footer.php'; ?>

</body>
</html>