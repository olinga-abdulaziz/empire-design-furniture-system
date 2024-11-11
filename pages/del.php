<link rel="stylesheet" href="style.css">
<?php
if (isset($_POST['btnDelF'])) {
    $conn=mysqli_connect("localhost","root","","furdb");
    $id=$_POST['id'];
    $sql="DELETE FROM `furniture` WHERE id='$id'";
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
                        <a href="furnitures.php"><button class="btnComplete">Done</button></a>
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