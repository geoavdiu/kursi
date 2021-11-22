<?php
include 'parts/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM register WHERE id=$id";

$res = mysqli_query($con,$sql);

if ($res==true){
    $_SESSION['delete'] = "<div class='success'>Admin Deletet Successfully.</div>";
    header('location:rrethfti.php');
}else {
    $_SESSION['delete'] = "<div class='error'>Failed to delete Admin.</div>";
}
