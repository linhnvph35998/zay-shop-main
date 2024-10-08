<?php
if(is_array($giohang)){
    extract($giohang);
}
?>
<div class="content-information">
    <div class="login">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div class="d-flex">
        <div class="content-main-img">
            <img src="../Img/<?=$img?>" alt="" width="400px" style="object-fit: cover;">
        </div>
        <div class="content-main-text" style="margin-left: 20px;">
            <p class="fs-5">Mã đơn: <?=$id?></p>
            <p class="fs-5">Mã sản phẩm: <?=$idpro?></p>
            <p class="fs-5">Tên sản phẩm: <?=$name?></p>
            <p class="fs-5">Phương thức thanh toán:
                <?=$phuongthucthanhtoan == 0 ? "Chuyển khoản" : "Thanh toán khi giao hàng"?></p>
            <p class="fs-5">Địa chỉ giao hàng: <?=$diachi?></p>
            <p class="fs-5">Thời gian đặt hàng: <?=$thoigiandathang?></p>
            <p class="fs-5">Ngày giao hàng: 16-11-2023</p>
            <p class="fs-5">Số lượng: <?=$soluong?></p>
            <p class="fs-5">Trạng thái:
                <?=$trangthai == 0 ? "<p style='color: orange;'>Đang kiểm duyệt</p>" : ($trangthai == 2 ? "<p style='color: green;'>Thành công</p>" : "<p style='color: red;'>Hủy bỏ</p>")?>
            </p>
            <p class="fs-5">Ghi chú: <?=$ghichu?></p>
        </div>
    </div>
</div>