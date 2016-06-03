<nav id="search-nav">
  <center>
    <form method="POST" action="search-result.php">
      <input type="text" name="keyword" placeholder="Type an item">
        <select name="catagory">
            <?php 
            $sql = "SELECT id, name  FROM catagory ORDER BY id ASC";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                  //var_dump($row)

                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<option value =\"".$row['id']."\">".$row['name']."</option>";
                  }
             
            } 
           
        ?>
      
      </select>
      <button type="submit" name="search">Search</button>
    </form>
  </center> 
</nav>
