<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart </title>
</head>
<body>
<?php include('navbar.php') ?>
<br><br>
<section>
    <section class="section-content">
            <div class="cont-tit">
                <strong>My Cart</strong>
                <form action="cart.php" method="post">
                    <button class="btnCheckout" name="btnCheckout">Check Out</button>
                </form> 
                <?php
                    if (isset($_POST['btnCheckout'])) {
                        $conn=mysqli_connect("localhost","root","","furdb");

                        $sql="DELETE FROM `cart` WHERE 1";
                        $exec=mysqli_query($conn,$sql);

                        if ($exec) {
                            echo '
                                <section class="popNotch">
                                <div class="pop-up">
                                    <center>
                                        <div><strong>Success !</strong></div> <br>
                                        <div>
                                            <p>Puchase complete, thank you for shoping with us</p>
                                        </div>
                                        <div>
                                            <a href="dashboard.php"><button class="btnComplete">Complete</button></a>
                                        </div>
                                    </center>
                                </div>
                            </section>
                            ';

                        }else{
                            echo 'sql error';
                        }
                    }
                ?>
            </div>
            <br>
            <div>
           
                <table class="tble">
                    <thead>
                        <th>Furniture</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>Price</th>
                    </thead>
                    <tbody>
                    <?php
                          $conn=mysqli_connect("localhost","root","","furdb");
                          $sql="SELECT * FROM `cart` WHERE 1";
                          $exec=mysqli_query($conn,$sql);
                          $count=mysqli_num_rows($exec);

                          if ($count==0) {
                          }else{
                            while ($row=mysqli_fetch_array($exec)) {
                                $id=$row['id'];
                                $furniture=$row['furniture'];
                                $quantity=$row['quantity'];
                                $price=$row['price'];
                                $date=$row['date'];

                    ?>
                        <tr>
                            <td><?php echo $furniture ?></td>
                            <td><?php echo $quantity ?></td>
                            <td><?php echo $date ?></td>
                            <td>Ksh. <?php echo $price ?></td>
                        </tr>
                     <?php }}?>
                    </tbody>
                </table>
            </div>
        
    </section>
</section>
</body>
</html>