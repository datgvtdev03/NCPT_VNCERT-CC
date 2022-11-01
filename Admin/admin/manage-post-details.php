<?php 
    require_once "include/header.php";
?>

<?php 
 
//  database connection
require_once "include/connection.php";

$sql = "SELECT * FROM admin ORDER BY p_time DESC";
$result = mysqli_query($conn , $sql);

// $sql = "SELECT * FROM admin ORDER BY id DESC";
// $result = mysqli_query($conn , $sql);

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
    <div class='text-center pb-2'><h4>Danh sách nhân viên</h4></div>
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Giới tính</th>
        <th>Nhiệm vụ</th>
        <th>Check mision</th>
        <th>Hoạt động</th>
    </tr>

    <?php 
    
        if( mysqli_num_rows($result) > 0){
            while( $rows = mysqli_fetch_assoc($result) ){  
                $fullname = $rows["name"];  
                $email = $rows["email"];
                $phonenumber = $rows["phoneNumber"];
                $dateOfBirth = $rows["dateOfBirth"];
                $address = $rows["address"];
                $gender = $rows["gender"];
                $mission = $rows["mission"];
                $check_mission = $rows["checkMission"];
                $id = $rows["id"];
    ?>

        <tr>
        <td><?php echo "{$i}."; ?></td>
        <td><?php echo $fullname; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phonenumber; ?></td>
        <td><?php echo $dateOfBirth; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $mission; ?></td>
        <td><?php echo $check_mission; ?></td>

        <td> <?php
                $edit_icon = "<a href='edit-post-details.php?id={$id}' class='btn-sm btn-primary float-right '> <span ><i class='fa fa-edit '></i></span> </a>";

                $delete_icon = " <a href='delete-post-detail-member.php?id={$id}' class='btn-sm btn-danger float-right ml-3 '> <span ><i class='fa fa-trash '></i></span> </a>";
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