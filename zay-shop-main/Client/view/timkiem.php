<div class="result-search">
    <div class="result-search-main">
        <h1>Kết quả tìm kiếm <?=$kym?></h1>
    </div>
    <div class="aside"></div>
    <div class="product">
        <div class="product-item">
        <div class="product-img">
                <img src="" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="">Xem chi tiết</a>
                    </div>
                    <form action="index.php?act=giohang" method="post" class="product-click-add">
                             <input type="hidden" name="id" value=""/>    
                             <input type="hidden" name="name" value=""/>
                             <input type="hidden" name="img" value=""/>
                             <input type="hidden" name="giatien" value=""/>
                             <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"/>
                             </form>
                </div>
            </div>
            <div class="product-text"></div>
            <div class="product-price"></div>
        </div>
    </div>
</div>