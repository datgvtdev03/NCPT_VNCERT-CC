<?php 

require_once "include/connection.php";

$id_user = $_SESSION["id"];

$sql = "SELECT * FROM `post_description` WHERE id_user = $id_user";
$result = mysqli_query($conn , $sql);
$id = $rows["id"];
$missionName = $rows["missionName"];
$startDateF = $rows["startDate"];
$status = "Đã hoàn thành";
$endDateF = $rows["endDate"];
$p_time = $rows["p_time"];



        $clickStatus = "UPDATE tbl_mission_staff SET userId='$id',missionName='$missionName',startDate='$startDateF',endDate='$endDateF',status='$status',p_time='$p_time' WHERE 
        userId = '$id' ";
        $result = mysqli_query($conn , $clickStatus);
        if($result ){
            header("Location: manager-mission.php?");
        }
?>