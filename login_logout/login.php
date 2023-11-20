<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "db_blog");

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: ../page/dashboad1.php");
            exit();
        } else {
            $error_message = "Sai mật khẩu!";
        }
    } else {
        $error_message = "Người dùng không tồn tại!";
    }

    $stmt->close();
    $conn->close();
    

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
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
        input[type="password"] {
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

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Đăng nhập</h1>
    <script >
        alert('Chào mừng bạn đến với trang đăng nhập');
        setTimeout(function() {},3000);
    </script>
    <form method="post" action="login.php">
        <?php
        if (isset($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        <label>
            <p>Tên đăng nhập:</p>
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
        </label>
        <label>
            <p>Mật khẩu:</p>
            <input type="password" name="password" placeholder="Mật khẩu" required>
        </label>
        <input type="submit" value="Đăng nhập">
    </form>
   

</body>
</html>
