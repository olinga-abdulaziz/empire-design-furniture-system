<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="admin-main">
            <div class="admina">
                <div class="admin-top">
                    <h1>Administrator</h1>
                    <a href="index.php">Logout</a>
                </div>
                <div class="sec-cover">
                <section class="section-content">
                    <h3>Furnitures</h3>
                    <br>
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
                    <form method="POST" action="edit-furniture.php" class="itemView">
                        <div class="card-view">
                            <div>
                                <div class="card-move">
                                    <img src="uploads/<?php echo $image ?>" alt="" class="img">
                                </div>
                            </div>
                            <br>
                            <div>
                                <div>
                                     <strong><?php echo $furniture ?></strong> - <strong>Ksh. <?php echo $price ?></strong>
                                </div>
                                <div>
                                    <small><?php echo $description ?></small>
                                </div>
                                <br>
                                <div>
                                    <form action="edit-furniture.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <input type="hidden" name="furniture" value="<?php echo $furniture ?>">
                                        <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                                        <input type="hidden" name="description" value="<?php echo $description ?>">
                                        <input type="hidden" name="price" value="<?php echo $price ?>">
                                        <button class="btnChange" name="btnChange">Change</button>
                                    </form>
                                    <form action="del.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id  ?>">
                                        <button class="btnRemove" name="btnDelF">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php }}?>
                </section>
                </div>
            </div>
            <div class="sideNav-cover">
                <?php include('sidenav.php') ?>
            </div>
        </section>
    </main>
</body>
</html>