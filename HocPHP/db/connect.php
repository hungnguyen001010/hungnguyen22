<?php
$servername = "localhost";
$username = "root";
$password = ""; // Thay bằng mật khẩu thực tế của bạn
$dbname = "unitop-store-dat";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công";
?>
