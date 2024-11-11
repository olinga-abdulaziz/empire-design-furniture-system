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
                    <div><h5>Add Furniture</h5></div>
                    <br>
                    <form class="formAdd" action="addHandler.php" method="POST" enctype="multipart/form-data">
                        <div><small>Furniture</small></div>
                       <div>
                            <input type="text" name="furniture">
                       </div>
                        <div><small>Description</small></div>
                       <div>
                            <input type="text" name="description">
                       </div>
                        <div><small>Qunatity</small></div>
                       <div>
                            <input type="text" name="quantity">
                       </div>
                        <div><small>Price</small></div>
                       <div>
                            <input type="text" name="price">
                       </div>
                        <div><small>Photo</small></div>
                       <div>
                       <input type="file" name="image">
                       </div>
                       <div>
                        <button name="btnAdd">Add New</button>
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
    <!-- echo '
                                <div class="popNotch">
                                   <div class="confirm-box">
                                       <center>
                                           <div><strong>Success !</strong></div>
                                           <div><small>New furniture added successfully</small></div>
                                           <div>
                                           <a href="add-furniture.php"><button>Done</button></a>
                                               
                                           </div>
                                       </center>
                                   </div>
                               </div>
                           '; -->
</body>
</html>