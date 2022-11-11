<?php
require_once "include/header.php";
?>

<?php

//  database connection
require_once "include/connection.php";
$id_user = $_SESSION["id"];

$sql = "SELECT * FROM `tbl_mission_staff` WHERE userId = $id_user";
$result = mysqli_query($conn, $sql);
$status = "";

$i = 1;

?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 15px;
    }

    table {
        border-spacing: 10px;
    }
</style>

<div class="container bg-white shadow mb-5">
    <div class="py-4 mt-5">
        <div class='text-center pb-2'>
            <h4>Các nhiệm vụ được giao</h4>
        </div>
        <table style="width:100%" class="table-hover text-center ">
            <tr class="bg-dark">
                <th>STT</th>
                <th>Tên nhiệm vụ</th>
                <th>Thời gian thực hiện</th>
                <th>Thời gian kết thúc</th>
                <th>Trạng thái</th>
                <th>Tình trạng</th>
                <th>Hoàn thành</th>
            </tr>
            <?php

            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $p_id = $rows["id"];
                    $missionName = $rows["missionName"];
                    $startDateF = $rows["startDate"];
                    $startDate = strftime('%d/%m/%Y', $startDateF);
                    $status = $rows["status"];
                    $endDateF = $rows["endDate"];
                    $endDate = strftime('%d/%m/%Y', $endDateF);


            ?>


                    <tr>
                        <td><?php echo "{$i}."; ?></td>
                        <td> <?php echo ucwords($missionName); ?></td>

                        <td style="
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 350px;
    "><?php echo $startDate; ?></td>
                        <td><?php echo $endDate; ?></td>
                        <td>
                            <?php
                            $current_time  = strtotime("now");
                            if (time() > $endDateF) {
                                $status = "Đã hết hạn";

                                $sql_status = "UPDATE `tbl_mission_staff` SET `id`='$p_id',`userId`='$id_user',`missionName`='$missionName',`startDate`='$startDateF',`endDate`='$endDateF',`status`='$status',`p_time`='$current_time' WHERE id = '$p_id'";
                                $result_status = mysqli_query($conn, $sql_status);

                                
                            } else {
                                $status = "Đang thực hiện";
                                $sql_status = "UPDATE `tbl_mission_staff` SET `id`='$p_id',`userId`='$id_user',`missionName`='$missionName',`startDate`='$startDateF',`endDate`='$endDateF',`status`='$status',`p_time`='$current_time' WHERE id = '$p_id'";
                                $result_status = mysqli_query($conn, $sql_status);
                            }


                            echo $status; ?>

                        </td>

                        <td></td>
                        <td>


                            <?php



                            $click_icon = "<a href='status-mission.php?' class='btn-sm btn-primary float-right '> <span ><i class='fa fa-check-circle-o '></i></span> </a>";
                            echo  $click_icon;
                            ?>

                        </td>

                <?php
                    $i++;
                }
            } else {
                echo "no category found";
            }
                ?>
                    </tr>
        </table>
    </div>
</div>

<?php
function CK()
{
    echo "Da bam";
}
?>

<?php
require_once "include/footer.php";
?>