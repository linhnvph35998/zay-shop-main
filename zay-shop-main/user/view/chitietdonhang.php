<?php
 if(is_array($giohang)){
    extract($giohang);
}
?>
<div class="content-information">
    <div class="login">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div class="table">
        <table class="table-bordered" border="1">
            <tr>
                <td style="padding: 10px; width: 50px;">STT</td>
                <td style="padding: 10px; width: 250px;">Tên sản phẩm</td>
                <td style="padding: 10px; width: 250px;">Ảnh</td>
                <td style="padding: 10px; width: 250px;">Địa chỉ giao hàng</td>
                <td style="padding: 10px; width: 100px;">Giá tiền</td>
                <td style="padding: 10px; width: 100px;">Số lượng</td>
                <td style="padding: 10px; width: 100px;">Thành tiền</td>
            </tr>
            <?php
                foreach($giohang as $key => $value) {
                    extract($value);
                        echo '<tr>
                        <td style="padding: 10px;">'.($key + 1).'</td>
                        <td style="padding: 10px;">'.$name.'</td>
                        <td style="padding: 10px;"><img src="../Img/'.$img.'" width="200px" height="150px" style="object-fit: cover"/></td>
                        <td style="padding: 10px;">'.$diachi.'</td>
                        <td style="padding: 10px;">'.$giatien.'đ</td>
                        <td style="padding: 10px;">'.$soluong.'</td>
                        <td style="padding: 10px;">'.($giatien * $soluong).'đ</td>
                        </tr>';
                } 
             ?>
        </table>
        <h1 style="margin: 15px 0px; font-size: 24px;">Tổng giá sản phẩm: <?php 
                $tong = 0;
                foreach ($giohang as $value) { 
                extract($value);
                $tong += $giatien * $soluong;
                }
                echo $tong;
                 ?>đ</h1>
    </div>
</div>
<div class="btn btn-dark my-3 text-center" style="width: 300px; margin: auto;">
    <a style="color: #fff; text-decoration: none;" href="index.php?act=lichsudathang">Quay lại lịch sử đơn
        hàng</a>
</div>