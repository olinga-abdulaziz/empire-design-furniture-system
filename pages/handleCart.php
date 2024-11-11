<?php
                            if (isset($_POST['btnAdd'])) {
                                $conn=mysqli_connect("localhost","root","","furdb");
                                $furniture=$_POST['furniture'];
                                $price=$_POST['price'];
                                $quantity=$_POST['quantity'];
                                $description=$_POST['description'];
                                $name=$_POST['name'];
                                $image=$_POST['image'];
                                $date=date('d-m-y');

                                $sql="INSERT INTO `cart`(`id`, `name`, `furniture`, `quantity`, `date`, `price`) VALUES (null,'$name','$furniture','$quantity','$date','$price')";
                                $exec=mysqli_query($conn,$sql);

                                if ($exec) {
                                    $sqlreport="INSERT INTO `reports`(`id`, `name`, `furniture`, `quantity`, `date`, `price`) VALUES (null,'$name','$furniture','$quantity','$date','$price')";
                                    $exec_report=mysqli_query($conn,$sqlreport);
                                    if ($exec_report) {
                                        header('location:cart.php');
                                    }else{
                                        echo 'error';
                                    }
                                }else{
                                echo 'error';
                            }}
                        ?>