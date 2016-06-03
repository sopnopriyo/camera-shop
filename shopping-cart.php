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

    include('main-menu.php');
    
?>

<nav id="search-nav">
  <center>
    <form method="POST" action="search-result.php">
      <input type="text" name="keyword" placeholder="Type an item">
        <select name="catagory">
            <option value ="22">camera</option><option value ="23">Lense</option><option value ="24">Memory Card</option><option value ="25">Camera Bag</option><option value ="26">Accesories</option><option value ="27">DSLR</option><option value ="28">Digital Camera</option><option value ="29">Cam Recorder</option><option value ="30">Flash</option><option value ="31">Tripod</option>      
      </select>
      <button type="submit" name="search">Search</button>
    </form>
  </center> 
</nav>

 <section id="form"><!--form-->
    <div class="container">
      <div class="row">
        <div style="margin-top:20px">

                    

                  <table border="1" style="width:90%" >
                        <thead class="bg-primary">
                            <th>Item</th>
                            <th>Price</th>
                            <th >Qty</th>
                            <th>Total</th>
                        
                        </thead>
                        <tbody>

                        <?php $total = 0; ?>
                        <?php if($result->num_rows > 0){ ?>

                    


                            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                                <tr>
                                    <td class="text-center"><strong><?php echo $row['name'];?></strong></td>
                                    <td class="text-center"><?php echo $row['price']-$row['promotion'];?></td>
                                    <td class="text-center">
                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $id;?>" />
                                            <input type="number" name="quantity" value="<?php echo $array[$row['id']]?>" min="1" style="width:50px;"/>
                                            <button type="submit" name ="update-cart"class="btn btn-info">Update</button>
                                        </form>
                                    </td>
                                    <?php $itotal = $row['price']-$row['promotion']; ?>
                                    <td class="text-center"><font class="itotal"><?php echo $itotal; ?></font></td>

                                    <?php if($row['catagory_id']==27){
                                        $lense++;
                                    } ?>

                                    <?php 

                                     //   $array = array_merge($array, array($row['id'] =>2 ));

                                    ?>
                                </tr>
                                
                                <?php $total = $total + $itotal;?>  
                                
                            <?php } ?> 
                               
                                                   
                        </tbody>
                    </table>

                    <br>
                   
                     <?php echo "Total amount : <strong>".$total."</strong> RM"; ?><br>
                     <?php echo "GST 6 %: <strong>".$tax=(($total*6)/100)." <strong> RM"; ?><br>
                     Total : <?php echo $tax+$total; ?></p>
                      
                  
                    <div class="pull-right">
                       
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <button name="empty-cart">Empty Cart!!!</button>
                           <a href ="checkout.php">Check Out!!!</a>
                            
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

  <?php if ($lense>0) {
        

        ?>
                            <?php
                        $sql = "SELECT * 
                                FROM product
                                WHERE catagory_id = 23 LIMIT 2
                                ";

                       $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                           
                           ?>
                           <center>
                           <h3>You might be interested to configure with following components</h3></center>
                           <?php

                            while($row = mysqli_fetch_array($result))
                            {

                                ?>
            
                            <center>
                                <div class="img"><a href="#"><img alt="" height="200" width="200" src="<?php echo $row['image']; ?>" ></a></div>
                                <div class="info">
                                    <a class="title" href="product-details.php"><?php echo $row['name']; ?></a>
                                    <div class="price">
                                        <span class="st">Our price:</span><strong>$<?php echo $row['price']; ?></strong>
                                    </div>
                                    <div class="actions">
                                        <a href="add-to-cart.php?id=<?php echo $row['id'] ?>"><button >Add to Cart</button></a>
                
                                    </div>
                                </div>
                            </center>

                            <?php



                            }
                        
                            } 
                            else {
                                echo "No result found";
                            }
                    ?>



        <?php  
        $lense--;
    } 
  ?>

  
  
<footer>
      Copyright @University of Malaya
</footer>

</body>
</html>
