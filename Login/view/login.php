<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/signIn_signUp.css">
    <title>Login</title>
</head>

<body>
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
</body>

</html>