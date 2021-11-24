<?php include "parts/header.php"?>

<form  class="register text_center" method="post" enctype="multipart/form-data">

    <h1 class="text_center">LOG IN</h1>

<?php
if (isset($_SESSION['register'])){
    echo $_SESSION['register'];
    unset( $_SESSION['register']);
}
if (isset($_SESSION['login'])){
    echo $_SESSION['login'];
    unset( $_SESSION['login']);
}
?>



<label for="email">Email address</label>
<input type="email" name="email" placeholder="Enter email" required><br><br>
<label for="pass">Password</label>
<input type="password" name="password" placeholder="Enter Password" required><br>

<button  type="submit" name="login">LOG IN</button><br><br>

<p>Not a member <a href="hyr.php">Regjistrohu</a></p>

</form>
<br><br>

<?php

if (isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $res = mysqli_query($con,$sql);

    $count = mysqli_num_rows($res);

    if ($count==1){

        echo $_SESSION['login'] = "<div class='success text_center'>Jeni kyqur me sukses</div>";
        header('location: afterlogin/index2.php');
    }else {
        echo $_SESSION['login'] = "<div class='error text_center'>Emaili ose passwordi gabim</div>";

    }


}


include "parts/footer.php"?>
