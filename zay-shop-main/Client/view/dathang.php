<?php
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
<div class="pay">
    <div class="pay-form">
        <form action="" method="POST">
            <div class="pay-label">
                <label for="card-number">Tên tài khoản</label>
                <input type="text" name="khachhang" value="<?=$name?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Địa chỉ</label>
                <input type="text" name="diachi" value="<?=$diachi?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Email</label>
                <input type="text" name="email" value="<?=$email?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Số điện thoại</label>
                <input type="text" name="sdt" value="<?=$sdt?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Ghi chú</label>
                <input type="text" name="ghichu" value="">
            </div>
            <div class="pay-label">
                <label for="card-number">Hình thức thanh toán</label>
                <div class="payment_methods">
                    <div class="payment_method">
                        <input value="0" name="phuongthucthanhtoan" type="radio" checked>
                        <label>Chuyển khoản trực tiếp</label>
                    </div>
                    <div class="payment_method">
                        <input value="1" name="phuongthucthanhtoan" type="radio">
                        <label>Thanh toán khi nhận hàng</label>
                    </div>
                </div>
            </div>
            <input onclick="return datHang()" class="confirm-pay" type="submit" name="dongydathang" value="Đặt hàng">
        </form>
        <div class="bill">
            <h1>Thông tin giỏ hàng</h1>
            <div class="product-bill-item">
                <div class="product-bill-item-list">
                    <?php
                    foreach ($_SESSION['mycart'] as $cart) {
                        $image = '../Img/'.$cart[2].'';
                        echo '<div class="product-bill-media">
                   <div class="product-bill-media-text">
                       <div class="product-bill-media-text-img"><img src="'.$image.'" alt="">
                           <p>'.$cart[1].' <span>x'.$cart[5].'</span></p>
                       </div>
                       <b>'.$cart[4].'đ</b>
                   </div>
               </div>';
                    } 
                   ?>
                </div>
                <div class="product-bill-item-total">
                    <div class="product-bill-item-total-name">
                        <p>Thành tiền </p>
                    </div>
                    <div class="product-bill-item-total-name">
                        <b><?php 
                        $tong = 0;
                        foreach ($_SESSION['mycart'] as $cart) { 
                        $tong += $cart[4];
                        }
                        echo $tong;
                         ?>đ</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function datHang() {
    if (confirm("Bạn có muốn đặt hàng không ?")) {
        alert("Đặt hàng thành công")
    } else {
        return false;
    }
}
</script>