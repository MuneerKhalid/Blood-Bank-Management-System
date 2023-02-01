<?php
include('./connect.php');
error_reporting(0);

$DonorID = $_GET['DonorID'];
$query = "DELETE FROM donor WHERE Donor_ID = '$DonorID'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted')</script>";
    echo "<script>window.location.assign('DonorRecords.php')</script>";
  } else {
    "<script>alert('Record Not Deleted')</script>";
  }


?>