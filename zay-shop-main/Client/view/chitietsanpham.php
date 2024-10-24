<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
?>

<div class="wrapper ">
    <h1 style="text-align: center;">Chi tiết sản phẩm</h1>
    <div class="container">
        <div class="product-detail-img">
            <img src="../Img/<?= $img ?>" alt="1">
        </div>
        <div class="product-details">
            <h1><?= $name ?></h1>
            <h2><?= $giatien ?>đ</h2>
            <p>Mô tả: <?= $mota ?></p>
            <form action="index.php?act=giohang" method="post" class="product-click-add">
                <h3>Số lượng:
                    <div class="quantity">
                        <input type="button" id="decrease" name="giamsoluong" value="-" />
                        <input type="number" name="soluong" class="product-detail-count" value="1">
                        <input type="button" id="increase" name="tangsoluong" value="+" />
                    </div>
                </h3>
                <input type="hidden" name="id" value="<?= $id ?>" />
                <input type="hidden" name="name" value="<?= $name ?>" />
                <input type="hidden" name="img" value="<?= $img ?>" />
                <input type="hidden" name="giatien" value="<?= $giatien ?>" />
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" onclick="ThemGioHang()" />
            </form>

        </div>
    </div>
    <iframe src="./view/binhluanform.php?idpro=<?= $_GET['id'] ?>" width="100%" height="300px" frameborder="0"></iframe>
</div>
<script>
    function ThemGioHang() {
        alert("Thêm giỏ hàng thành công")
    }
</script>