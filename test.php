<?php
require "connect.php";
session_start();
if($_SESSION['logged_in']){
    $name = $_SESSION['name'];
    echo $name;
}
else{
    echo ".......";
}

?>