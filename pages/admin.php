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
                    <div class="fledDiv"><h5>Reports</h5> <a href="pdf.php"><button>Generate Pdf</button></a></div>
                    <br>
                    <div>
                        <table class="tablereport">
                            <thead>
                                <th>Name</th>
                                <th>Furniture</th>
                                <th>Quanity</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>VIEW</th>
                            </thead>
                            <tbody>
                            <?php
                                    $conn=mysqli_connect("localhost","root","","furdb");
                                    $sql="SELECT * FROM `reports` WHERE 1";
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
                                            $name=$row['name'];

                                ?>
                                <tr>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $furniture ?></td>
                                    <td><?php echo $quantity ?></td>
                                    <td><?php echo $date ?></td>
                                    <td>Ksh.<?php echo $price ?></td>
                                    <td><form action="edit-report.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <input type="hidden" name="name" value="<?php echo $name ?>">
                                        <input type="hidden" name="furniture" value="<?php echo $furniture ?>">
                                        <input type="hidden" name="price" value="<?php echo $price ?>">
                                        <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                                        <input type="hidden" name="date" value="<?php echo $date ?>">
                                    <button class="btnView" name="btnView">View</button>
                                    </form></td>
                                </tr>
                              <?php }}?>
                              <?php
                                  $conn=mysqli_connect("localhost","root","","furdb");
                                  $sql="SELECT *,SUM(price) AS tot FROM `reports` WHERE 1";
                                  $exec=mysqli_query($conn,$sql);
                                  $fetch=mysqli_fetch_array($exec);
                                  
                                  $total= $fetch['tot'];
                            ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><h2>TOTAL</h2></td>
                                    <td><h2>Ksh.<?php echo $total ?></h2></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
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