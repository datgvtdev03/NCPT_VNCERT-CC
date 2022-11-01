<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/signIn_signUp.css">

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
</head>

<body>
    <!--Navbar-->
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
                    <a class="nav-link" href="">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>

<div class="content">
    <div class="wrapper">
        <div class="form-login">
            <h1>Đăng nhập</h1>
            <form action="#" method="POST">
                <!-- ../controller/login-checked -->
                <label for="email">Gmail</label>
                <input type="email" name="email" id="email" value="" placeholder="Hãy nhập gmail của bạn">
                <br>
                <label for="passWord">PassWord</label>
                <input type="password" name="passWord" id="passWord" value="" placeholder="Nhập mật khẩu của bạn"> <br>
                <button>Đăng nhập</button>
                <br>
                <p>Not Registered? <a href="./signup.php">Signup here</a></p>
                <span align="right"><a href="#">Forgot Pass?</a></span>
            </form>
        </div>
        <div class="logo">
            <img src="../src/images/logo.png" alt="">
        </div>
    </div>
</div>

    <!--Footer-->
    <footer class="container-fluid py-5">
        <div class="container">
           <div class="row">
                    <div class="col-md-3 ">
                       <div class="logo-part">
                          <img src="images/logo.png" class="w-75 logo-footer" style="margin: auto; display: block; padding-top: 18%;">
                          <h4 style="margin-top: 7%; color: #DFDFDF;">Trung tâm Ứng cứu khẩn cấp không gian mạng Việt Nam</h4>
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