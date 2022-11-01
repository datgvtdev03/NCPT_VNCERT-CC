<?php 
    require_once "include/header.php";
?>

<?php 
 
//  database connection
require_once "include/connection.php";

$sql = "SELECT * FROM employee_description";
$result = mysqli_query($conn , $sql);

$i = 1;

?>

<style>
table, th, td {
  border: 1px solid black;
  padding: 15px;
}
table {
  border-spacing: 10px;
}
</style>

<div class="container bg-white shadow mb-5">
    <div class="py-4 mt-3"> 
    <div class='text-center pb-2'><h4>Danh sách nhân viên</h4></div>
<<<<<<< HEAD:demoVNCERT/admin/manage-employee-details.php
    <table style="width:100 %" class="table-hover text-center ">
    <tr class="bg-dark">
        <td>STT</td>
        <td style = "width:150px">Họ tên</td>
        <td style = "width:200px">Chức vụ</td>
        <td style = "width:200px">Email</td>
        <td style = "width:150px">Số điện thoại</td>
        <td style = "width:100px">Giới tính</td>
        <td style = "width:200px">Ngày sinh</td>
        <td style = "width:200px">Địa chỉ</td>
        <td style = "width:100px">Quản lý</td>

=======
    <table style="width:100%" class="table-hover text-center ">
    <tr class="bg-dark">
        <th>STT</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Giới tính</th>
        <th>Chức vụ</th>
        <th>Ảnh</th>
        <th>Hoạt động</th>
>>>>>>> main:demoVNCERT/admin/manage-post-details.php
    </tr>
    <?php 
    
    if( mysqli_num_rows($result) > 0){
        while( $rows = mysqli_fetch_assoc($result) ){
            $p_heading= $rows["e_name"];
            $complete_post = $rows["e_position"];
            $p_carousel = $rows["e_name"];  
            $id = $rows["e_id"];     
            ?>
        <tr>
        <td><?php echo "{$i}."; ?></td>
        <td> <?php echo ucwords($p_heading) ; ?></td>
        <td><?php 
            if( strlen($complete_post) < 100){
                echo $complete_post;
            }else{
                $add_3_dots = "...";
                $complete_post = substr($complete_post , 0 , 200); 
                echo $complete_post, $add_3_dots ;
            }
        ?></td>
          <td> <img src="upload/carousel/<?php echo $p_carousel;?> " class="img-fluid" style="height:70px"> </td>

        <td> <?php
                $edit_icon = "<a href='edit-post-details.php?id={$id}' class='btn-sm btn-primary float-right '> <span ><i class='fa fa-edit '></i></span> </a>";
                echo $edit_icon;
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