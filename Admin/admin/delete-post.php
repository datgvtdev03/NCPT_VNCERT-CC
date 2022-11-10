<?php 

require_once "include/connection.php";

    $p_id = $_GET["id"]; 

        $delete_cat = "DELETE FROM post_description WHERE p_id = '$p_id' ";
        $result = mysqli_query($conn , $delete_cat);
        if($result ){
            header("Location: manage-post-desc.php?delete-success");
        }

       


?>