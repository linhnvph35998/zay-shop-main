<main class="wrapper-bill">
    <h1 class="box_title" style="text-align: center;">Hoá đơn</h1>
    <div class="bills">
        <div class="bill-information">
            <h3 class="box_title">Thông tin đơn hàng</h3>
            <div class="box-bill" style="min-height: 20px;">
                <p>Mã đơn hàng: DAM-<?= $id ?></p>
                <p>Ngày đặt hàng:<?= $thoigiandathang ?> </p>
                <p>Phương thức thanh toán:
                    <?= $donhang['phuongthucthanhtoan'] === 0 ? "Chuyển khoản" : "Thanh toán khi nhận hàng" ?></p>
                <p>Ghi chú: <?= $donhang['ghichu'] ?></p>
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

            </table>

        </div>
    </div>
</main>