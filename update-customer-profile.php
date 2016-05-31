<?php
include_once 'includes/db_connect.php';
session_start();
?>
<html>
   
   <head>
      <title>Update Customer Profile</title>
      <link rel="stylesheet" type="text/css" href="frontEnd.css"> 
   </head>
   
   <header>
  <img src="img/marvel.png" alt="logo">
</header>

<?php   include ('main-menu.php');
        include('search-nav.php');

?>
   <body>

     <section> 
      <center>
      <div  style = "width:400px; border: solid 1px #333333; margin-top: 20px ">
      <?php 

            if (isset($_GET['id'])) {

                 $name = $email = $phone = $address ="";

                $id = $_GET['id'];
                $sql = "SELECT * FROM customer where id = $id";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    //var_dump($row)

                    while($row = mysqli_fetch_array($result))
                    {

                        $id = $row['id'];
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $address = $row['address'];

                           
                    }
                
                } 
                else {
                    echo "No result found";
                }

            }
      ?>


      <?php 

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id = $_POST["id"];
           $name = $_POST["name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];


            if (isset($_POST['submit'])) {
                
                   $sql = "UPDATE customer SET name = '$name', phone = '$phone' , address = '$address' WHERE id = $id";

                    if ($mysqli->query($sql) === TRUE) {

                        header('Location: ./customer-profile.php');
                        exit();
                
                    } else {
                       echo "Error";
                    }
            }
         }

       ?>
   
      <h2>Update Member Information</h2>

      
      
        <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              Name: <input type="text" name="name"  value="<?php echo $name;?>"><br>
              Phone: <input type="text" name="phone"  value="<?php echo $phone;?>"><br>
              Address <textarea name="address" rows="4" cols="50" ><?php echo $address;?> </textarea> <br>
               <input type="hidden" name="id" value="<?php echo $id;?>" />  <br>

              <input type="submit" name="submit" value="Update">
        </form>

     

      </div>
       </center>
      </section>
      
    
      
   </body>

   <?php include ('footer.php'); ?>
</html>