<?php 

require_once "include/connection.php";

    $p_id = $_GET["id"]; 

        $delete_mission = "DELETE FROM tbl_mission_staff WHERE id = '$p_id' ";
        $result = mysqli_query($conn , $delete_mission);
        if($result ){
            header("Location: manage-mission-staff.php?delete-success");
        }

       


?>