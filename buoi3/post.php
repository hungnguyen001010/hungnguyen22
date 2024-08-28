<form action="" method="post">
    Tên sách: <input type="text" name="book_name">
    Tên tác giả: <input type="text" name="author_name">
    Nhà xuất bản: <input type="text" name="publisher">
    Năm xuất bản: <input type="text" name="publish_year">
    <button type="submit">Gửi</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookName = $_POST["book_name"];
    $authorName = $_POST["author_name"];
    $publisher = $_POST["publisher"];
    $publishYear = $_POST["publish_year"];

    echo "Tên sách: $bookName<br>";
    echo "Tác giả: $authorName<br>";
    echo "Nhà xuất bản: $publisher<br>";
    echo "Năm xuất bản: $publishYear<br>";
}
?>
