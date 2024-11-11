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
                </div>
                <div class="sec-cover">
                <section class="section-content">
                    <div><h5>Edit Furniture</h5></div>
                    <br>
                    <?php
                        if (isset($_POST['btnChange'])) {
                            $furniture=$_POST['furniture'];
                            $price=$_POST['price'];
                            $quantity=$_POST['quantity'];
                            $description=$_POST['description'];
                            $id=$_POST['id'];
                        }
                    ?>
                    <form class="formAdd"  action="edit-furniture.php" method="POST">
                        <div><small>Furniture</small></div>
                       <div>
                            <input type="text" name="furniture" value="<?php echo $furniture ?>">
                       </div>
                        <div><small>Description</small></div>
                       <div>
                            <input type="text" name="description" value="<?php echo $description ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                       </div>
                        <div><small>Qunatity</small></div>
                       <div>
                            <input type="text" name="quantity" value="<?php echo $quantity ?>">
                       </div>
                        <div><small>Price</small></div>
                       <div>
                            <input type="text" name="price" value="<?php echo $price ?>">
                       </div>
                       <div>
                        <button name="btnUpdate">Update</button>
                       </div>
                    </form> 
                </section>
                <?php
                    if (isset($_POST['btnUpdate'])) {
                        $conn=mysqli_connect("localhost","root","","furdb");
                        $furniture=$_POST['furniture'];
                        $price=$_POST['price'];
                        $quantity=$_POST['quantity'];
                        $description=$_POST['description'];
                        $id=$_POST['id'];
                        $sql="UPDATE `furniture` SET `furniture`='$furniture',`quantity`='$quantity',`price`='$price',`description`='$description' WHERE id='$id'";
                        $exec=mysqli_query($conn,$sql);
                        if ($exec) {
                            # code...
                           echo '
                            <div class="popNotch">
                            <div class="confirm-box">
                                <center>
                                    <div><strong>Success !</strong></div>
                                    <div><small>Update furniture successfully</small></div>
                                    <div>
                                        <a href="furnitures.php"><button>Done</button></a>
                                    </div>
                                </center>
                            </div>
                        </div>
                                    ';
                        }else{
                            echo 'error';
                        }
                    }
                ?>
                </div>
            </div>
           
            <div class="sideNav-cover">
                <?php include('sidenav.php') ?>
            </div>
        </section>
    </main>
</body>
</html>