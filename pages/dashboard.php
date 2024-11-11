<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<?php include('navbar.php') ?>
    <div>
        <section>
            <div class="taptapDiv">
                <form action="dashboard.php" method="post" class="formDiv">
                    <input type="search" name="search"><button class="btnSearch" name="btnSearch">Search</button>
                </form>
            </div>
            <div class="srchREs">
                <?php
                if (isset($_POST['btnSearch'])) {
                    $search=$_POST['search'];
                ?>
                <small class="badge"><?php echo $search ?></small> <a href="dashboard.php"><strong>X</strong></a>
                <?php } ?>
            </div>
            <br>
        </section>
        <section class="section-content">
            <div class="cont-tit">
                <strong>FURNITURES</strong>
            </div>
            <br>
           <div class="flexwrapDiv">
           <?php

           if (isset($_POST['btnSearch'])) {
            $conn=mysqli_connect("localhost","root","","furdb");
            $search=$_POST['search'];
            $sql="SELECT * FROM `furniture` WHERE furniture LIKE '%$search%'";
            $exec=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($exec);

            if ($count==0) {
              echo 'Result Not found';
            }else{
              while ($row=mysqli_fetch_array($exec)) {
                  $id=$row['id'];
                  $furniture=$row['furniture'];
                  $quantity=$row['quantity'];
                  $price=$row['price'];
                  $description=$row['description'];
                  $image=$row['image'];

              
      ?>
            <div class="card-item" >
                    <div class="imgDiv">
                        <img src="uploads/<?php echo $image ?>" alt="" class="img">
                    </div>
                    <form action="cardbox.php" method="POST" class="decDiv">
                        <div><small><?php echo $furniture ?></small></div>
                        <div><small><?php echo $description  ?></small></div>
                        <div><small>Ksh. <?php echo $price ?></small></div>
                        <input type="hidden" name="furniture" value="<?php echo $furniture ?>">
                        <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                        <input type="hidden" name="price" value="<?php echo $price ?>">
                        <input type="hidden" name="description" value="<?php echo $description ?>">
                        <input type="hidden" name="image" value="<?php echo $image ?>">
                        <div><button class="btnCart" type="submit" name="btnCart">Add to cart</button></div>
                        </form>
                        </div>
            <?php }}}else{?>
                    <?php
                          $conn=mysqli_connect("localhost","root","","furdb");
                          $sql="SELECT * FROM `furniture` WHERE 1";
                          $exec=mysqli_query($conn,$sql);
                          $count=mysqli_num_rows($exec);

                          if ($count==0) {
                            echo 'No data';
                          }else{
                            while ($row=mysqli_fetch_array($exec)) {
                                $id=$row['id'];
                                $furniture=$row['furniture'];
                                $quantity=$row['quantity'];
                                $price=$row['price'];
                                $description=$row['description'];
                                $image=$row['image'];

                            
                    ?>
                <div class="card-item" >
                        <div class="imgDiv">
                            <img src="uploads/<?php echo $image ?>" alt="" class="img">
                        </div>
                        <form action="cardbox.php" method="POST" class="decDiv">
                            <div><small><?php echo $furniture ?></small></div>
                            <div><small><?php echo $description  ?></small></div>
                            <div><small>Ksh. <?php echo $price ?></small></div>
                            <input type="hidden" name="furniture" value="<?php echo $furniture ?>">
                            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                            <input type="hidden" name="price" value="<?php echo $price ?>">
                            <input type="hidden" name="description" value="<?php echo $description ?>">
                            <input type="hidden" name="image" value="<?php echo $image ?>">
                            <div><button class="btnCart" type="submit" name="btnCart">Add to cart</button></div>
                            </form>
                            </div>
                <?php }}}?>
               
           </div>
        </section>
    </div>
</body>
</html>