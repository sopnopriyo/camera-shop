<?php
include_once 'includes/db_connect.php';
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="frontEnd.css">   
   </head>
   

   <header>
      <img src="img/marvel.png" alt="logo">
   </header>

   <?php  include 'main-menu.php';?>
   
   <body>
      <?php
         
         // define variables and set to empty values
         $name = $email = $password = $phone = $address = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];


            if (isset($_POST['submit'])) {
                
                $sql = "INSERT INTO customer (name,email,password,phone,address)
                        VALUES ('$name','$email','$password','$phone','$address') ";

                    if ($mysqli->query($sql) === TRUE) {

                        header('Location: ./customer-login.php');
                        exit();
                
                    } else {
                       echo "Error";
                    }
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <center>
            <h2>Member resistration</h2>
            
            <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
               <table>
                  <tr>
                     <td>Name:</td> 
                     <td><input type = "text" name = "name"></td>
                  </tr>
                  
                  <tr>
                     <td>E-mail:</td>
                     <td><input type = "text" name = "email"></td>
                  </tr>
                  
                  <tr>
                     <td>Password:</td>
                     <td><input type = "password" name = "password"></td>
                  </tr>
                  
                  <tr>
                     <td>Addresss:</td>
                     <td><textarea name = "address" rows = "5" cols = "20"></textarea></td>
                  </tr>
                  
                  <tr>
                     <td>Phone:</td>
                     <td><input type = "text" name = "phone"></td>
                  </tr>
                  
                  <tr>
                     <td>
                        <input type = "submit" name = "submit" value = "Submit"> 
                     </td>
                  </tr>
               </table>
            </form>
         </center>        
    
      
   </body>
</html>