<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/main.css" />

        <style>

            #catagory-table {
                margin-left: 40px;
            }
        </style>
    </head>
    <body>

        <header id="dashboard-header">
            <h1>Marvel Camera Shop</h1>

        </header>
        <?php if (login_check($mysqli) == true) : ?>


        <?php include('admin-nav.php'); ?>
        <nav id="dashboard-auth">
            <ul>
                <li><a href=""> Welcome <?php echo htmlentities($_SESSION['username']); ?>! </a></li>
                <li style="float: right;"><a href="includes/logout.php"> Log Out</a></li>


            </ul>
        </nav>


        <section id="dashboard-main">
            <h2>Update catagory</h2>
            
            

        <?php 

            if (isset($_GET['id'])) {

                $name = "";
               
                $id = $_GET['id'];
                $sql = "SELECT * FROM orderProduct where id = $id";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    //var_dump($row)

                    while($row = mysqli_fetch_array($result))
                    {
                        $name = $row['status'];
                    }
                
                } 
                else {
                    echo "No result found";
                }

            }
      ?>

    <?php
        if (isset($_POST['submit'])) {
            
            $status = $_POST['status'];
            $id = $_POST['id'];
        $sql = "UPDATE orderProduct SET status = '$status' WHERE id = $id";
            if ($mysqli->query($sql) === TRUE) {
                        echo "Status Has Been updated";
                        header('Location: ./order.php');
                        exit();
                        
            }
               else {
                  echo "error";
            }

        }
    ?>
    <p>
    <span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        Status:
        <select name="status">
            <option value="<?php echo $name;?>"><?php echo $name;?></option>
            <option value="Canceled">Canceled</option>
            <option value="Shipped">Created</option>
            <option value="Paid">Paid</option>
            <option value="Unpaid">Unpaid</option>
            <option value="Shipped">Shipped</option>
            
        </select>
        <input type="hidden" name="id" value="<?php echo $id;?>" />        <br>

        <input type="submit" name="submit" value="Update">  
    </form>
    
     
    </section>

    <footer>
        Copyright © sopnopriyo.com
    </footer>
<?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>

</body>
</html>