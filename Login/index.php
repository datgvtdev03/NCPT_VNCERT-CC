
<?php
    session_start();
    if(!isset($_SESSION["User"])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="tong">
    <header>
    <div class="container2">
      
            <div class="menu">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Về VNCERT/CC</a></li>
                    <li><a href="#">Kiểm định</a></li>
                    <li><a href="#">Chống thư rác</a></li>
                    <li><a href="#">Bảo vệ trẻ em</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="#">Chống thư rác</a></li>
                    <li><a href="./Login.php">Login</a></li>
                 
                        <li class="dangXuat"><a href="Logout.php">Đăng xuất</a></li>
                        
                </ul>
                    <!-- <div class="fa-solid">
                    <a href="logout.php"></a>
                

                </div> -->
            </div>
           <!-- <a href="logout.php" style="padding-right: 30px"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất </a> -->
  
           
           
           
            
        </div>
        
        
       
        <div class="img2">
                <img src="./img/logoVN.png" alt="" width="100%">

            </div>
    </header>
    <div class="main">
            <div class="sidebar">
                <img src="img/vnx.png" alt="" width="88%" height="40%">
                <div>
                    <h2>Giới thiệu về VNCERT</h2>
                    <p> Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam là đơn vị sự nghiệp công lập trực thuộc Cục An toàn thông tin – Bộ Thông tin và Truyền thông (viết tắt là VNCERT/CC), thực hiện chức năng là đầu mối kỹ thuật điều phối ứng cứu sự cố an toàn không gian mạng và kiểm định an toàn thông tin trên phạm vi toàn quốc; quản lý, vận hành các hệ thống số liệu,cơ sở dữ liệu, hệ thống kỹ thuật về điều phối ứng cứu sự cố ...</p>

                </div>
                
            </div>
            <div class="sidebar2">
                <img src="img/vn.png" alt="" width="88%" height="40%">
                <div>
                    <h2>Vị trí và chức năng</h2>
                    <p>  Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam có tư cách pháp nhân, có con dấu và tài khoản riêng để giao dịch theo quy định của pháp luật; có trụ sở chính đặt tại thành phố Hà Nội và các chi nhánh tại thành phố Hồ Chí Minh và thành phố Đà Nẵng.</p>

                </div>
                
            </div>
            <div class="sidebar3">
                <img src="img/cert.png" alt="" width="88%" height="40%">
                <h2>Nhiệm vụ và quyền hạn</h2>
                <p>Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam thực hiện nhiệm vụ, quyền hạn quy định tại Quyết định số 1671/QĐ-BTTTT ngày 01 tháng 11 năm 2019 của Bộ Thông tin và Truyền thông. <br>

                 Xây dựng, trình Cục trưởng Cục An toàn thông tin phê duyệt kế hoạch hoạt động dài hạn, trung hạn, hàng năm của Trung tâm và tổ chức thực hiện sau khi được phê duyệt.
                    
                   </p>
            </div>
        </div>

    </div>
</body>
</html>



