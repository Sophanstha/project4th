<?php
require "connect.php";
session_start();
// Check if session variable is set
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    // Session is already set, user is logged in
    if(isset($_POST['button'])) {
        // Handle button click for placing orders
        for ($i = 0; $i < count($_POST['product_title']); $i++) {
            $pdtname = $_POST['product_title'][$i];
            $pdtprice = $_POST['proce'][$i];
            $name =   $_SESSION['name'];
            // Insert product into database
            $sql = "INSERT INTO `buypdt1` (`name`, `price`, `date` ,`username`) VALUES ('$pdtname', '$pdtprice', current_timestamp(),'$name')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script>alert('Failed to place order');</script>";
                // You might want to handle the failure differently, like logging or redirecting
            }
        }
        echo "<script>alert('Order(s) placed successfully'); window.location.href = 'shop8.php';</script>";
    }
} else {
    // Session is not set, user needs to login
    echo "<script>alert('Please log in first'); window.location.href = 'login.php';</script>";
}
?>
