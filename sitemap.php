<!DOCTYPE html>
<html>
<head>
    <title>Site Map</title>

 <link rel="stylesheet" type="text/css" href="frontEnd.css">
 <style >
 ul li a{
    text-decoration: none;
 }
 </style> 
</head>
<body>

<header>
    <img src="img/marvel.png" alt="logo">
</header>

<?php 

    include('main-menu.php')
?>
<br><br>
<div class="container">  
   
<h2>Site Map</h2>

<dl>
     <ul>
        <li><a href="index.php" >Home</a></li>
<ul>
        <li><a href="camera.php" >Camera</a></li>
        <li><a href="lense.php" >Lense</a></li>
<li><a href="accesories.php" >Accesories</a></li>
    </ul>
        <li><a href="camera.php">Camera</a></li>
<ul>
        <li><a href="dslr.php" >DSLR</a></li>
        <li><a href="digital-camera.php" >Digital Camera</a></li>
<li><a href="camrecorder.php" >Camrecorder</a></li>
<li><a href="dslr.php" >Broadcast Camera</a></li>
    </ul>
        <li><a href="accesories.php" ="delete">Accesories</a></li>
<ul>
        <li><a href="lense.php" >Lense</a></li>
        <li><a href="flash.php" >Flash</a></li>
<li><a href="tripod.php" >Tripod</a></li>
<li><a href="memorycard.php" >Memory Card</a></li>
<li><a href="bagcase.php" >Bag and Case</a></li>
<li><a href="accesories.php" ="delete">Accesories</a></li>

    </ul>
        <li><a href="about-us.php" ="check">About Us</a></li>
        <li><a href="contact-us.php"="info">Contact Us</a></li>
      </ul>
</dl>

  
</div>

</body>
<footer>
      Copyright @University of Malaya
</footer>

</html>