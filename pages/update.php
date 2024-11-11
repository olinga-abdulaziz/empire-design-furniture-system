<link rel="stylesheet" href="style.css">
<?php
                    if (isset($_POST['btnUpdate'])) {
                        $conn=mysqli_connect("localhost","root","","furdb");
                        $furniture=$_POST['furniture'];
                        $price=$_POST['price'];
                        $quantity=$_POST['quantity'];
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $id=$_POST['id'];
                        $sql="UPDATE `reports` SET `name`='$name',`furniture`='$furniture',`quantity`='$quantity',`date`='$date',`price`='$price' WHERE id='$id'";
                        $exec=mysqli_query($conn,$sql);
                        if ($exec) {
                            # code...
                           echo '
                            <div class="popNotch">
                            <div class="confirm-box">
                                <center>
                                    <div><strong>Success !</strong></div>
                                    <div><small>Update Report successfully</small></div>
                                    <div>
                                        <a href="admin.php"><button>Done</button></a>
                                    </div>
                                </center>
                            </div>
                        </div>
                                    ';
                        }else{
                            echo 'error';
                        }
                    }

                    if (isset($_POST['btnDelReport'])) {
                        $conn=mysqli_connect("localhost","root","","furdb");
                        $id=$_POST['id'];
                        $sql="DELETE FROM `reports` WHERE id='$id'";
                        $exec=mysqli_query($conn,$sql);

                        if ($exec) {
                            echo '
                                <section class="popNotch">
                                <div class="pop-up">
                                    <center>
                                        <div><strong>Success !</strong></div> <br>
                                        <div>
                                            <p>Delete Complete</p>
                                        </div>
                                        <div>
                                            <a href="admin.php"><button class="btnComplete">Complete</button></a>
                                        </div>
                                    </center>
                                </div>
                            </section>
                            ';

                        }else{
                            echo 'sql error';
                        }
                    }

                    if (isset($_POST['delCustomer'])) {
                        $conn=mysqli_connect("localhost","root","","furdb");
                        $id=$_POST['id'];
                        $sql="DELETE FROM `customers` WHERE id='$id'";
                        $exec=mysqli_query($conn,$sql);

                        if ($exec) {
                            echo '
                                <section class="popNotch">
                                <div class="pop-up">
                                    <center>
                                        <div><strong>Success !</strong></div> <br>
                                        <div>
                                            <p>Delete Complete</p>
                                        </div>
                                        <div>
                                            <a href="customers.php"><button class="btnComplete">Complete</button></a>
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