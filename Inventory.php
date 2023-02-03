<?php
include('./connect.php');
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];

if ($userprofile == 'muneer') {
} elseif ($userprofile == true && $userprofile != 'muneer') {
    header('location:Home.php');
} else {
    header('location:Login.php');
}
?>

<html>

<head>
    <title>Inventory</title>
    <link rel="stylesheet" href="Display.scss">
</head>

<body>
    <div class="heading">
        <h1>Inventory</h1>
    </div>
    <div class="container">
        <table border="3" cellspacing="7">
            <tr>
                <th>Blood ID</th>
                <th>Blood Type</th>
                <th>Blood Bag Quantity</th>
                <th>Received Date</th>
                <th>Expiry Date</th>

                <th colspan="2" align="center">Operations</th>
            </tr>

            <?php

            $query = "SELECT * FROM `inventory`";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {

                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                <tr>
                <td>" . $result['Blood_ID'] . "</td>
                <td>" . $result['Blood_Type'] . "</td>
                <td>" . $result['Blood_Bag_Quantity'] . "</td>
                <td>" . $result['Blood_Bag_RecievedDate'] . "</td>
                <td>" . $result['Blood_Bag_Expiry'] . "</td>
                </tr>
                ";
                }
            } else {
                echo "No Records found";
            }

            ?>


        </table>
    </div>
</body>

</html>