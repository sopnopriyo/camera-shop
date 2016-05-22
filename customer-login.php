<?php
include_once 'includes/db_connect.php';
?>

<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
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


     
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         //session_register("email");
         //$_SESSION['login_user'] = $email;
         
         header('Location: ./index.php');
         
         exit();
                
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
                  <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <a href="customer-register.php">Not registered ? Sign up now !</a>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>