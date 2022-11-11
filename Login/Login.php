<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "vncert@2022", "DemoWebsite") or die ('Khong ket noi dc');
?>
<?php

    $a = rand(10,99);
    $b = rand(10,99);
    $c = $a + $b;
    if(isset($_POST['submit'])){
        $username = $_POST['User'];
        $pass = $_POST['Pass'];
        $captcha = $_POST['captcha'];
    $select = mysqli_query($conn, "SELECT * FROM loginform WHERE User = '$username' AND Pass = '$pass' ");
    $row = mysqli_fetch_array($select);

    if(is_array($row) && $captcha == $_POST['ans'] ){
        $_SESSION['User'] = $row ['User'];
        $_SESSION['Pass'] = $row ['Pass'];
        $_SESSION['tf'] = $row ['tf'];
        $_SESSION['fullname'] = $row ['fullname'];   
        header("location:index.php");
    }    

    else
        echo '<script type = "text/javascript">';
        echo 'alert("sai thông tin đăng nhập hoặc capcha");';
        echo 'window.location.href = "Login.php "';
        echo '</script>';
    }  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Document</title>

</head>

<body>
    <div class="contar">
        <form action="Login.php" method="POST">
        <center>
                <h2>Please login in</h2>
                <!-- <form action="./connect.php" method="post"></form> -->
                <div class="container">
                    <input type="text" name="User" value="" placeholder="Username" /><br>
                    <br>
                    <input type="password" name="Pass" value="" placeholder="Password" /><br>
                    <br>
                    <div class="container">
                    <?php echo $a ?> + <?php echo $b ?> = ...<br>
                    </div>
                            
                    <input type="text" name="captcha" value="" placeholder="Tổng" />
                    <input type="hidden" name="ans" value="<?php echo $c ?>" /><br>
                    <br>
                    <input class="submit" type="submit" name="submit" value="SUBMIT">
                </div>
                <img src="/img/anh.jpg" alt="" width="100%">

            </center>

        </form>

    </div>

</body>

</html>