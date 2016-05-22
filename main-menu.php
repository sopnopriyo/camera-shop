<?php 
session_start();
   
 ?>
<nav id="navbar" style="font-family:tahoma">
   <ul>
        <li><a href="index.php">Home</a> </li>
        <li><a href="camera.php">Camera</a>   
            <ul>        
                <li><a href="dslr.php">DSLR</a></li>
                <li><a href="digital-camera.php">Digital Camera</a></li>
                <li><a href="camrecorder.php">Camrecorder</a></li>
                <li><a href="dslr.php">Broadcast Camera</a></li> 
            </ul>           
        </li>
        <li><a href="accesories.php" >Accesories</a> 
            <ul>
                <li><a href="lense.php">Lense</a></li>
                <li><a href="flash.php">Flash</a></li>
                <li><a href="tripod.php">Tripod</a></li>
                <li><a href="memorycard.php">Memory Card</a></li>
                <li><a href="bagcase.php">Bag and Case</a></li>
            </ul>
        </li>
        <li><a href="about-us.php">About Us</a> </li>
        <li><a href="contact-us.php">Contact Us</a> </li>
        <li><a href="sitemap.php">Sitemap</a> </li>
       

        <?php if (empty($_SESSION["name"])) {
            ?>
             <li style="float:right;"> <a href="customer-login.php"> <img src="img/user-icon.png"  height="16.5px" width="16.5px"> Login / Register</a></li>
            <?php
                
                }
                else{

                    ?>

                     <li style="float:right;"> <a href="customer-profile.php"> <img src="img/user-icon.png"  height="16.5px" width="16.5px">

                      <?php
                        echo "Hello ! ".$_SESSION["name"];

                    ?>

                    </a>
                    <ul>

                    
                    <li style="float:right;"><a href="customer-logout.php">Logout</a> </li>

                        </ul></li>



                    <?php
                }
        ?>
         
       <li style="float:right;"> <a href="shopping-cart.php"> <img src="img/cart-icon.png"  height="20px" width="20px"> Cart (<?php  echo count($_SESSION['cart']);?> )</a></li>
    </ul>

</nav>
