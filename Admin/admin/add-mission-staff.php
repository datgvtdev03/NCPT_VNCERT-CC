<?php 
    require_once "include/header.php";
?>
<?php

    // database connection
    require_once "include/connection.php";


    //khai bao bien
    $userId_err = $missionName_err = $startDate_err = $endDate_err = $status_err ;
    $userId_txt = $missionName_txt = $startDate_txt = $endDate_txt = $status_txt ;
    $t = 1;


    if( $_SERVER["REQUEST_METHOD"] == "POST" ){

      //check usserID
    if( empty($_REQUEST["userId"])){
        // $fullname_err =  "<p style='color:red'> * Họ tên không được để trống! </p>";
        $userId_txt = "";
    }else {
      $userId_txt = $_REQUEST["userId"];
    }

    //check name
    if( empty( $_REQUEST["missionName"] ) ){
        $missionName_err = "<p style='color:red'> * Ten không được để trống </p>";
    }else{
       $missionName_txt = $_REQUEST["missionName"];
    }

    //check pass
    if( empty( $_REQUEST["startDate"] ) ){
        $startDate_err = "<p style='color:red'> * Email không được để trống </p>";
    }else{
       $startDate_txt = $_REQUEST["startDate"];
    }

    //check sdt
    if( empty( $_REQUEST["endDate"])) {
        $endDate_err = "<p style='color:red'> * Số điện thoại không được để trống! </p>";
    } else {
        $endDate_txt = $_REQUEST["endDate"];
    }

    //check address
    if( empty( $_REQUEST["status"])) {
        $status_err = "<p style='color:red'> * Địa chỉ không được để trống! </p>";
    } else {
        $status_txt = $_REQUEST["status"];
    }

   



    //ktra rong
    if( !empty($userId_txt) && !empty($missionName_txt) && !empty($startDate_txt) && !empty($endDate_txt) && !empty($status_txt)) {

          $current_time  = strtotime("now");
          $add_mission = "INSERT INTO tbl_mission_staff ( userId ,missionName,  startDate , endDate, status, p_time) 
          VALUES ( '$userId_txt' , '$missionName_txt' , '$startDate_txt' , '$endDate_txt' , '$status_txt', '$current_time')";

          $result_add_member = mysqli_query($conn , $add_mission);

          print_r($userId_txt);
          print_r($missionName_txt);
          
      


      if($result_add_member){
          echo "<script>
          $(document).ready( function(){
              $('#showModal').modal('show');
              $('#linkBtn').attr('href', 'manage-post-details.php');
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
            <h4 class="text-center">Thêm nhiệm vụ </h4>  
    
    <!-- phương thức post -->
    <form method="POST" enctype="multipart/form-data" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">

    <!-- form bài đăng -->

        <!-- tie de bai dang -->
        <div class="form-group">
            <label >Chọn nhân viên:</label>
         <?php 
            $sql ="SELECT `id`, `name` FROM `admin`";
            $result = mysqli_query($conn ,$sql);
         ?>
         <select>
           <?php while($row1 = mysqli_fetch_array($result)):; ?>
           <option value="<?php echo $row1[0]; ?>" name="userId" <?php if($userId_txt == "<?php echo $row1[0]; ?>" ){ echo "checked"; } ?> > <?php echo $row1[1]; ?></option>
           <?php endwhile; ?>
         </select>      
        </div>


        <div class="form-group">
            <label >Tên nhiệm vụ:</label>
            <input type="text" class="form-control"  name="missionName" > 
            <?php echo $missionName_err; ?>                
        </div>

        <div class="form-group">
            <label >Ngày bắt đầu:</label>
            <input type="date" class="form-control"  name="startDate" > 
            <?php echo $startDate_err; ?>                
        </div>

        <div class="form-group">
            <label >Ngày kết thúc:</label>
            <input type="date" class="form-control"  name="endDate" > 
            <?php echo $endDate_err; ?>                
        </div>

        <div class="form-group">
            <label >Trạng thái:</label>
            <input type="text" class="form-control"  name="status" > 
            <?php echo $status_err; ?>                
        </div>



        

        <div class="form-group">
            <input type="submit" value="Thêm" class="btn login-form__btn submit w-10 " name="submit_expense" >
        </div>

    </form>
</div>
        </div>
    </div>
</div>




<?php 
    require_once "include/footer.php";
?>