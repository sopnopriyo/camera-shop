<?php 
    
    include_once 'includes/db_connect.php';
    session_start();


    $keys = $_SESSION['cart'];
    $array = array_fill_keys($keys, 1);
    


    if (isset($_SESSION['cart'])) {
        # code...
    
        
            $whereIn = implode(',', $_SESSION['cart']);
            $sql = "SELECT * FROM product WHERE id IN ($whereIn)";
        

        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {

            $lense=0;
    
        }

    }

 ?>


<?php

    if ( isset( $_POST['empty-cart'] ) ) {
       
        unset($_SESSION['cart']);
        header('Location: ./index.php');    
    }

?>



<?php 

    if (isset($_POST['PayButton'])) {
       $payment= "Paid";
    }

?>


<?php

    if ( isset( $_POST['order'] ) ) {




        $customer_id = $_SESSION['id'];
        $item_names = implode(',', $_SESSION['cart']);

        if (empty($payment)) {
          $status = "Created";
        }
        else{
          $status = "Paid";
        }
        
        

    
         $sql = "INSERT INTO orderProduct(customer_id, item_id, status) VALUES
                 ('$customer_id','$item_names','$status') ";

      
            if ($mysqli->query($sql) === TRUE) {

                        unset($_SESSION['cart']);

                        $sql2 = "SELECT name,price FROM product WHERE id IN ($whereIn)";
                        $result2 = $mysqli->query($sql2);
                          
                        while($row2 = mysqli_fetch_assoc($result2)){
                          $name.=$row2['name'].",  ";
                          $price+= $row2['price'];
                        }


                          $to = $_SESSION['user_email'];
                          $subject = "order recipt";
                          $msg = "Items are : ".$name."\n Total Price".$price;
                          
                          mail($to,$subject,$msg);


                          echo "<script type=\"text/javascript\">alert('Thank you , an email with order details has been sent to your email.');
                           window.location.replace(\"/index.php\");
                          </script>";
 
                        //header('Location: ./index.php');


                        exit();
                        
            }
               else {
                  echo "error";
            }

       
    }

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
?>


 <section id="form"><!--form-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

                  

                  <?php if (empty($_SESSION['name'])) {
                        
                        header('Location: ./customer-login.php');

                      }

                ?>

        <h2> Invoice details</h2>
                    <table border="1" style="width:60%">
                        <thead >
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            
                        </thead>
                        <tbody>

                        <?php $total = 0; ?>
                        <?php if($result->num_rows > 0){ ?>

                    


                            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                                <tr>
                                    <td class="text-center"><strong><?php echo $row['name'];?></strong></td>
                                    <td class="text-center"><?php echo $row['price'];?></td>
                                    <td class="text-center">1</td>
                                    <?php $itotal = $row['price'] *1; ?>
                                    <td class="text-center"><font class="itotal"><?php echo $itotal; ?></font></td>

                                    <?php if($row['catagory_id']==27){
                                        $lense++;
                                    } ?>

                                    <?php 

                                     
                                    ?>
                                </tr>
                                
                                <?php $total = $total + $itotal;?>  
                                
                            <?php } ?> 
                               
                                                   
                        </tbody>
                    </table>

                    <br>
                   
                     <?php echo "Total amount : <strong>".$total."</strong> RM"; ?><br>
                     <?php echo "GST 8 %: <strong>".$tax=(($total*8)/100)." <strong> RM"; ?><br>
                     Total : <?php echo $tax+$total; ?></p>
                      
                  
                      <div class="pull-right">
                       


                      <?php

                        if(empty($payment))
                        {
                        ?>
                        <hr>
                        <div class="container">
                                 <img src="images/credit-card.jpg" width="350px">
                              
                              <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                      <label for="PaymentAmount">Payment amount</label>
                                      
                                          <span>RM</span>
                                          <span><?php echo $tax+$total; ?></span>
                                  <div class="form-group">
                                      <label or="NameOnCard">Name on card</label>
                                      <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
                                  </div>
                                  <div class="form-group">
                                      <label for="CreditCardNumber">Card number</label>
                                      <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
                                  </div>
                                  <div class="expiry-date-group form-group">
                                      <label for="ExpiryDate">Expiry date</label>
                                      <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
                                  </div>

                                  <div class="security-code-group form-group">
                                      <label for="SecurityCode">Security code</label>
                                      <div class="input-container" >
                                          <input id="SecurityCode" class="form-control" type="text" ></input>
                                          <i id="cvc" class="fa fa-question-circle"></i>
                                      </div>
                                      <div class="cvc-preview-container two-card hide">
                                          <div class="amex-cvc-preview"></div>
                                          <div class="visa-mc-dis-cvc-preview"></div>
                                      </div>
                                  </div>
                                  <div class="zip-code-group form-group">
                                      <label for="ZIPCode">ZIP/Postal code</label>
                                      <div class="input-container">
                                          <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                                          <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
                                      </div>
                                  </div>
                                  <button id="PayButton" name ="PayButton"class="btn btn-block btn-success submit-button" type="submit">
                                      <span class="submit-button-lock"></span>
                                      <span class="align-middle">Pay RM <?php echo $tax+$total; ?></span>
                                  </button>
                              </form>
                          </div>
                        </div>

                        <?php } 
                            else{

                                ?>

                                    <label> Payment has been successfully made. </label>
                                <?php
                            }
                        ?>


                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <button name="order">Confirm Order!!!</button>
                          
                            
                        </form>
                        
                
                    </div>
                    <?php }

                    else{ ?>
                            <tr><td colspan="5" class="text-center alert alert-danger"><strong>*** You do not have anything in the cart ***</strong></td></tr>
                            </tbody>
                        </table>
                    <?php } ?>


                    




        </div>
      </div>
    </div>
  </section><!--/form-->



<?php include('footer.php');?>

</body>
</html>
