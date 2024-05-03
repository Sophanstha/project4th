<?php
$conn = mysqli_connect("localhost", "root", "", "project4th");
if (mysqli_connect_error()) {
    echo "<script>alert('Cannot connect');</script>";
    exit();
}
?>
