<form action="get.php" method = "get">
    <label for="get">Tên sách</label>
    <input type="text" name ="sach">
    <label for="get">Tên tác giả</label>
    <input type="text" name = "name">
    <label for="get">Nhà xuất bản</label>
    <input type="text" name = "nhaxuatban">
    <label for="get">Năm xuất bản</label>
    <input type="text" name = "namxuatban">

    <button type = "submit" name = "dangnhap">Gửi</button>

    
</form>

<?php 
    if(isset($_GET['dangnhap'])){
        $tenSach = $_GET['sach'];
        $tenTacGia = $_GET['name'];
        $nhaXuatBan = $_GET['nhaxuatban'];
        $namXuatBan = $_GET['namxuatban'];
        echo "<h2>Thông tin sách đã nhập:</h2>";
        echo "Tên sách: " . htmlspecialchars($tenSach) . "<br>";
        echo "Tên tác giả: " . htmlspecialchars($tenTacGia) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($nhaXuatBan) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($namXuatBan) . "<br>";

    }
   
?>