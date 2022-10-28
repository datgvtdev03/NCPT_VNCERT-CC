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
                <label for="fullName">User Name</label>
                <input type="text" name="fullName" id="fullName" value="" placeholder="Hãy nhập tên của bạn">
                <br>
                <label for="avatar">Choose Avatar</label>
                <input type="file" name="avatar" id="avatar" placeholder="Chọn ảnh đại diện">
                <br>
                <label for="phoneNumber">Phone number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" value="" placeholder="Hãy nhập sđt của bạn">
                <br>
                <label for="email">Gmail</label>
                <input type="email" name="email" id="email" value="" placeholder="Hãy nhập gmail của bạn">
                <br>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="" placeholder="Hãy nhập địa chỉ của bạn">
                <br>
                <label for="passWord">PassWord</label>
                <input type="password" name="passWord" id="passWord" value="" placeholder="Nhập mật khẩu của bạn">
                <br>
                <label for="rpPassWord">PassWord</label>
                <input type="password" name="rpPassWord" id="rpPassWord" value=""
                    placeholder="Nhập lại mật khẩu của bạn">
                <br>
                <button>Đăng ký</button>
                <br>
                <p>Already Registered? <a href="./login.php">Login here</a></p>
            </form>
        </div>
        <div class="logo">
            <img src="../src/images/logo.png" alt="">
        </div>
    </div>
</body>

</html>