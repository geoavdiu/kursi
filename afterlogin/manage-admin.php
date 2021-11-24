<?php include "parts2/header-logout.php" ?>


<div class="main-content">
    <div class="wrapper">
        <h1 class="text_center">Manage Admins</h1>

        <table class="tbl-full">
            <tr>
                <th>SN</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM register";

            $res = mysqli_query($con, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);

                $sn = 1;

                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $emri = $rows['emri'];
                        $mbiemri = $rows['mbiemri'];
                        $email = $rows['email'];
                        ?>
                        <tr>
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $emri ?></td>
                            <td><?php echo $mbiemri ?></td>
                            <td><?php echo $email ?></td>

                        <td>
                            <a href="../delete.php?id=<?php echo $id; ?>" class="btn-danger" >Delete</a>

                        </td>
                        </tr>
                        <?php
                    }
                }
            }

            ?>


        </table>
    </div>
</div>


<?php include "../parts/footer.php" ?>

