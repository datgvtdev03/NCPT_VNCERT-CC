<?php
require_once "include/header.php";
?>
<?php

// database connection
require_once "include/connection.php";

$id = $_GET["id"];
$select_mission = "SELECT * FROM tbl_mission_staff WHERE id = '$id' ";
$result_mission = mysqli_query($conn , $select_mission);

if( $result_mission ){
    while( $select_mission_row = mysqli_fetch_assoc($result_mission) ){
       
        $fullname_txt = $select_mission_row["userId"];  
        $email_txt = $select_mission_row["missionName"];
        $password_txt = $select_mission_row["startDate"];
        $phonenumber_txt = $select_mission_row["endDate"];
    }
}

//khai bao bien
$fullname_err = $email_err = $password_err = $phonenumber_err = $address_err = $gender_err = $dateOfBirth_err = $check_mission_err;
$t = 1;



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // //check ten
    if (empty($_REQUEST["userId"])) {
        $fullname_txt = "";
    } else {
        $fullname_txt = $_REQUEST["userId"];
    }

    //check nv
    if (empty($_REQUEST["missionName"])) {
        $email_err = "<p style='color:red'> * Email không được để trống! </p>";
    } else {
        $email_txt = $_REQUEST["missionName"];
    }

    //bat dau
    if (empty($_REQUEST["startDate"])) {
        $password_err = "<p style='color:red'> * Email không được để trống! </p>";
    } else {
        $password_txt = $_REQUEST["startDate"];
    }

    //cket thuc
    if (empty($_REQUEST["endDate"])) {
        $phonenumber_err = "<p style='color:red'> * Số điện thoại không được để trống! </p>";
    } else {
        $phonenumber_txt = $_REQUEST["endDate"];
    }


    
    //ktra rong
    if (!empty($fullname_txt) && (!empty($email_txt)) && (!empty($password_txt))) {

        $current_time  = strtotime("now");

        $update_mission = "UPDATE tbl_mission_staff SET userId = '$fullname_txt', missionName = '$email_txt', startDate = '$password_txt', endDate = '$phonenumber_txt', p_time = '$current_time' WHERE id = '$id' ";

        $result_edit_member = mysqli_query($conn, $update_mission);


        if ($result_edit_member) {
            echo "<script>
                $(document).ready( function(){
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-mission-staff.php');
                    $('#linkBtn').text('Xem tất cả chi tiết bài đăng');
                    $('#addMsg').text('Chi tiết bài đăng đã được chỉnh sửa thành công!');
                    $('#closeBtn').text('Chỉnh sửa lại');
                })
            </script>
            ";
        }
    }
}
?>


<div class="container mb-5">
    <div id="form" class="pt-5 form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-3 shadow">
                <h3 class="text-center">Chỉnh sửa nhiệm vụ</h3>
                <form method="POST" enctype="multipart/form-data" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">

                    <?php echo $fullname_err; ?>
            </div>

            <!-- chon nv -->
            <div class="form-group">
                <label>Chọn nhân viên:</label><br>
                <?php
                $sql = "SELECT `id`, `name` FROM `admin`";
                $result = mysqli_query($conn, $sql);
                ?>

                <select name="userId">
                    <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                        <option 
                        <?php if($row1["id"] == $fullname_txt) {
                            echo "selected";
                        } ?>
                         value="<?php echo $row1["id"];
                                        ?>">
                            <?php echo $row1["name"];
                            ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>


            <!-- ten nv  -->
            <div class="form-group">

                <label> Tên nhiệm vụ: </label><br>
                <input type="text" name="missionName" id="missionName" value="<?php echo $email_txt; ?>">

                <?php echo $email_err; ?>
            </div>

            <!-- ngay bd -->
            <div class="form-group">

                <label> Ngày bắt đầu: </label><br>
                <input type="date" name="startDate" id="startDate" value="<?php echo $password_txt; ?>">
                <?php echo $password_err; ?>
            </div>

            <!-- ngay ket thuc -->
            <div class="form-group">

                <label> Ngày kết thúc: </label><br>
                <input type="date" name="endDate" id="endDate" value="<?php echo $phonenumber_txt; ?>">

                <?php echo $phonenumber_err; ?>
            </div>

            <div class="form-group">
                <input type="submit" value="Add" class="btn login-form__btn submit w-10 " name="submit_expense">
            </div>


            </form>
        </div>

    </div>
</div>
</div>




<?php
require_once "include/footer.php";
?>