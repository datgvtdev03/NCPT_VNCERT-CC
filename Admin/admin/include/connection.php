<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "NCPT_VNCERT/CC";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Không thể kết nối database!");
}
?>