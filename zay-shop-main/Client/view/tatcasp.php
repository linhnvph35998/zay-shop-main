<div class="result-search">
    <div class="result-search-main">
        <h1>Tất cả sản phẩm</h1>
    </div>
    <div class="aside"></div>
    <div class="product">
        <div class="product-item">
            <div class="product-img">
                <a href="">
                    <img src="" alt="">
                </a>
                <div class="product-click">
                    <a href="" class="product-click-view">
                        Xem chi tiết
                    </a>
                    <form action="index.php?act=giohang" method="post" class="product-click-add">
                        <input type="hidden" name="id" value="'.$id.'" />
                        <input type="hidden" name="name" value="'.$name.'" />
                        <input type="hidden" name="img" value="'.$img.'" />
                        <input type="hidden" name="giatien" value="'.$giatien.'" />
                        <input type="hidden" name="soluong" value="1" />
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" />
                    </form>
                </div>
            </div>
            <div class="product-text"></div>
            <div class="product-price"></div>
        </div>;
    </div>
</div>