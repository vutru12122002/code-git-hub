<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST["email"];

    $conn = new mysqli("localhost", "root", "", "db_blog");

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $hashedPassword, $email);
    $stmt->execute();

    $stmt->close();
    $conn->close();
    header("Location: login.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../image/am-thuc.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: white;
        }

        form {
            background-color: #fff;
            padding: 70px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: grid;
            grid-gap: 10px;
        }

        label {
            display: flex;
            align-items: center;
        }

        form p {
            display: inline-block;
            width: 200px;
            margin: 0;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 15px;
            margin: 5px 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Đăng ký</h1>
    <form method="post" action="register.php">
        <label>
            <p>Tên đăng nhập:</p>
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
        </label>
        <label>
            <p>Mật khẩu:</p>
            <input type="password" name="password" placeholder="Mật khẩu" required>
        </label>
        <label>
            <p>Email:</p>
            <input type="email" name="email" placeholder="Email" required>
        </label>
        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>



