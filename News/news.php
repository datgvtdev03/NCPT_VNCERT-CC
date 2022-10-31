<?php
    require "connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleNews.css">
    <title>News</title>
</head>

<body>
    <div id="menu_top">
        <ul>
            <li><a href="#" title="Trang chủ">Trang chủ</a></li>
            <li><a href="#" title="Đội ngũ">Đội ngũ</a></li>
            <li><a href="#" title="Tin tức">Tin tức</a></li>
            <li>
                <a href="#" title="Trang chủ"><img class="logo" src="img/logoVncert.png" alt=""></a>
            </li>

            <li><a href="#" title="Tuyển dụng">Tuyển dụng</a></li>
            <li><a href="../Contact/contactForm.html" title="Liên hệ">Liên hệ</a></li>
            <li><a href="core/login.php" title="Đăng nhập">Đăng nhập</a></li>
        </ul>
    </div>
    <div id="banner">
        <img class="banner" src="img/banner1.png" alt="">
        <img class="banner" src="img/banner2.webp" alt="">

    </div>

   
    <div id="main">

<div>
<ul style="margin: 0px;
    padding: 0px; width: 70%; display: flex;">
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

                     
                          <li style="list-style: none;
    clear: left;
    border-bottom: 2px solid #ccc;
    
    margin-bottom: 20px">
                          <a href="read-post.php?id=<?php echo $post_id; ?>" > <img  style="width: 200px;
    height: 200px;
    float: left;
    margin-right: 15px " src="core/upload/thumbnail/<?php echo $post_thumb; ?>"> </a>
                           <a href="read-post.php?id=<?php echo $post_id; ?>" > <h3> <?php echo ucwords($post_heading); ?> </h3> </a>
                            <a href="read-post.php?id=<?php echo $post_id ?>" ><?php echo ucwords($post_desc); ?> </a>

                          </li>
                      
                        
               </div>

                  <?php
                  }
                }
                        
                ?>
                </ul>
                </div>

                <div style="width: 30%;
    float: left;
    min-height: 400px;">
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

                <ul style="margin: 0px;
    padding: 0px; width: 30%; display: flex;">
                          <li style="list-style: none;
    clear: left;
    border-bottom: 2px solid #ccc;
    
    margin-bottom: 20px">
                          <a href="read-post.php?id=<?php echo $post_id; ?>" > <img  style="width: 200px;
    height: 200px;
    float: left;
    margin-right: 15px " src="core/upload/thumbnail/<?php echo $post_thumb; ?>"> </a>
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
    <div id="footer">Footer</div>
</body>
</html>
