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
<body>

<style type="text/css">

</style>

<div id="ProfilePage">
    <div id="LeftCol">
        <div id="Photo">

        <img src="img/profile.png" height="200px" width="200px">
        </div>
        <div id="ProfileOptions">
        Sirjon
        </div>
    </div>

    <div id="Info">
        <p>
            <strong>Name:</strong>
            <span>Sirjon</span>
        </p>
        <p>
            <strong>email:</strong>
            <span>abc@example.com</span>
        </p>
        <p>
            <strong>phone:</strong>
            <span>+6012222222</span>
        </p>
        <p>
            <strong>Address:</strong>
            <span>ababa,m ahsaha, ahah , hahahha ,lahahhaha, jakl</span>
        </p>
        <p>
            <strong>Member Since:</strong>
            <span>2009</span>
        </p>
    </div>

    <!-- Needed because other elements inside ProfilePage have floats -->
    <div style="clear:both"></div>
</div>


</body>
</html>