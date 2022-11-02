<?php 
    include_once '../../model/connect.php';
    include_once "../../model/about-us.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/index.css">
    <link rel="stylesheet" href="../../src/css/about-us.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">	
    <link rel="stylesheet" href="../../src/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/59b2ca7e7f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../src/css/slick.css">
    <title>About-us</title>
</head>

<body>
    <?php include 'header.php';?>
    <main class="container">
        <section class="box-cate">
            <div class="box-content">
                <div class="text">
                    <h1 class="title">VNCERT/CC</h1>
                    <h5 class="sub-title">Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam</h5>
                    <p class="content">
                        Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam là đơn vị sự nghiệp công lập trực thuộc Cục
                        An
                        toàn
                        thông tin – Bộ Thông tin và Truyền thông (viết tắt là VNCERT/CC), thực hiện chức năng là đầu mối
                        kỹ
                        thuật điều phối ứng cứu sự cố an toàn không gian mạng và kiểm định an toàn thông tin trên phạm
                        vi
                        toàn
                        quốc; quản lý, vận hành các hệ thống số liệu, cơ sở dữ liệu, hệ thống kỹ thuật về điều phối ứng
                        cứu
                        sự
                        cố, kiểm định và phòng, chống thư điện tử rác, tin nhắn rác phục vụ công tác quản lý nhà nước và
                        thực
                        thi pháp luật về an toàn thông tin; là đầu mối hợp tác quốc tế với các cơ quan, tổ chức có chức
                        năng
                        ứng
                        cứu sự cố và kiểm định an toàn thông tin.

                        Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam có tư cách pháp nhân, có con dấu và tài
                        khoản
                        riêng
                        để giao dịch theo quy định của pháp luật; có trụ sở chính đặt tại thành phố Hà Nội và các chi
                        nhánh
                        tại
                        thành phố Hồ Chí Minh và thành phố Đà Nẵng.
                    </p>
                </div>

                <div class="picture">
                    <img src="http://admin.vncert.vn/wp-content/uploads/2021/11/0-04-06-4804b8ad7b37dc58b6f89e3bf86d4af23e2768d467e46744297fa4106fb07a66_91a11061b4ea7730.jpg"
                        alt="about-us">
                </div>
            </div>
        </section>
        
        <section class="box-cate">
            <h1 class="title">THÀNH VIÊN ĐỘC QUYỀN</h1>
            <h5 class="sub-title">Thành viên/ Đội ngũ trong nhóm</h5>
            <div class="view-members">
                <!-- Get Api and render result here -->
                <!-- Có sử dụng thư viện slick để tạo slide nên thoải mái render nhiều item -->
                <?php foreach($members as $value): ?>
                <div class="member">
                    <a href="#"><img src="../../src/images/<?php echo $value["avatar"]?>" alt="member-avatar"><a />
                        <div class="user-identity">
                            <a href="#">
                                <h1><?php echo $value["userName"]?></h1>
                                <span><?php echo $value["job"]?></span>
                            </a>
                        </div>
                        <div class="navigation">
                            <ul>
                                <li><a href="<?php echo $value["facebook"]?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $value["instagram"]?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo $value["youtube"]?>"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                </div>
                <?php endforeach ?>
                <!-- end here -->
            </div>
        </section>
        <section class="box-cate">
            <h1 class="title">Nhiệm vụ và quyền hạn</h1>
            <h4 class="sub-title">
                Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam thực hiện nhiệm vụ, quyền hạn quy định tại Quyết
                định số 1671/QĐ-BTTTT ngày 01 tháng 11 năm 2019 của Bộ Thông tin và Truyền thông quy định chức năng,
                nhiệm vụ, quyền hạn và cơ cấu tổ chức của đơn vị, cụ thể sau đây:
            </h4>
            <div class="text">
                <div class="list">
                    <ul>
                        <?php foreach($missions as $value): ?>
                        <li><?php echo $value["mission"] ?></li>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
    <script src="../../src/js/script.js"></script>
    <script src="../../src/js/slick.js"></script>
</body>

</html>