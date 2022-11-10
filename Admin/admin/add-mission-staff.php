<?php
require_once "include/header.php";
?>
<?php

// database connection
require_once "include/connection.php";


//khai bao bien
$fullname_err = $email_err = $password_err = $phonenumber_err = $address_err = $gender_err = $dateOfBirth_err = $check_mission_err;
$fullname_txt = $email_txt = $password_txt = $phonenumber_txt = $address_txt = $gender_txt = $dateOfBirth_txt = $check_mission_text;
// $t = 1;



if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // print_r($fullname_txt);

    // //check ten
    if (empty($_REQUEST["userId"])) {
        $fullname_txt = "";
    } else {
        $fullname_txt = $_REQUEST["userId"];
    }

    //check nv
    if (empty($_REQUEST["missionName"])) {
        $email_err = "<p style='color:red'> * Email không được để trống </p>";
    } else {
        $email_txt = $_REQUEST["missionName"];
    }

    //bat dau
    if (empty($_REQUEST["startDate"])) {
        $password_err = "<p style='color:red'> * Email không được để trống </p>";
    } else {
        $password_txt = $_REQUEST["startDate"];
    }

    //cket thuc
    if (empty($_REQUEST["endDate"])) {
        $phonenumber_err = "<p style='color:red'> * Số điện thoại không được để trống! </p>";
    } else {
        $phonenumber_txt = $_REQUEST["endDate"];
    }


    // if( !empty($fullname_txt) && !empty($email_txt) && !empty($password_txt) && !empty($address_txt) && !empty($phonenumber_txt) && !empty($dateOfBirth_txt) && !empty($check_mission_text)) {



    //ktra rong
    if (!empty($fullname_txt) && (!empty($email_txt)) && (!empty($password_txt))) {

        $current_time  = strtotime("now");

        $add_member = "INSERT INTO tbl_mission_staff ( userId ,missionName,  startDate , endDate, p_time) 
    VALUES ('$fullname_txt' , '$email_txt', '$password_txt', '$phonenumber_txt', '$current_time')";

        $result_add_member = mysqli_query($conn, $add_member);


        if ($result_add_member) {
            echo "<script>
                $(document).ready( function(){
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-mission-staff.php');
                    $('#linkBtn').text('Xem tất cả nhiệm vụ');
                    $('#addMsg').text('Chi tiết nhiệm vụ đã được chỉnh sửa thành công!');
                    $('#closeBtn').text('Sửa lại');
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
                <h3 class="text-center">Thêm nhiệm vụ</h3>
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
                        <option value="<?php echo $row1["id"];
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
                <input type="text" name="missionName" id="missionName">

                <?php echo $email_err; ?>
            </div>

            <!-- ngay bd -->
            <div class="form-group">

                <label> Ngày bắt đầu: </label><br>
                <input type="date" name="startDate" id="startDate">

                <?php echo $password_err; ?>
            </div>

            <!-- ngay ket thuc -->
            <div class="form-group">

                <label> Ngày kết thúc: </label><br>
                <input type="date" name="endDate" id="endDate">

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