<?php 

require_once "include/connection.php";

    $id = $_GET["id"]; 

        $delete_member = "DELETE FROM admin WHERE id = '$id' ";
        $result = mysqli_query($conn , $delete_member);
        if($result ){
            header("Location: manage-post-details.php?delete-success");
        }


?>