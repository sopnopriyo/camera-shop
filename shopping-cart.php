<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Virtual Eye Shop !</title>
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
     
 <div id="w">
    <header id="title">
      <h1>Your shopping cart details</h1>
    </header>
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="first">Photo</th>
            <th class="second">Qty</th>
            <th class="third">Product</th>
            <th class="fourth">Line Total</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <!-- shopping cart contents -->
          <tr class="productitm">
            <!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->
            <td><img src="images/design-bundle-pack.png" class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>Design Bundle Package</td>
            <td>$79.00</td>
            <td><span class="remove"><img src="images/trash.png" alt="X"></span></td>
          </tr>
          <tr class="productitm">
            <!-- http://www.amazon.com/Stuff-My-Cat-The-Book/dp/0811855384 -->
            <td><img src="images/stuff-on-cat-book.png" class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>Stuff on my Cat: The Book</td>
            <td>$8.95</td>
            <td><span class="remove"><img src="images/trash.png" alt="X"></span></td>
          </tr>
          <tr class="productitm">
            <!-- http://www.amazon.com/SpongeBob-SquarePants-The-First-Episodes/dp/B002DYJTVW -->
            <td><img src="images/first-100-spongebob-dvd.png" class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>SpongeBob's First 100 Episodes</td>
            <td>$75.00</td>
            <td><span class="remove"><img src="images/trash.png" alt="X"></span></td>
          </tr>
          <tr class="productitm">
            <!-- http://www.barnesandnoble.com/w/javascript-and-jquery-david-sawyer-mcfarland/1100405042 -->
            <td><img src="images/javascript-jquery-missing-manual.png" class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>JavaScript &amp; jQuery: The Missing Manual</td>
            <td>$27.50</td>
            <td><span class="remove"><img src="images/trash.png" alt="X"></span></td>
          </tr>
          
          <!-- tax + subtotal -->
          <tr class="extracosts">
            <td class="light">Shipping &amp; Tax</td>
            <td colspan="2" class="light"></td>
            <td>$35.00</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="totalprice">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span class="thick">$225.45</span></td>
          </tr>
          
          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout"><button id="submitbtn">Checkout Now!</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<footer>
      Copyright @University of Malaya
</footer>

</body>
</html>
