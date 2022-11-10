<?php 
    require_once "include/header.php";
?>

<?php 
 
//  database connection
require_once "include/connection.php";

$sql = "SELECT * FROM tbl_mission_staff ORDER BY p_time DESC";
$result = mysqli_query($conn , $sql);

$i = 1;

?>

<style>
table, th, td {
  border: 1px solid black;
  padding: 10px;
}
table {
  border-spacing: 10px;
}
</style>

<div class="container bg-white shadow mb-5">
    <div class="py-4 mt-3"> 
    <div class='text-center pb-2'><h4>Danh sách nhiệm vụ</h4></div>
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Họ tên nhân viên</th>
        <th>Tên nhiệm vụ</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th>
        <th>Hoạt động</th>
    </tr>


    <?php 
    
        if( mysqli_num_rows($result) > 0){
            while( $rows = mysqli_fetch_assoc($result) ){  
                $userId = $rows["userId"];  
                $missionName = $rows["missionName"];
                $startDate = $rows["startDate"];
                $endDate = $rows["endDate"];
                $id = $rows["id"];
                $selectName = "SELECT * FROM `admin` WHERE id = $userId ";
                $resultName = mysqli_query($conn , $selectName);
                $arr = mysqli_fetch_array($resultName);
                $nameUser =  $arr[1];
    ?>

    

        <tr>
        <td><?php echo "{$i}."; ?></td>
        <td><?php echo $nameUser; ?></td>
        <td><?php echo $missionName; ?></td>
        <td><?php echo $startDate; ?></td>
        <td><?php echo $endDate; ?></td>

        <td> <?php
                $edit_icon = "<a href='test.php?id={$id}' class='btn-sm btn-primary float-right '> <span ><i class='fa fa-edit '></i></span> </a>";

                $delete_icon = " <a href='delete-mission.php?id={$id}' class='btn-sm btn-danger float-right ml-3 '> <span ><i class='fa fa-trash '></i></span> </a>";
                echo $edit_icon . $delete_icon;
             ?> 
        </td>   

    <?php 
            $i++;
            }
        }
    ?>
     </tr>
    </table>
    </div>
</div>

<?php 
    require_once "include/footer.php";
?>