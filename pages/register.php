<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="main-section-auth">
            <form action="register.php" method="POST" class="form-register formAUth">
                <div><h1>Register</h1></div>
                <div><small>Name :</small></div>
                <div><input type="text" name="name"><div>
                <div><small>Phone :</small></div>
                <div><input type="text" name="phone"><div>
                <div><small>Email :</small></div>
                <div><input type="text" name="email"><div>
                <div><small>Address :</small></div>
                <div><input type="text" name="address"><div>
                <div><small>Username :</small></div>
                <div><input type="text" name="username"><div>
                <div><small>Password :</small></div>
                <div><input type="text" name="password"><div>
                <div><button name="btnRegister">Register</button></div>
                <div><a href="index.php">Login</a></div>
            </form>
        </section>
        
    </main>
    <?php
        if (isset($_POST['btnRegister'])) {
            $conn=mysqli_connect("localhost","root","","furdb");
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $password=$_POST['password'];

            $sql="INSERT INTO `customers`(`id`, `name`, `phone`, `email`, `address`, `password`) VALUES (null,'$name','$phone','$email','$address','$password')";
            $exec=mysqli_query($conn,$sql);

            if ($exec) {
                echo '
                <section class="popNotch">
                    <div class="confirm-box">
                        <center>
                            <div><strong>Success !</strong></div>
                            <div><small>Account Created  successfully</small></div>
                            <div>
                                <a href="index.php"><button>Done</button></a>
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
</body>
</html>