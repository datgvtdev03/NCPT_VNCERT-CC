<?php
    require "connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styleNews.css">

    <title>Tin tức</title>
</head>

<header>
<div class="container-fluid d-flex justify-content-center" id="navbar">
        <nav class="navbar navbar-expand-md">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../HomeScreen/index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../About-us/view/client/About-us.php">Đội ngũ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">Tin tức</a>
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

</header>

<body style="width: 90%;">

    <div style="display: flex;" id="main">

        <div style="width: 70%;">
            <?php 

  $id = $_GET["id"];
  $read_news = "SELECT * FROM post_description WHERE p_id = '$id' ";
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
                <div class="single_page_content"> <img class="img-center" style="width:85%; height:300px; margin: 15px"
                        src="core/upload/thumbnail/<?php echo $img; ?>" alt="">
                    <blockquote style="font-size: 20px;"> <?php echo $details; ?> </blockquote>
                </div>
                <?php
    }
  }
?>

            </div>
        </div>
        <div style="width: 30%;" id="right">
            <form action="" method="POST">
                <h6>Tìm kiếm: </h6>
                <input title="text" name="txtSearch" placeholder="Nhập từ khoá..." /><input
                    style="margin-left: 10px; width: 65px; color:white; background: #00549a;" type="submit"
                    name="search" value="Tìm kiếm">
            </form>



            <?php

                if(isset($_POST["search"])){
                    $s = $_POST["txtSearch"];
                    if($s == ""){
                        echo "<script>alert('Vui long nhap');</script>";
                    } else {
                        $select_cat_news = "SELECT * FROM `post_description` WHERE p_heading LIKE '%$s%'";
                    }
                } else {
                    $select_cat_news = "SELECT * FROM post_description ORDER BY p_time DESC ";
                }
                
                $result_cat_news = mysqli_query($conn , $select_cat_news);
                $count = mysqli_num_rows($result_cat_news);
                if ($count <= 0){
                    echo "Không tìm thấy kết quả";
                }

                if($result_cat_news){
                    while ( $cat_news_rows = mysqli_fetch_assoc($result_cat_news) ){
                     $post_thumb = $cat_news_rows["p_thumbnail"];
                      $post_heading = $cat_news_rows["p_heading"];
                      $post_id = $cat_news_rows["p_id"];
                      $post_desc = $cat_news_rows["p_description"];
                      $post_id = $cat_news_rows["p_id"];
             ?>

            <ul style="margin: 0px; padding: 0px; width: 100%; display: flex;">
                <li style="clear: left; margin-bottom: 20px">
                    <a class="listNews" href="read-post.php?id=<?php echo $post_id; ?>"> <?php echo ucwords($post_heading); ?> </a>

                </li>
            </ul>

            <?php
                  }
                }
                        
                ?>
        </div>
    </div>
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
                        <li> <a href="../HomeScreen/index.php"> Trang chủ</a> </li>
                        <li> <a href="../About-us/view/client/About-us.php"> Đội ngũ</a> </li>
                        <li> <a href="news.php"> Tin tức</a> </li>
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