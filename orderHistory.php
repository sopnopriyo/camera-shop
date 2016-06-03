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

    include('main-menu.php');
    include('search-nav.php');
      
?>
<body>

<style type="text/css">

</style>


<?php
    if (isset($_SESSION['name'])) {
        $id = $_SESSION['id'];


        $name = $email = $phone = $address ="";

        $sql = "SELECT * FROM orderProduct WHERE customer_id = $id";

           $result = $mysqli->query($sql);

           
    }
?>

<section>
<center>
<caption>Order History</caption>
<?php 
    
    if ($result->num_rows > 0) {

        ?>

        <table>
        <tr>
        <th>Sr.</th>
        <th>Item Name </th>
        <th>Status</th>
        <th>Date</th>
        </tr>
        <?php

                    $index=1;

                    while($row = mysqli_fetch_array($result))
                    {

                        $whereIn = $row['item_id'];
                        $sql2 = "SELECT name FROM product WHERE id IN ($whereIn)";
        
                        $result2 = $mysqli->query($sql2);
                            $name="";
                         while($row2 = mysqli_fetch_assoc($result2)){

                            $name.=$row2['name'].",  ";
                         }


                         echo "<tr>"."<td>".$index++."</td>"."<td>" . $name . "</td>"."<td> " . $row['status']."</td>"."<td> " . $row['created_date']."</td>"."</tr>"; 
                    }


                ?>
            </table>
                <?php
                } 
                else {
                    echo "No result found";
                }


                ?>

                </center>
</section>


<?php include('footer.php');?>

</body>
</html>