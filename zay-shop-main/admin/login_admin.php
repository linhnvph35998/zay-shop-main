<?php
session_start();
include "../model/pdo.php";
include "../model/login.php";

if (isset($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $checkuser = check_user($user, $pass);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        extract($_SESSION['user']);
        if ($idvaitro != 2) {
            header('location:index.php');
        } else {
            $thongbao1 = "UserName or password not provided";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="text-center mb-4">
            <h1 class="h3">Admin Login</h1>
        </div>
        <form action="login_admin.php" method="POST">
            <div class="form-group">
                <label for="user">User Name</label>
                <input type="text" class="form-control" id="user" placeholder="User name" name="user" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="dangnhap">Đăng Nhập</button>
            <div class="mt-3 text-danger text-center">
                <?php
                if (isset($thongbao1) && $thongbao1 != "") {
                    echo $thongbao1;
                }
                ?>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
