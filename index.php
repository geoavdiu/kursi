<?php include "parts/header.php"?>

<?php

if (isset($_SESSION['login'])){
    echo $_SESSION['login'];
    unset( $_SESSION['login']);
}
?>




<?php include "parts/footer.php"?>

