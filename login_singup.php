<?php
require "connect.php";
session_start();
// login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM `register` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $arr = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $arr['password'])) { {
                    echo "<script>alert('login succesfully');
    window.location.href = 'shop8.php';</script>";
                    $_SESSION['logged_in'] = true;
                    $_SESSION['name'] = $username;

                }

            } else {
                echo "<script>alert('Wrong password');
    window.location.href = 'login.php';
    </script>";
            }
        } else {
            echo "<script>alert('Invalid Username');
    window.location.href = 'login.php';
    </script>";
        }
    } else {
        echo "
    <script> alert('error in sqlselect');
    window.location.href = 'login.php';
    
    </script>
    
    ";
    }
}


// register
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_exist_query = "SELECT * FROM `register` WHERE `username`= '$username' OR `email` = '$email'";
    $result = mysqli_query($conn, $user_exist_query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $fetch_result = mysqli_fetch_assoc($result);
            if ($fetch_result['username'] == $username) {
                echo "<script>alert('Username Already Exists');</script>";
            } if ($fetch_result['email'] == $email) {
                echo "<script>alert('Email Already Exists');</script>";
            }
        } else {
            $hashpass = password_hash($password, PASSWORD_BCRYPT);
            $insert_query = "INSERT INTO `register` (`email`,`username`,`password`) VALUES ('$email','$username','$hashpass')";
            $insert_result = mysqli_query($conn, $insert_query);
            if ($insert_result) {
                echo "<script>alert('Registered Successfully');</script>";
            } else {
                echo "<script>alert('Something went wrong');</script>";
            }
        }
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Query execution failed');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Form submission error');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}

?>