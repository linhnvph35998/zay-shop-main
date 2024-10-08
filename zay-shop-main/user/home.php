<?php
 if(isset($_SESSION["user"])){
    extract($_SESSION["user"]);
}
?>
<div class="content">
    <div class="user-information">
        <h1>Tài khoản của bạn</h1>
    </div>
    <div class="link">
        <a class="link-information" href="index.php?act=thongtin">
            <span class="link-item">
                <i class="fa-solid fa-user"></i>
                <p>Thông tin cá nhân</p>
            </span>
        </a>
        <a class="link-information" href="index.php?act=lichsudathang">
            <span class="link-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>Lịch sửa mua hàng</p>
            </span>
        </a>
    </div>
    <div class="user-information">
        <form class="my-2" action="" method="post" style="text-align: center;"><input class="btn btn-dark" type="submit"
                name="dangxuat" value="Đăng xuất">
        </form>
    </div>
</div>