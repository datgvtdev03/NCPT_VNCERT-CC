
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



    if( $_SERVER["REQUEST_METHOD"] == "POST" ){


    print_r($fullname_txt);
        
        //check fullname
        if( empty($_REQUEST["fullname"])){
            $fullname_err =  "<p style='color:red'> * Họ tên không được để trống! </p>";
        }else {
          $fullname_txt = $_REQUEST["fullname"];
        }

        //check email
        if( empty( $_REQUEST["email"] ) ){
            $email_err = "<p style='color:red'> * Email không được để trống </p>";
        }else{
           $email_txt = $_REQUEST["email"];
        }

        //check pass
        if( empty( $_REQUEST["pass"] ) ){
            $password_err = "<p style='color:red'> * Email không được để trống </p>";
        }else{
           $password_txt = $_REQUEST["pass"];
        }

        //check sdt
        if( empty( $_REQUEST["phone"])) {
            $phonenumber_err = "<p style='color:red'> * Số điện thoại không được để trống! </p>";
        } else {
            $phonenumber_txt = $_REQUEST["phone"];
        }

        //check address
        if( empty( $_REQUEST["address"])) {
            $address_err = "<p style='color:red'> * Địa chỉ không được để trống! </p>";
        } else {
            $address_txt = $_REQUEST["address"];
        }

        //check ngay sinh
        if( empty( $_REQUEST["date"])) {
            $dateOfBirth_err = "<p style='color:red'> * Ngày sinh không được để trống! </p>";
        } else {
            $dateOfBirth_txt = $_REQUEST["date"];
        }


        //check mission
        if( empty( $_REQUEST["checkmission"])) {
            $check_mission_text = "";
        } else {
            $check_mission_text = $_REQUEST["checkmission"];
        }

        //check gender
        if( empty($_REQUEST["gender"]) ){        
            $gender_txt ="";
        }else {
            $gender_txt = $_REQUEST["gender"];
        }

        



        //ktra rong
        if( !empty($fullname_txt) && !empty($email_txt) && !empty($password_txt) && !empty($address_txt) && !empty($phonenumber_txt) && !empty($dateOfBirth_txt) && !empty($check_mission_text)) {

            $current_time  = strtotime("now");

            $sql_select_query = "SELECT email FROM admin WHERE email = '$email_txt' ";
            $r = mysqli_query($conn , $sql_select_query);




            if(mysqli_num_rows($r) > 0) {
                $email_err = "<p style='color:red'> * Email đã tồn tại! </p>";
            } else {
               
                $add_member = "INSERT INTO admin( name ,email,  password , gender, phoneNumber, address, dateOfBirth, checkMission, p_time) 
                VALUES ( '$fullname_txt' , '$email_txt', '$password_txt' , '$gender_txt', '$phonenumber_txt', '$address_txt', '$dateOfBirth_txt', '$check_mission_text', '$current_time')";


                $result_add_member = mysqli_query($conn , $add_member);
               
            }


            if($result_add_member){
                echo "<script>
                $(document).ready( function(){
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-post-details.php');
                    $('#linkBtn').text('Xem tất cả chi tiết nhân viên');
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
                <h3 class="text-center">Thêm nhân viên </h3>
                <form method="POST" enctype="multipart/form-data" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>"> 
               
                   <!-- ho ten -->
                    <div class="form-group">

                        <label> Họ tên: </label>
                        <input type="text" name="fullname" id="fullname">

                        <?php echo $fullname_err; ?>
                    </div>


                    <!-- email -->
                    <div class="form-group">

                        <label> Email: </label>
                        <input type="email" name="email" id="email">

                        <?php echo $email_err; ?>
                    </div>

                    <!-- //mat khau -->
                    <div class="form-group">

                        <label> Password: </label>
                        <input type="password" name="pass" id="pass">

                        <?php echo $password_err; ?>
                    </div>

                    <!-- so dien thoai -->
                    <div class="form-group">

                        <label> Số điện thoại: </label>
                        <input type="text" name="phone" id="phone" >

                        <?php echo $phonenumber_err; ?>
                    </div>

                    <!-- dia chi -->
                    <div class="form-group">

                        <label> Địa chỉ: </label>
                        <input type="text" name="address" id="address" >

                        <?php echo $address_err; ?>
                    </div>

                    <!-- ngay sinh -->
                    <div class="form-group">

                        <label> Ngày sinh: </label>
                        <input type="date" name="date" id="date">
                        <?php echo $dateOfBirth_err; ?>
                    </div>

                     <!-- check mission -->
                     <div class="form-group form-check form-check-inline">
                        <label class="form-check-label" >Check permission :</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="checkmission" <?php if($check_mission_text == "1" ){ echo "checked"; } ?>  value="1"  selected>
                        <label class="form-check-label" >Admin</label>

                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="checkmission" <?php if($check_mission_text == "2" ){ echo "checked"; } ?>  value="2">
                        <label class="form-check-label" >Nhân viên</label>
                    </div><br>

                   
                    <!-- gioi tinh -->
                    <div class="form-group form-check form-check-inline">
                        <label class="form-check-label" >Gender :</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" <?php if($gender_txt == "Nam" ){ echo "checked"; } ?>  value="Nam"  selected>
                        <label class="form-check-label" >Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" <?php if($gender_txt == "Nu" ){ echo "checked"; } ?>  value="Nu">
                        <label class="form-check-label" >Nữ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" <?php if($gender_txt == "Khac" ){ echo "checked"; } ?>  value="Khac">
                        <label class="form-check-label" >Khác</label>
                    </div>
                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">

                    <div class="form-group">
                        <input type="submit" value="Add" class="btn login-form__btn submit w-10 " name="submit_expense" >
                    </div>


                </form>
            </div>
            <!-- ckeditor function call -->
            <!-- <script>
                CKEDITOR.replace('detail');
            </script> -->
        </div>
    </div>
</div>




<?php 
    require_once "include/footer.php";
?>