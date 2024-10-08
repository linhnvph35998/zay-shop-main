<div class="content-information">
    <div class="information">
        <h1>Lịch sử đặt hàng</h1>
    </div>
</div>
<div class="content">

    <div class="table">
        <table class="table-bordered" border="1">
            <tr>
                <td style="padding: 10px; width: 50px;">Mã đơn</td>
                <td style="padding: 10px; width: 250px;">Sản phẩm khách hàng đặt</td>
                <td style="padding: 10px; width: 250px;">Địa chỉ giao hàng</td>
                <td style="padding: 10px; width: 150px;">Thời gian đặt hàng</td>
                <td style="padding: 10px; width: 150px;">Phương thức thanh toán</td>
                <td style="padding: 10px; width: 200px;">Trạng thái</td>
                <td style="padding: 10px; width: 200px;">Ghi chú</td>
                <td style="padding: 10px; width: 200px;">Chức năng</td>
            </tr>
            <?php 
            foreach($donhang as $value) { ?>
            <tr>
                <td style="padding: 10px;"><?php echo $value['id'] ?></td>
                <td style="padding: 10px;"><?php foreach ($giohang as $gh) {
                    if($value['id'] === $gh['iddonhang']){
                        echo $gh['name'],",";
                    };
                } ?></td>
                <td style="padding: 10px;"><?php echo $value['diachi'] ?></td>
                <td style="padding: 10px;"><?php echo $value['thoigiandathang'] ?></td>
                <td style="padding: 10px;">
                    <?php echo $value['phuongthucthanhtoan'] === 0 ? "Chuyển khoản" : "Thanh toán khi giao hàng" ?></td>
                <td style="padding: 10px;">
                    <?php echo $value['trangthai'] == 0 ? "<p style='color: orange;'>Đang kiểm duyệt</p>" : "" ?>
                    <?php echo $value['trangthai'] == 1 ? "<p style='color: red;'>Huỷ bỏ</p>" : "" ?>
                    <?php echo $value['trangthai'] == 2 ? "<p style='color: green;'>Thành công</p>" : "" ?>
                </td>
                <td style="padding: 10px;"><?php echo $value['ghichu'] ?></td>
                <td style="padding: 10px;">
                    <?php echo $value['trangthai'] == 0 ? "<a onclick='return huyBo()' class='btn btn-danger my-1' style='width: 100%; font-size: 14px'
                        href='index.php?act=huydonhang&id=".($value['id'])."'>Hủy đơn hàng</a>" : "" ?>
                    <a class="btn btn-warning my-1" style="width: 100%; font-size: 14px"
                        href="index.php?act=chitietdonhang&id=<?php echo $value['id'] ?>">Chi tiết đơn hàng</a>
                </td>

            </tr>
            <?php  } ?>
        </table>

    </div>
    <a href="index.php" class="btn btn-dark">Quay lại trang</a>
</div>
<script>
function huyBo() {
    if (confirm("Bạn có muốn hủy đơn hàng không ?")) {
        document.location = "index.php?act=lichsudathang";
        alert("Cập nhật thành công");
    } else {
        return false;
    }
}
</script>