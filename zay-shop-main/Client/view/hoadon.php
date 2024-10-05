<?php
if(isset($donhang) && is_array($donhang)){
    extract($donhang);
}   
if(isset($_SESSION['user'])){
    $name = $_SESSION['user']['username'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $name = "";
    $diachi = "";
    $email = "";
    $sdt = "";
}
?>
<main class="wrapper-bill">
    <h1 class="box_title" style="text-align: center;">Hoá đơn</h1>
    <div class="bills">
        <div class="bill-information">
            <h3 class="box_title">Thông tin đơn hàng</h3>
            <div class="box-bill" style="min-height: 20px;">
                <p>Mã đơn hàng: DAM-<?=$id?></p>
                <p>Ngày đặt hàng:<?=$thoigiandathang?> </p>
                <p>Phương thức thanh toán:
                    <?= $donhang['phuongthucthanhtoan'] === 0 ? "Chuyển khoản" : "Thanh toán khi nhận hàng" ?></p>
                <p>Ghi chú: <?=$donhang['ghichu']?></p>
            </div>
            <h3 class="box_title">Thông tin đặt hàng</h3>
            <div class="box-bill" style="min-height: 20px;">
                <p>Người dùng: <?= $name ?></p>
                <p>Địa chỉ: <?= $diachi ?> </p>
                <p>Email: <?= $email ?></p>
                <p>Số điện thoại: <?= $sdt ?></p>
            </div>

        </div>
        <div class="bill-table">
            <h3 class="box_title">Chi tiết sản phẩm đặt hàng</h3>
            <table style="background-color: #fff;">
                <tr>
                    <td width="200px">Ảnh</td>
                    <td width="250px">Tên sản phẩm</td>
                    <td width="150px">Đơn giá</td>
                    <td width="100px">Số lượng</td>
                    <td width="100px">Thành tiền</td>
                    <td width="150px">Trạng thái</td>
                </tr>
                <?php
                    foreach ($giohang as $value) {
                        extract($value);
                        echo '<tr>
                        <td style="padding: 10px"><img src="../Img/'.$img.'" width="120px"/></td>
                        <td style="padding: 10px">'.$name.'</td>
                        <td style="padding: 10px">'.$giatien.'đ</td>
                        <td style="padding: 10px">'.$soluong.' </td>
                        <td style="padding: 10px">'.($giatien * $soluong).'đ</td>
                        <td style="padding: 10px">'.($trangthai === 0 ? '<p style="color: orange">Đang kiểm duyệt</p>' : '<p style="color: red;">Hủy bỏ</p>').'</td>
                        </tr>';
                    } 
                    ?>
            </table>
            <?php 
            $tong = 0;
            foreach ($giohang as $value) {
                extract($value);
                $tong += $giatien * $soluong;
            }
            echo "<h3 style='margin: 15px 0px'>Giá sản phẩm: ".$tong."đ</h3>";
            ?>
        </div>
    </div>
</main>