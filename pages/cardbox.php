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
                <form action="" method="post" class="formDiv">
                    <input type="search"><button class="btnSearch">Search</button>
                </form>
            </div>
            <br>
        </section>
        <section class="section-content">
            <div class="cont-tit">
                <strong>FURNITURES</strong>
            </div>
            <br>
           <div class="flexwrapDiv">
                <div class="card-item">
                        <div class="imgDiv">

                        </div>
                        <div class="decDiv">
                            <div class="load-gog" ><small></small></div>
                            <div class="load-gog-1"><small></small></div>
                            <div class="load-gog-2" ><small></small></div>
                            <div class="load-gog-3" ><small></small></div>
                        </div>
                        <section class="popNotch">
                            <div class="Notch">
                                <?php
                                    if (isset($_POST['btnCart'])) {

                                        $furniture=$_POST['furniture'];
                                        $price=$_POST['price'];
                                        $quantity=$_POST['quantity'];
                                        $description=$_POST['description'];
                                        $image=$_POST['image'];
                                    }
                                ?>
                                
                            <div class="imgDiv">
                                <div class="xbox">
                                    <img src="uploads/<?php echo $image ?>" alt="" class="img">
                                </div>
                            </div>
                            <form class="cart-box" action="handleCart.php" method="POST">
                                <div><strong><?php echo $furniture ?></strong></div>
                                <div><p><?php echo $description ?></p></div>
                                <div><strong>PRICE Ksh.<?php echo $price ?></strong></div>
                                <div><strong class="qtt">Your Name :</strong></div>
                                <div><input type="text" name="name" placeholder="Enter Your name"></div>
                                <div><strong class="qtt">Quantity :</strong></div>
                                <input type="hidden" value="<?php echo $price ?>" name="price">
                                <input type="hidden" value="<?php echo $furniture ?>" name="furniture">
                                <div><input type="number" name="quantity" placeholder="Enter quantity"></div>
                                <div><button name="btnAdd">Add To Cart</button></div>
                                <div><a href="dashboard.php"><button class="btnCancel">Cancel</button></a></div>
                            </form>
                            </div>
                        </section>
                      
                </div>
                <div class="card-item">
                        <div class="imgDiv">

                        </div>
                        <div class="decDiv">
                        <div class="load-gog" ><small></small></div>
                            <div class="load-gog-1"><small></small></div>
                            <div class="load-gog-2" ><small></small></div>
                            <div class="load-gog-3" ><small></small></div>
                        </div>
                </div>
           </div>
        </section>
    </div>
</body>
</html>