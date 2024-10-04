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
            <input class="confirm-pay" type="submit" name="dongydathang" value="Đặt hàng">
        </form>
        <div class="bill">
            <h1>Thông tin giỏ hàng</h1>
            <div class="product-bill-item">
                <div class="product-bill-item-list">
                    <div class="product-bill-media">
                   <div class="product-bill-media-text">
                       <div class="product-bill-media-text-img"><img src="'.$image.'" alt="">
                           <p><span></span></p>
                       </div>
                       <b></b>
                   </div>
               </div>
                </div>
                <div class="product-bill-item-total">
                    <div class="product-bill-item-total-name">
                        <p>Thành tiền </p>
                    </div>
                    <div class="product-bill-item-total-name">
                        <b>đ</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

