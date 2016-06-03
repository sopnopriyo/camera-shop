<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body style="background-color: #0ca3d2;">
        <section class="container">
            <div class="login">
              
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error">Error Logging In!</p>';
                    }
                    ?> 
                      <h1>Login to Admin Area</h1>
                    <form action="includes/process_login.php" method="post" name="login_form"> 			
                        <p> <input type="text" name="email" placeholder="Enter email" /> </p>
                        <p> <input type="password" 
                                         name="password" 
                                         id="password" placeholder="Enter Password" /></p>
                        <p><input type="button" 
                               value="Login" 
                               onclick="formhash(this.form, this.form.password);" /> </p>
                    </form>
                    <p>You are currently logged <?php echo $logged ?>.</p>
              
            </div>
        </section>
    </body>
</html>


