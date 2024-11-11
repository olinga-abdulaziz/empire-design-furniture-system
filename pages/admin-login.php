<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
     <section class="main-section-auth">
       <div>
       <center><h1 class="txtEmpire">Empire Design Furniture</h1></center>
       <br>
        <form method="POST" action="admin-login.php" class="formAUth">
            <div><h4>Administrator Login</h4></div>
            <div><small>Email :</small></div>
            <div><input type="text" name="email"><div>
            <div><small>Password :</small></div>
            <div><input type="password" name="password"><div>
            <div><button name="btnLogin">Login</button></div>
            <div><a href="register.php">Register</a></div>
      </form>
       </div>
     </section>
   </main>
   <?php
    if (isset($_POST['btnLogin'])) {
      $conn=mysqli_connect("localhost","root","","furdb");
      $email=$_POST['email'];
      $password=$_POST['password'];

      if ($email=='admin@gmail.com' && $password=='admin123') {
        header('location:admin.php');
      }else{
        echo '
        <section class="popNotch">
            <div class="confirm-box">
                <center>
                    <div><strong>Failed !</strong></div>
                    <div><small>Wrong Username or password</small></div>
                    <div>
                        <a href="admin-login.php"><button>Try Again</button></a>
                    </div>
                </center>
            </div>
        </section>
        ';
      }
    }

?>
</body>
</html>