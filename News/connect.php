<?php
    $severnam = "localhost";
    $username = "root";
    $password = "";
    $database = "demoVncert";

    $conn = mysqli_connect($severnam, $username, $password, $database);
    if(!$conn){
        echo "<script>alert('Ket noi khong thanh cong');</script>";
    } else{
        echo "<script>alert('Ket noi thanh cong');</script>";
    }
?>