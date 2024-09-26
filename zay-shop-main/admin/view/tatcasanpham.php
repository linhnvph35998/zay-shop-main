<div class="result-search">
    <div class="result-search-main">
        <h1>Tất cả sản phẩm</h1>
    </div>
    <div class="aside"></div>
    <div class="product">
        <?php foreach($listsanpham as $sanpham){
            extract($sanpham);
            $detail = "index.php?act&id=".$id;
            echo '<div class="product-item">
                <div class="product-img">
                <a href="'.$detail.'">
                     <img src="../Img/'.$img.'" alt="">
                  </a>
                    <div class="product-click">
                        <a href="'.$detail.'" class="product-click-view">
                            Xem chi tiết
                        </a>
                        <form onsubmit="" action="index.php?act=giohang" method="post" class="product-click-add">
                        <input type="hidden" name="id" value="'.$id.'"/>    
                        <input type="hidden" name="name" value="'.$name.'"/>
                        <input type="hidden" name="img" value="'.$img.'"/>
                        <input type="hidden" name="giatien" value="'.$giatien.'"/>
                        <input type="hidden" name="soluong" value="1"/>
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"/>
                        </form>
                    </div>
                </div>
                <div class="product-text">'.$name.'</div>
                <div class="product-price">'.$giatien.'đ</div>
            </div>';
        }?>
    </div>
</div>
<script>
    function addToCart(){
        alert("Thêm vào giỏ hàng thành công")
    }
</script>
