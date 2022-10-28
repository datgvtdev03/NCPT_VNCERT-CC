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
            <li><a href="#" title="Liên hệ">Liên hệ</a></li>
            <li><a href="core/login.php" title="Đăng nhập">Đăng nhập</a></li>
        </ul>
    </div>
    <div id="banner">
        <img class="banner" src="img/banner1.png" alt="">
        <img class="banner" src="img/banner2.webp" alt="">

    </div>

    <?php
            // include "connect.php";
            $result = $conn -> query("SELECT * FROM post_description");
    ?>
    <div id="main">
        <div id="left">
            <ul>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <li>
                <img alt="" src="core/upload/thumbnail/<?php echo $news_thumb; ?>">
                    <h3><?php echo $row['p_heading'] ?></h3>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <div id="right">
            <h3>Từ khoá: </h3>
            <input title="text" placeholder="Nhập từ khoá..." /><button>Tìm kiếm</button>
            <ul>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <li>
                    <a><?php echo $row['p_heading'] ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div id="footer">Footer</div>
</body>
</html>