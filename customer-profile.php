<?php
include_once 'includes/db_connect.php';
session_start();
?>

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


<?php
    if (isset($_SESSION['name'])) {
        $id = $_SESSION['id'];


        $name = $email = $phone = $address ="";

        $sql = "SELECT * FROM customer WHERE id = $id";

           $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
               

                while($row = mysqli_fetch_array($result))
                {
                    $name = $row['name'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $address = $row['address'];
                       
                }
            }
    }
?>

<center>
    <a href="update-customer-profile.php?id=<?php echo $id ?>">Update Profile</a>
</center>
<div id="ProfilePage">
    <div id="LeftCol">
        <div id="Photo">

        <img src="img/profile.png" height="200px" width="200px">
        </div>
        <div id="ProfileOptions">
        <?php echo $name?>
        </div>
    </div>

    <div id="Info">
        <p>
            <strong>Name:</strong>
            <span><?php echo $name?></span>
        </p>
        <p>
            <strong>email:</strong>
            <span><?php echo $email?></span>
        </p>
        <p>
            <strong>phone:</strong>
            <span><?php echo $phone?></span>
        </p>
        <p>
            <strong>Address:</strong>
            <span><?php echo $address?></span>
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