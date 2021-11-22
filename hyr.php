<?php include "parts/header.php"?>

<form  class="register text_center" method="post" enctype="multipart/form-data"
    <?php
    if (isset($_SESSION['register'])){
        echo $_SESSION['register'];
        unset( $_SESSION['register']);

    }

    ?>
    <label for="emri">Emri</label>
    <input type="text" name="emri" placeholder="Enter Name" required><br>
    <label for="mbiemri">Mbiemri</label>
    <input type="text" name="mbiemri" placeholder="Enter Surname" required><br>
    <label for="email">Email address</label>
    <input type="email" name="email" placeholder="Enter email" required><br>
    <label for="pass">Password</label>
    <input type="password" name="password" placeholder="Enter Password" required><br>

    <button type="submit" name="reg">Regjistrohu</button>



</form>



<?php

if (isset($_POST['reg'])){

    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO register SET 
            emri='$emri',
            mbiemri ='$mbiemri',
            email='$email',
            password='$password'
            ";
    $res = mysqli_query($con,$sql);

    if ($res==true){

        echo $_SESSION['register'] = "<div class='success'>Jeni regjistruar me sukses</div>";
        header('location:login.php');
    }else {
        echo $_SESSION['register'] = "<div class='error'>Nuk jeni regjistruar</div>";

    }

}



include "parts/footer.php"?>
