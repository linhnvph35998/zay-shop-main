<?php
if(isset($_SESSION["user"])){
    header("Location: index.php");
} 

ob_start();
?>
<div class="wrapper">
    <div class="login">
        <h1>Đăng nhập</h1>
        <form action="" method="post" class="form-login">
            <div class="form-input">
                <p>Tài khoản</p>
                <input type="text" name="username" />
            </div>
            <div class="form-input">
                <p>Mật khẩu</p>
                <input type="password" name="password" />
                <?php
            ob_end_flush(); 
            ?>
            </div>
            <input type="checkbox" name="checkbox" class="checkbox" /> Hiện mật khẩu
            <div class="forget-password">
                <a href="">Quên mật khẩu ?</a>
            </div>
            <?php 
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $checkuser = dangnhap($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                }
                if(!$checkuser){
                    echo "Tài khoản hoặc mật khẩu không chính xác";
                }
            }
            ?>
            <div class="login-btn">
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </div>
            <div class="forget-password">
                <a href="index.php?act=dangky">Đăng ký tài khoản</a>
            </div>
        </form>
    </div>
</div>