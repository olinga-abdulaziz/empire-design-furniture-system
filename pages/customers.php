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
                    <div><h5>Customers</h5></div>
                    <br>
                    <div>
                        <table class="tablereport">
                            <thead>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>DELETE</th>
                            </thead>
                            <tbody>
                            <?php
                                $conn=mysqli_connect("localhost","root","","furdb");
                                $sql="SELECT * FROM `customers` WHERE 1";
                                $exec=mysqli_query($conn,$sql);
                                $count=mysqli_num_rows($exec);

                                if ($count==0) {
                                }else{
                                    while ($row=mysqli_fetch_array($exec)) {
                                        $id=$row['id'];
                                        $name=$row['name'];
                                        $phone=$row['phone'];
                                        $email=$row['email'];
                                        $address=$row['address'];
                            ?>
                                <tr>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $phone ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $address ?></td>
                                    <td><form action="update.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <button class="btnView btnDelete" name="delCustomer">Delete</button>
                                    </form></td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- <section class="popNotch">
                    <div class="confirm-box">
                        <center>
                            <div><strong>Success !</strong></div>
                            <div><small>Deleted  successfully</small></div>
                            <div>
                                <button>Done</button>
                            </div>
                        </center>
                    </div>
                </section> -->
                </div>
            </div>
            <div class="sideNav-cover">
                <?php include('sidenav.php') ?>
            </div>
        </section>
    </main>
</body>
</html>