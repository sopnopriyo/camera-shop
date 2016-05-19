<?php 
    
    include_once 'includes/db_connect.php';
    session_start();


    if (isset($_SESSION['cart'])) {
        # code...
    
        
            $whereIn = implode(',', $_SESSION['cart']);
            $sql = "SELECT * FROM product WHERE id IN ($whereIn)";
        

        
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            //var_dump($row)

        //    $rows = mysqli_fetch_array($result);

        }

    }

 ?>

<?php

    if ( isset( $_POST['empty-cart'] ) ) {
       
        unset($_SESSION['cart']);
        header('Location: ./shopping-cart.php');    
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

    include('main-menu.php')
?>

 <section id="form"><!--form-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

                    

                    <table class="table table-bordered table-responsive">
                        <thead class="bg-primary">
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th></th>
                        </thead>
                        <tbody>

                        <?php $total = 0; ?>
                        <?php if($result->num_rows > 0){ ?>

                    


                            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                                <tr>
                                    <td class="text-center"><strong><?php echo $row['name'];?></strong></td>
                                    <td class="text-center"><?php echo $row['price'];?></td>
                                    <td class="text-center">
                                        <form action="" method="POST">
                                        <input type="number" name="qty" value="1" min="1" style="width:50px;"/>
                                        <button type="submit" class="btn btn-info">Update</button>
                                        </form>
                                    </td>
                                    <?php $itotal = $row['price'] *1; ?>
                                    <td class="text-center"><font class="itotal"><?php echo $itotal; ?></font></td>
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
                       
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <button name="empty-cart">Empty Cart!!!</button>
                            <button name="check-out">Check Out!!!</button>
                            
                        </form>

                
                    </div>
                    <?php }

                    else{ ?>
                            <tr><td colspan="5" class="text-center alert alert-danger"><strong>*** Your Cart is Empty ***</strong></td></tr>
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
