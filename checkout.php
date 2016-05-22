<?php 
    
    include_once 'includes/db_connect.php';
    session_start();


    $keys = $_SESSION[cart];
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
                       

                       <label>Select Shipping Method</label>
                        <select>
                            <option>Fast</option>
                            <option>Regular</option>
                            
                        </select>


                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <button name="empty-cart">Confirm Order!!!</button>
                          
                            
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

 
  
<footer>
      Copyright @University of Malaya
</footer>

</body>
</html>
