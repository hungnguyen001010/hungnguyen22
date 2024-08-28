<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai2.css">
    <title>Document</title>
</head>
<body>
    <h1>ĐĂNG KÍ TÀI KHOẢN</h1>
    <form action="reg.php" method="post"> 
        <p>Họ và tên</p>
        <input class="hovaten" type="text" name="fullname"> 
        <p>Tên đăng nhập</p>
        <input class = "hovaten" type="text" name = "username">
        <p>Mật khẩu</p>
        <input class="hovaten" type="password" name = ""password>
        <p>Email</p>
        <input class="hovaten" type="email" name = "email">
        <p>Giới tính</p>
        <div>
            <div>
                <input type="checkbox" value="male" name = "gender">
                <label for="male">Nam</label>
            </div>
            <div>
                <input type="checkbox" value="female" name = "gender">
                <label for="male">Nữ</label>
            </div>
        </div>
        <p>Địa chỉ</p>
        <input class="hovaten" type="text" name = "address">
        <div>
            <input type="submit" value="Đăng ký" name = "btn-reg">
        </div>
    </form>
</body>
</html>