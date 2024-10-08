<?php
 if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="wrapper">
    <div class="login">
        <h1>Thay đổi thông tin</h1>
        <form action="" method="post" class="form-login">
            <input type="hidden" value="<?=$id?>" name="id" />
            <div class="form-input">
                <p class="form-input-name">Email</p>
                <input class="input-infor" type="text" value="<?=$email?>" name="email" />
            </div>
            <div class="form-input">
                <p class="form-input-name">Địa chỉ </p>
                <input class="input-infor" type="text" value="<?=$diachi?>" name="diachi" />
            </div>
            <div class="form-input">
                <p class="form-input-name">Số điện thoại</p>
                <input class="input-infor" type="text" value="<?=$sdt?>" name="sdt" />
            </div>
            <div class="login-btn">
                <input class="input-infor" type="submit" name="suathongtin" value="Thay đổi thông tin">
            </div>
            <div class="login-btn">
                <a href="index.php?act=doimk" class="change-password">
                    <p>Thay đổi mật khẩu</p>
                </a>
            </div>
        </form>
    </div>
</div>