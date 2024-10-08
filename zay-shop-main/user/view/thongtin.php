<?php
 if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="content-information">
    <div class="information">
        <h1>Thông tin tài khoản</h1>
    </div>
    <div class="content-main">
        <div class="information-name">
            <p>Tên tài khoản:</p>
            <span><?=$username?></span>
        </div>
        <div class="information-name">
            <p>Email:</p>
            <span> <?=$email?></span>
        </div>
        <div class="information-name">
            <p>Địa chỉ: </p>
            <span><?=$diachi?></span>
        </div>
        <div class="information-name">
            <p>Số điện thoại: </p>
            <span><?=$sdt?></span>
        </div>
        <a class="information-change" href="index.php?act=thaydoithongtin">Thay đổi thông tin</a>
    </div>
</div>