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

<body style="width: 80%;">
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
                    <a class="nav-link" href="core/login.php">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>

    

   
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
      $img = $rows["p_carousel"];
?>
        
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1> <?php echo $heading; ?> </h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>user</a> <span><i class="fa fa-calendar"></i> <?php echo date('d-M-Y ' , $time); ?> </span> <a href="#"><i class="fa fa-tags"></i><?php echo $category; ?></a> </div>
            <div class="single_page_content"> <img class="img-center" style="width:85%; height:300px" src="admin/upload/carousel/<?php echo $img; ?>" alt="">
              <blockquote> <?php echo $details; ?> </blockquote>
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
            <?php

              $selet_related_post = "SELECT * FROM post_description WHERE p_category = '$category' ORDER BY RAND() LIMIT 3 ";
              $relted_post = mysqli_query($conn , $selet_related_post);

              if($relted_post){
                while ( $relted_post_row = mysqli_fetch_assoc($relted_post) ){
                  $thumb = $relted_post_row["p_thumbnail"];
                  $related_heading = $relted_post_row["p_heading"];
                  $related_id = $relted_post_row["p_id"];
                  ?>
                <li>
                  <div class="media"> <a class="media-left" href="read-post.php?id=<?php echo $related_id; ?>"> <img src="admin/upload/thumbnail/<?php echo $thumb; ?>" > </a>
                    <div class="media-body"> <a class="catg_title" href="read-post.php?id=<?php echo $related_id; ?>"> <?php echo $related_heading; ?> </a> </div>
                  </div>
                </li>
                  <?php
                }
              }
            ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }
?>
        
            </div>


                

                <div style="width: 30%;" id = "right">
                <form action="" method="POST">
                <h3>Từ khoá: </h3>
            <input title="text" name="txtSearch" placeholder="Nhập từ khoá..." /><input style="margin-left: 10px; width: 65px; color:white; background: #00549a;" type="submit" name="search" value="Tìm kiếm">
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
                
                // $select_cat_news = "SELECT * FROM post_description ORDER BY p_time DESC ";
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

                <!-- inner card row -->

                <ul style="margin: 0px; padding: 0px; width: 100%; display: flex;">
                          <li style="clear: left; margin-bottom: 20px">
                           <a href="read-post.php" > <?php echo ucwords($post_heading); ?>  </a>

                          </li>
                      </ul>

                  <?php
                  }
                }
                        
                ?>
                </div>
    </div>
    <div id="footer">Footer</div>
</body>
</html>
