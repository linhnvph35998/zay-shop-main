<?php
 if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="wrapper">
    <div class="login">
        <h1>Đổi mật khẩu</h1>
        <form action="" method="post" class="form-login">
            <input type="hidden" value="<?=$id?>" name="id" />
            <div class="form-input">
                <p class="form-input-name">Nhập mật khẩu cũ</p>
                <div class="input-tag">
                    <input class="input-showpass" type="password" value="<?=$password?>" name="old_password" />
                    <p class="toggle-showpass">Hiện mật khẩu</p>
                </div>
            </div>
            <!-- <div class="form-input">
                <p class="form-input-name">Nhập mật khẩu mới</p>
                <div class="input-tag">
                    <input class="input-showpass" type="password" value="" name="new_password" />
                    <p class="toggle-showpass">Hiện mật khẩu</p>
                </div>
            </div> -->
            <div class="form-input">
                <p class="form-input-name">Nhập lại khẩu mới</p>
                <div class="input-tag">
                    <input class="input-showpass" type="password" value="" name="confirm_password" />
                    <p class="toggle-showpass">Hiện mật khẩu</p>
                </div>
            </div>
            <?php
            if(isset($_POST['doimk']) && $_POST['doimk'] && is_array($laymatkhau)){
                extract($laymatkhau);
                $id = $_POST['id'];
                // $oldpassword = $_POST['old_password'];
                // $newpassword = $_POST['new_password'];
                $confirmpassword = $_POST['confirm_password'];
                // if ($password !== $oldpassword) {
                //     echo "Mật khẩu cũ không chính xác";
                //     return false;
                // }
                // else if ($newpassword !== $confirmpassword) {
                //     echo "Mật khẩu mới nhập lại không khớp";
                //     return false;
                // } else {
                //     echo "Đổi mật khẩu thành công";
                // }
                doimatkhau($id,$confirmpassword);
            }
             ?>
            <div class="login-btn">
                <input type="submit" name="doimk" value="Thay đổi mật khẩu">
            </div>
            <a href="index.php">Quay lại trang thông tin</a>
        </form>
    </div>
</div>