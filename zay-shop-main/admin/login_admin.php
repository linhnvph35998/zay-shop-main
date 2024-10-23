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
        if ($idvaitro  != 2) {
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
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../thu_vien/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../thu_vien/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../thu_vien/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box ">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Admin</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login_admin.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="User name" name="user">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div>
                            <button type="submit" class="btn btn-primary" name="dangnhap">Đăng Nhập</button>

                        </div>
                        <div style="padding-top: 10px; padding-left: 40px;">

                            <?php
                            if (isset($thongbao1) && $thongbao1 != "") {
                                echo $thongbao1;
                            }
                            ?>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="../../thu_vien/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../thu_vien/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../thu_vien/dist/js/adminlte.min.js"></script>
</body>

</html>