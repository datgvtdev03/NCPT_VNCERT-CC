
<?php 
    require_once "include/header.php";
?>
<?php

    // database connection
    require_once "include/connection.php";

    $id = $_GET["id"];
    $select_post_details_getMember = "SELECT * FROM admin WHERE id = '$id' ";
    $result_post_details_members = mysqli_query($conn , $select_post_details_getMember);

    if( $result_post_details_members ){
        while( $select_member_row = mysqli_fetch_assoc($result_post_details_members) ){

            $fullname_txt = $select_member_row["name"];  
            $email_txt = $select_member_row["email"];
            $password_txt = $select_member_row["password"];
            $phonenumber_txt = $select_member_row["phoneNumber"];
            $dateOfBirth_txt = $select_member_row["dateOfBirth"];
            $address_txt = $select_member_row["address"];
            $gender_txt = $select_member_row["gender"];
            $mission_txt = $select_member_row["mission"];
            $check_mission_text = $select_member_row["checkMission"];
        }
    }

    $fullname_err = $email_err = $password_err = $phonenumber_err = $address_err = $mission_err = $gender_err = $dateOfBirth_err = $check_mission_err = "";
    
    $t = 1;


    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        
        //check fullname
        if( empty($_REQUEST["fullname"])){
            $fullname_err =  "<p style='color:red'> * Họ tên không được để trống! </p>";
            $fullname_txt = "";
        }else {
          $fullname_txt = $_REQUEST["fullname"];
        }

        //check email
        if( empty( $_REQUEST["email"] ) ){
            $email_err = "<p style='color:red'> * Email không được để trông </p>";
            $email_txt = "";
        }else{
           $email_txt = $_REQUEST["email"];
        }

        //check pass
        if( empty( $_REQUEST["pass"] ) ){
            $password_err = "<p style='color:red'> * Email không được để trông </p>";
            $password_txt = "";
        }else{
           $password_txt = $_REQUEST["pass"];
        }

        //check sdt
        if( empty( $_REQUEST["phone"])) {
            $phonenumber_err = "<p style='color:red'> * Số điện thoại không được để trống! </p>";
            $phonenumber_txt = "";
        } else {
            $phonenumber_txt = $_REQUEST["phone"];
        }

        //check address
        if( empty( $_REQUEST["address"])) {
            $address_err = "<p style='color:red'> * Địa chỉ không được để trống! </p>";
            $address_txt = "";
        } else {
            $address_txt = $_REQUEST["address"];
        }

        //check ngay sinh
        if( empty( $_REQUEST["date"])) {
            $dateOfBirth_err = "<p style='color:red'> * Ngày sinh không được để trống! </p>";
            $dateOfBirth_txt = "";
        } else {
            $dateOfBirth_txt = $_REQUEST["date"];
        }

        //check nhiem vu 
        if( empty( $_REQUEST["missions"])) {
            $mission_err = "<p style='color:red'> * Nhiệm vụ không được để trống! </p>";
            $mission_txt = "";
        } else {
            $mission_txt = $_REQUEST["missions"];
        }

         //check mission
         if( empty( $_REQUEST["checkmission"])) {
            $check_mission_err = "<p style='color:red'> * Nhiệm vụ không được để trống! </p>";
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
       


        if( !empty($fullname_txt) && !empty($email_txt) && !empty($password_txt) && !empty($address_txt) && !empty($phonenumber_txt) && !empty($dateOfBirth_txt) && !empty($mission_txt) && !empty($check_mission_text)) {

            $current_time  = strtotime("now");
            $sql_select_query = "SELECT email FROM admin WHERE email = '$email_txt' ";
            $r = mysqli_query($conn , $sql_select_query);


            if(mysqli_num_rows($r) > 0) {
                $email_err = "<p style='color:red'> * Email đã tồn tại! </p>";
            } else {
              
                $update_member = "UPDATE admin SET name = '$fullname_txt', email = '$email_txt', password = '$password_txt', gender = '$gender_txt', phoneNumber = '$phonenumber_txt', address = '$address_txt', mission = '$mission_txt', dateOfBirth = '$dateOfBirth_txt', checkMission = '$check_mission_text', p_time = '$current_time' WHERE id = '$id' ";

                $result_add_member = mysqli_query($conn , $update_member);
                
            }

            if($result_add_member){
                                    echo "<script>
                                    $(document).ready( function(){
                                        $('#showModal').modal('show');
                                        $('#linkBtn').attr('href', 'manage-post-details.php');
                                        $('#linkBtn').text('View All Post Details');
                                        $('#addMsg').text('Post Details Edited Successfully!');
                                        $('#closeBtn').text('Edit Again');
                                    })
                                </script>
                                ";
                   
              
            }

        }

    }
?>

<!-- ckeditor js -->
<!-- <script src="include/ckeditor/ckeditor.js"></script> -->

<div class="container mb-5">
    <div id="form" class="pt-5 form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-3 shadow">
                <h3 class="text-center">Thêm nhân viên </h3>
                <form method="POST" enctype="multipart/form-data" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>"> 
               
                   <!-- ho ten -->
                    <div class="form-group">
                        <label> Họ tên: </label>
                        <input type="text" name="fullname" id="fullname"><?php echo $fullname_txt; ?>
                        <?php echo $fullname_err; ?>
                    </div>

                    <!-- email -->
                    <div class="form-group">
                        <label> Email: </label>
                        <input type="text" name="email" id="email"><?php echo $email_txt; ?>
                        <?php echo $email_err; ?>
                    </div>

                    <!-- //mat khau -->
                    <div class="form-group">
                        <label> Password: </label>
                        <input type="text" name="pass" id="pass"><?php echo $password_txt; ?>
                        <?php echo $password_err; ?>
                    </div>

                    <!-- so dien thoai -->
                    <div class="form-group">
                        <label> Số điện thoại: </label>
                        <input type="text" name="phone" id="phone"><?php echo $phonenumber_txt; ?>
                        <?php echo $phonenumber_err; ?>
                    </div>

                    <!-- dia chi -->
                    <div class="form-group">
                        <label> Địa chỉ: </label>
                        <input type="text" name="address" id="address"><?php echo $address_txt; ?>
                        <?php echo $address_err; ?>
                    </div>

                    <!-- ngay sinh -->
                    <div class="form-group">
                        <label> Ngày sinh: </label>
                        <input type="text" name="date" id="date"><?php echo $dateOfBirth_txt; ?>
                        <?php echo $dateOfBirth_err; ?>
                    </div>
                   
                   <!-- nhiem vu -->
                    <div class="form-group">
                        <label> Nhiệm vụ: </label>
                        <input type="text" name="missions" id="missions"><?php echo $mission_txt; ?>
                        <?php echo $mission_err; ?>
                    </div>

                     <!-- check mission -->
                     <div class="form-group">
                        <label> Check mission: </label>
                        <input type="text" name="checkmission" id="checkmission"><?php echo $check_mission_text; ?>
                        <?php echo $check_mission_err; ?>
                    </div>

                   
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