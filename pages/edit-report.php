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
                    <div><h5>Edit Report</h5></div>
                    <br>
                    <?php
                    if (isset($_POST['btnView'])) {
                        $furniture=$_POST['furniture'];
                        $price=$_POST['price'];
                        $quantity=$_POST['quantity'];
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $id=$_POST['id'];
                    }
                    ?>
                    <form class="formAdd" action="update.php" method="POST">
                        <div><small>Name</small></div>
                       <div>
                            <input type="text" value="<?php echo $name ?>" name="name">
                       </div>
                        <div><small>Furniture</small></div>
                       <div>
                            <input type="text" value="<?php echo $furniture?>" name="furniture">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                       </div>
                        <div><small>Qunatity</small></div>
                       <div>
                            <input type="text" value="<?php echo $quantity?>" name="quantity">
                       </div>
                        <div><small>Date</small></div>
                       <div>
                            <input type="text" value="<?php echo $date ?>" name="date">
                       </div>
                        <div><small>Price</small></div>
                       <div>
                            <input type="text" value="<?php echo $price ?>" name="price">
                       </div>
                       <div>
                        <button name="btnUpdate">Update</button> <br><br>
                        <button class="btnDelete" name="btnDelReport">Delete</button>
                       </div>
                    </form>
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