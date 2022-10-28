
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
            <div class="img">
                <img src="./img/Screen_Shot_2022-10-16_at_22.31.52-removebg-preview.png" alt="">

            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="./Login.php">Login</a></li>
                 
                        <li class="dangXuat"><a href="Logout.php">Đăng xuất</a></li>
                        
                </ul>
                    <!-- <div class="fa-solid">
                    <a href="logout.php"></a>
                

                </div> -->
            </div>
           <!-- <a href="logout.php" style="padding-right: 30px"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất </a> -->
  
           
           
           
            
        </div>
        
        <div class="container">
            <div class="box1">
                <img src="img/dienthoai-removebg-preview.png" alt="">
                <span>0976.198.642</span>
                <img src="img/mail-removebg-preview.png" alt="">
                <span>www.vncert.gov.vn</span>
                
                
            </div>
            <div class="box2">
                <img src="img/ws-removebg-preview.png" alt="">
                <a href="https://vncert.gov.vn/?fbclid=IwAR1tLqy2XYo8axrE1zdO2nz_7zZSqQZKNYJI46qOmW3gdvT59YoE_s5YtL8">Website</a>

                <img src="img/fb-removebg-preview.png" alt="">
                <a href="https://www.facebook.com/Vncertcc/">Facebook</a>

                <!-- <button>Search</button> -->
                
                    <input type="text" class="searchTerm" placeholder="Bạn muốn tìm gì?">
                    <button type="submit" class="searchButton">
                        Submit
                    </button>

                
            </div>
        </div>
       
        <div class="img2">
                <img src="./img/bien.jpeg" alt="" width="100%">

            </div>
        
    </header>

    </div>


</body>
</html>