<link rel="stylesheet" href="style.css">
<nav>
    <div class="top-top">
        <center>
            <small class="">Empire Design Furniture</small>
        </center>
    </div>
    <div class="navbar">
        <center class="flex-width">
            <strong><a href="dashboard.php">Home</a></strong>
            <?php
                                 $conn=mysqli_connect("localhost","root","","furdb");
                                 $sql="SELECT * FROM `cart` WHERE 1";
                                 $exec=mysqli_query($conn,$sql);
                                 $count=mysqli_num_rows($exec);
                            ?>
            <strong><a href="cart.php">My Cart <small class="bagde"><?php echo $count ?></small></a></strong>
            <strong><a href="admin-login.php">Admin</a></strong>
            <strong><a href="about.php">About</a></strong>
            <strong><a href="contact.php">Contact</a></strong>
            <strong><a href="index.php">Signout</a></strong>
        </center>
    </div>
</nav>    





