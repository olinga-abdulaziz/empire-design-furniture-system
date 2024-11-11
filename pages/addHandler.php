<link rel="stylesheet" href="style.css">
<?php
           if (isset($_POST['btnAdd']) && isset($_FILES['image'])) {
                $conn=mysqli_connect("localhost","root","","furdb");
                $furniture=$_POST['furniture'];
                $price=$_POST['price'];
                $quantity=$_POST['quantity'];
                $description=$_POST['description'];
                
               
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $error=$_FILES['image']['error'];

    if ($error===0) {
        if ($img_size > 925000) {
            $em="too large file size";
            echo '
            <div class="popNotch">
               <div class="confirm-box">
                   <center>
                       <div><strong>Failed !</strong></div>
                       <div><small>Image too large</small></div>
                       <div>
                       <a href="add-furniture.php"><button>Try again</button></a>
                           
                       </div>
                   </center>
               </div>
           </div>
       '; 
        }else{
            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
            $img_ex_lc=strtolower($img_ex);

            $allowed_ext=array("jpg","jpeg","png");

            if (in_array($img_ex_lc,$allowed_ext)) {
                $my_new_img_name=uniqid("IMG",true).'.'.$img_ex;
                $img_upload_path='uploads/'.$my_new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                echo 'this one works';
                $sql_insert="INSERT INTO `furniture`(`id`, `furniture`, `quantity`, `price`, `description`, `image`) VALUES (null,'$furniture','$quantity','$price','$description','$my_new_img_name')";

                $exec=mysqli_query($conn,$sql_insert);
            
                if ($exec) {
                    echo '
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
               '; 
                }else{
                    echo "failed";
                }
            }else{
                $em="file type not allowed";
            }
        }




    }

            }
            ?>