<?php
if(is_array($donhang)){
    extract($donhang);
}
?>
<link rel="stylesheet" href="../CSS/chitietdonhang.css">

<div class="wrapper">
    <div class="container-h1">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div class="container-donhang">
        <div style="margin-left: 0; padding: 0px 10px;" class="list-product-detail">
            <p>Mã đơn: <?=$id?></p>
            <p>Tên khách hàng: <?=$khachhang?></p>
            <p>Email: <?=$email?></p>
            <p>SĐT: <?=$sdt?></p>
            <p>Phương thức thanh toán: <?=$phuongthucthanhtoan === 0 ? "Chuyển khoản" : "Thanh toán khi giao hàng"?></p>
            <p>Địa chỉ giao hàng: <?=$diachi?></p>
            <p>Thời gian đặt hàng: <?=$thoigiandathang?></p>
            <p>Trạng thái:
                <?php if($trangthai == 0){
                    echo "<span style='color: orange;'>Đang kiểm duyệt</span>";
                } else if($trangthai == 1) {
                    echo "<span style='color: red;'>Huỷ bỏ</span>";
                } else {
                    echo "<span style='color: green;'>Thành công</span>";
                }?></p>
            </p>
            <p>Ghi chú: <?=$ghichu?></p>
        </div>
    </div>
    <div class="m-2">
        <h2>Sản phẩm khách hàng đặt</h2>
        <table style="font-size: 20px;">
            <tr>
                <td>Tên sản phẩm</td>
                <td>Ảnh</td>
                <td>Giá tiền</td>
                <td>Số lượng</td>
                <td>Thành tiền</td>
            </tr>
            <?php
                foreach ($giohang as $value) {
                    extract($value);
                    echo "<tr>
                    <td>$name</td>
                    <td><img src='../Img/$img' width='200px'/></td>
                    <td>".$giatien."đ</td>
                    <td>$soluong</td>
                    <td>".($giatien * $soluong)."đ</td>
                    </tr>";
                } 
                ?>
        </table>
        <h2>Tổng giá sản phẩm: <?php  
            $tong = 0;
            foreach ($giohang as $value) {
                extract($value);
                $tong += $giatien * $soluong;
            }
            echo $tong;
            ?>đ</h2>
    </div>
    <div class="function-back">
        <a href="index.php?act=donhang">Quay lại trang đơn hàng</a>
    </div>
</div>