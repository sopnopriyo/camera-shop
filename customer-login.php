<?php
include_once 'includes/db_connect.php';
?>

<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $error = "";


      if (empty($_POST['email'])) {
         $error = "name requred"; 
      }
      
      if (empty($_POST['password'])) {
         $error = "Password requred"; 
      }
      if (empty($error)) {
         
         $email = $_POST['email'];
         $password = $_POST['password']; 
         
         
         $sql = "SELECT id,name FROM customer WHERE email = '$email' and password = '$password'";
         $result = $mysqli->query($sql);


            while($row = mysqli_fetch_array($result))
            {
               $_SESSION['name'] =$row['name'];
               $_SESSION['id'] =$row['id'];
                  
            }


         $count = $result->num_rows;


        
         if($count == 1) {
            
           
            header('Location: ./index.php');
            
            exit();
                   
         }else {
            $error = "Your Login Name or Password is invalid";
         }

       }
      
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="frontEnd.css">   
   </head>
   

   <header>
      <img src="img/marvel.png" alt="logo">
   </header>

   
<?php   include ('main-menu.php');
    include('search-nav.php');

?>


   <br><br>
   <section> 
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
                  <label>Email  :</label> <br><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <a href="customer-register.php">Not registered ? Sign up now !</a>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </section>
   <?php include('footer.php');?>
</html>