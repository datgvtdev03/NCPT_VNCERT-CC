<?php
    require "connect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNCERT/CC</title>

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="font-family: tahoma;
    font-size: 13px;
    width: 90%;
    margin: 0px auto;">
    <div class="container-fluid d-flex justify-content-center" id="navbar">
        <nav class="navbar navbar-expand-md">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../About-us/view/client/About-us.php">Đội ngũ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../News/news.php">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Tuyen dung/search.php">Tuyển dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact/contactForm.html">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../core/login.php">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header">
        <img src="img/Screen Shot 2022-11-01 at 12.37.14.png">
    </div>


    <div class="main" style="margin-bottom: 185px;">
        <div class="sidebar">
            <img src="img/vnx.png" alt="" width="98%" height="40%">
            <div>
                <h2>Giới thiệu về VNCERT</h2>
                <p> Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam là đơn vị sự nghiệp công lập trực thuộc Cục An toàn thông tin – Bộ Thông tin và Truyền thông (viết tắt là VNCERT/CC), thực hiện chức năng là đầu mối kỹ thuật điều phối ứng cứu sự cố an
                    toàn không gian mạng và kiểm định an toàn thông tin trên phạm vi toàn quốc; quản lý, vận hành các hệ thống số liệu,cơ sở dữ liệu, hệ thống kỹ thuật về điều phối ứng cứu sự cố ...</p>

            </div>

        </div>
        <div class="sidebar2">
            <img src="img/vn.png" alt="" width="98%" height="40%">
            <div>
                <h2>Vị trí và chức năng</h2>
                <p> Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam có tư cách pháp nhân, có con dấu và tài khoản riêng để giao dịch theo quy định của pháp luật; có trụ sở chính đặt tại thành phố Hà Nội và các chi nhánh tại thành phố Hồ Chí Minh và thành
                    phố Đà Nẵng.</p>

            </div>

        </div>
        <div class="sidebar3">
            <img src="img/cert.png" alt="" width="98%" height="40%">
            <h2>Nhiệm vụ và quyền hạn</h2>
            <p>Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam thực hiện nhiệm vụ, quyền hạn quy định tại Quyết định số 1671/QĐ-BTTTT ngày 01 tháng 11 năm 2019 của Bộ Thông tin và Truyền thông. <br> Xây dựng, trình Cục trưởng Cục An toàn thông tin phê
                duyệt kế hoạch hoạt động dài hạn, trung hạn, hàng năm của Trung tâm và tổ chức thực hiện sau khi được phê duyệt.

            </p>
        </div>
    </div>

    <?php 

  
  $read_news = "SELECT * FROM post_description WHERE p_id = 145 ";
  $read_result = mysqli_query($conn , $read_news);
  if($read_news){
    while( $rows = mysqli_fetch_assoc($read_result) ){
      $heading =  $rows["p_heading"];
      $details =  $rows["complete_post"];
       $time = $rows["p_time"];
      $category = $rows["p_category"];
      $img = $rows["p_thumbnail"];
?>


            <div class="single_page">
                <h1> <?php echo $heading; ?> </h1>
                <div class="single_page_content"> 
                    <blockquote style="font-size: 20px;"> <?php echo $details; ?> </blockquote>
                </div>
                <?php
    }
  }
?>

    <footer class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="logo-part">
                        <img src="images/logo.png" class="w-75 logo-footer"
                            style="margin: auto; display: block; padding-top: 18%;">
                        <h4 style="font-size: 15px; margin-top: 7%; color: #DFDFDF;">Trung tâm Ứng cứu khẩn cấp không
                            gian mạng Việt Nam</h4>
                    </div>
                </div>
                <div class="col-md-7 px-4" style="line-height: 25px;">
                    <h6 style="color: #DFDFDF;"> Thông tin liên hệ</h6>
                    <span class="create"><img src="images/phone-call.png" /> Hotline:</span><br>
                    <p class="contact-info">0869 100317</p>
                    <span class="create" style="padding-left: 20px;"> Fax:</span><br>
                    <p class="contact-info">84.24.36404425</p>
                    <span class="create"><img src="images/mail.png" /> Email:</span><br>
                    <p class="contact-info">office@vncert.vn</p>
                    <span class="create"><img src="images/maps-and-flags.png" /> Địa chỉ:</span>
                    <p class="contact-info">Tầng 5, 115 Trần Duy Hưng, Trung Hoà, Cầu Giấy, Hà Nội</p>
                </div>
                <div class="col-md-2">
                    <h6 style="color: #DFDFDF;">Hỗ trợ</h6>
                    <ul id="footer-menu">
                        <li> <a href="#"> Trang chủ</a> </li>
                        <li> <a href="../About-us/view/client/About-us.php"> Đội ngũ</a> </li>
                        <li> <a href="../News/news.php"> Tin tức</a> </li>
                        <li> <a href="../Tuyen dung/search.php"> Tuyển dụng</a> </li>
                        <li> <a href="../Contact/contactForm.html"> Liên hệ</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>