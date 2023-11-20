<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Lấy thông tin người dùng từ cơ sở dữ liệu (nếu cần)
$user_id = $_SESSION["user_id"];
$conn = new mysqli("localhost", "root", "", "mydb");
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chào mừng</title>
</head>
<body>
    <h2>Chào mừng, <?php echo $user["username"]; ?>!</h2>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
