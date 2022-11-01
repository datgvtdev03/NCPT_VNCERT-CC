<?php 
    require_once "include/header.php";
?>

<?php
//  database connection
require_once "include/connection.php";

// total no of post - để đếm số luọng bài viết(nhân viên cũng code theo như vậy)
$select_total_post = "SELECT * FROM post_description WHERE p_time IS NOT NULL";
$total_post_result  = mysqli_query($conn , $select_total_post);

//dem so luong bai viet
$select_members = "SELECT * FROM admin WHERE p_time IS NOT NULL";
$total_member  = mysqli_query($conn , $select_members);




// selecting category details
// $sql = "SELECT * FROM post_category";
// $result = mysqli_query($conn , $sql);
// $i = 1;


// selecting about us
$about_us = "";
$get_about = "SELECT * FROM about_us ORDER BY id DESC LIMIT 1";
$get_about_result = mysqli_query($conn , $get_about);

if($get_about_result){

    while($about_row = mysqli_fetch_assoc($get_about_result)){
       $about_us = $about_row["about"];
    } 
}


// selecting contact details
$phn_no = $email = $fax_no = $address = "";
$get_contact = "SELECT * FROM contact_us ORDER BY id DESC LIMIT 1";
$get_contact_result = mysqli_query($conn , $get_contact);

if($get_contact_result){

    while($contact_row = mysqli_fetch_assoc($get_contact_result)){
        $phn_no = $contact_row["phn"];
        $email = $contact_row["email"];
        $fax_no = $contact_row["fax"];
        $address = $contact_row["address"];
    } 
}

?>

<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 10px;
}
</style>


<div class="container mb-5">
    <div class="row mt-5">

                                    <!-- quan ly bai viết -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card shadow " >
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Quản lý bài viết</li>
                    <li class="list-group-item text-left">Số lượng bài viết : <?php 
                        if($total_post_result){
                            echo mysqli_num_rows($total_post_result);
                        }
                    ?></li>
                    <li class="list-group-item text-center"><a href="manage-post-desc.php"><b>Xem tất cả bài viết</b></a>   </li>
                </ul>
            </div>
        </div>

        <!-- quản lý nhân viên (chưa xử lý đc logic. chỉ hiện kên giao diện) -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card shadow " >
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Quản lý nhân viên</li>
                    <li class="list-group-item text-left">Số lượng nhân viên : <?php 
                        if($total_member){
                            echo mysqli_num_rows($total_member);
                        }
                    ?></li>
                    <li class="list-group-item text-center"><a href="manage-post-desc.php"><b>Xem tất cả nhân viên</b></a>   </li>
                </ul>
            </div>
        </div>





    </div>

    <!-- 2nd row start -->
    <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-12 "> 
        <div class="card shadow " >
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"> <b>Chi tiết liên hệ </b> </li>
                    <li class="list-group-item"><b>  Địa chỉ : </b>  <?php echo $address; ?> </li>
                    <li class="list-group-item"><b>  Số điện thoại :  </b>   <?php echo $phn_no; ?> </li>
                    <li class="list-group-item"><b>  Email : </b>   <?php echo $email; ?></li>
                    <li class="list-group-item"><b> Fax No. :   </b> <?php echo $fax_no; ?></li>
                    <li class="list-group-item text-center"> <a href="contact-us.php"><b>Chỉnh sửa chi tiết liên hệ</b> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 "> 
           <div class="card shadow">
                 <ul class="list-group list-group-flush">
                 <li class="list-group-item text-center"> <b>Location </b> </li>
                 <li class="list-group-item"> <iframe src="https://www.google.com/maps?q=<?php echo $address; ?>&output=embed" style=" height:230px; width:100%;" allowfullscreen="" loading="lazy"></iframe>
                    </li>
                </ul>
           </div>
        </div>
    </div>
   
</div>



<?php 
    require_once "include/footer.php";
?>