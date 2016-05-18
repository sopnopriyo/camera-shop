<?php 
session_start();
   
 ?>
<nav id="top-main-nav" style="font-family:tahoma">
   <ul style="color:#301F22">
        <li><a href="index.php">Home</a> </li>
        <li><a href="camera.php">Camera</a> </li>
        <li><a href="accesories.php">Accesories</a> </li>
        <li><a href="about-us.php">About Us</a> </li>
        <li><a href="contact-us.php">Contact Us</a> </li>
        <li><a href="sitemap.php">Sitemap</a> </li>
       

        <?php if (empty($_SESSION["name"])) {
            ?>
             <li class="right"> <a href="customer-login.php"> <img src="img/user-icon.png"  height="20px" width="20px"> Login / Register</a></li>
            <?php
                
                }
                else{

                    ?>

                     <li class="right"> <a href="customer-profile.php"> <img src="img/user-icon.png"  height="20px" width="20px">

                      <?php
                        echo "Hello ! ".$_SESSION["name"];

                    ?>
                    </a></li>

                    <li class="right"><a href="customer-logout.php">Logout</a> </li>

                    <?php
                }
        ?>
         
        <li class="right"> <a href="shopping-cart.php"> <img src="img/cart-icon.png"  height="20px" width="20px"> Cart (<?php  echo count($_SESSION['cart']);?> )</a></li>
    </ul>

</nav>