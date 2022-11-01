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
    
    <title>News</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center" id="navbar">
        <nav class="navbar navbar-expand-md">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Đội ngũ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tuyển dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact/contactForm.html">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>

    <div id="banner" class="container">
        <img class="banner" src="img/banner1.png" alt="">
        <img class="banner" src="img/banner2.webp" alt="">

    </div>

   
    <div id="main" class="container">

<div class="container" style="display: block; float: inline-start">
<ul style="margin: 0px; padding: 0px; width: 70%; display: flex;">
        <?php
                
                $select_cat_news = "SELECT * FROM post_description ORDER BY p_time DESC ";
                $result_cat_news = mysqli_query($conn , $select_cat_news);

                if($result_cat_news){
                    while ( $cat_news_rows = mysqli_fetch_assoc($result_cat_news) ){
                     $post_thumb = $cat_news_rows["p_thumbnail"];
                      $post_heading = $cat_news_rows["p_heading"];
                      $post_id = $cat_news_rows["p_id"];
                      $post_desc = $cat_news_rows["p_description"];
                      $post_id = $cat_news_rows["p_id"];
             ?>

                <!-- inner card row -->

                     
                          <li style="list-style: none; clear: left; border-bottom: 2px solid #ccc; margin-bottom: 20px">
                          <a href="read-post.php?id=<?php echo $post_id; ?>" > <img  style="width: 200px; height: 200px; float: left; margin-right: 15px " src="core/upload/thumbnail/<?php echo $post_thumb; ?>"> </a>
                           <a href="read-post.php?id=<?php echo $post_id; ?>" > <h3> <?php echo ucwords($post_heading); ?> </h3> </a>
                            <a href="read-post.php?id=<?php echo $post_id ?>" ><?php echo ucwords($post_desc); ?> </a>

                          </li>
                      
                        
               
                  <?php
                  }
                }
                        
                ?>
                </ul>
                </div>

                <div class="container" style="display: block; float: inline-start" >
                <h3>Từ khoá: </h3>
            <input title="text" placeholder="Nhập từ khoá..." /><button>Tìm kiếm</button>
        <?php
                
                $select_cat_news = "SELECT * FROM post_description ORDER BY p_time DESC ";
                $result_cat_news = mysqli_query($conn , $select_cat_news);

                if($result_cat_news){
                    while ( $cat_news_rows = mysqli_fetch_assoc($result_cat_news) ){
                     $post_thumb = $cat_news_rows["p_thumbnail"];
                      $post_heading = $cat_news_rows["p_heading"];
                      $post_id = $cat_news_rows["p_id"];
                      $post_desc = $cat_news_rows["p_description"];
                      $post_id = $cat_news_rows["p_id"];
             ?>

                <!-- inner card row -->

                <ul style="margin: 0px; padding: 0px; width: 30%; display: flex;">
                          <li style="list-style: none; clear: left; border-bottom: 2px solid #ccc; margin-bottom: 20px">
                          <a href="read-post.php?id=<?php echo $post_id; ?>" > <img  style="width: 200px; height: 200px; float: left; margin-right: 15px " src="core/upload/thumbnail/<?php echo $post_thumb; ?>"> </a>
                           <a href="read-post.php?id=<?php echo $post_id; ?>" > <h3> <?php echo ucwords($post_heading); ?> </h3> </a>
                            <a href="read-post.php?id=<?php echo $post_id ?>" ><?php echo ucwords($post_desc); ?> </a>

                          </li>
                      </ul>

                  <?php
                  }
                }
                        
                ?>
                </div>
            </div>

 
   
    <!--Footer-->
    <footer class="container-fluid py-5">
        <div class="container">
           <div class="row">
                    <div class="col-md-3 ">
                       <div class="logo-part">
                          <img src="images/logo.png" class="w-75 logo-footer" style="margin: auto; display: block; padding-top: 18%;">
                          <h4 style="font-size: 15px; margin-top: 7%; color: #DFDFDF;">Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam</h4>
                       </div>
                    </div>
                    <div class="col-md-7 px-4" style="line-height: 25px;">
                       <h6 style="color: #DFDFDF;"> Thông tin liên hệ</h6>
                       <span class="create"><img src="images/phone-call.png"/> Hotline:</span><br>
                       <p class="contact-info">0869 100317</p>
                       <span class="create" style="padding-left: 20px;"> Fax:</span><br>
                       <p class="contact-info">84.24.36404425</p>
                       <span class="create"><img src="images/mail.png"/> Email:</span><br>
                       <p class="contact-info">office@vncert.vn</p>
                       <span class="create"><img src="images/maps-and-flags.png"/> Địa chỉ:</span>
                       <p class="contact-info">Tầng 5, 115 Trần Duy Hưng, Trung Hoà, Cầu Giấy, Hà Nội</p>
                    </div>
                    <div class="col-md-2">
                        <h6 style="color: #DFDFDF;">Hỗ trợ</h6>
                              <ul id="footer-menu">
                                 <li> <a href="#"> Trang chủ</a> </li>
                                 <li> <a href="#"> Tin tức</a> </li>
                                 <li> <a href="#"> Đội ngũ</a> </li>
                                 <li> <a href="#"> Tuyển dụng</a> </li>
                                 <li> <a href="#"> Liên hệ</a> </li>
                              </ul>
                     </div>
           </div>
        </div>
    </div>

</body>
</html>
