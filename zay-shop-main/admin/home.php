<body>

    <div class="wrapper">
        <div class="admin">
            <h1>Trang quản lý Admin</h1>
        </div>
        <div class="row-box">
            <div class="small-box">
                <div class="inner">
                    <h3><?php foreach ($tongsp as $sp) {
                extract($sp);
                echo $total;
           } ?></h3>
                    <p>Sản phẩm</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div class="small-box">
                <div class="inner">
                    <h3> <?php foreach ($tongdm as $dm) {
                extract($dm);
                echo $total;
           } ?></h3>
                    <p>Danh mục</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-signal"></i>
                </div>

            </div>
            <div class="small-box">
                <div class="inner">
                    <h3><?php foreach ($tongkhachhang as $khachhang) {
                extract($khachhang);
                echo $total;
           } ?></h3>
                    <p>Người dùng đã đăng ký</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user-plus"></i>
                </div>

            </div>
            <div class="small-box">
                <div class="inner">
                    <h3><?php foreach ($tongbl as $bl) {
                extract($bl);
                echo $total;
                }?></h3>
                    <p>Lượt bình luận</p>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                </div>
            </div>
        </div>
        <div class="view-all">
            <h1>Tổng quan</h1>
        </div>
        <div class="table">
            <table class="table-bordered" border="1">
                <tr>
                    <td style="width: 50px">Id</td>
                    <td style="width: 200px">Tên sản phẩm</td>
                    <td style="width: 100px">Giá</td>
                    <td style="width: 200px">Ảnh</td>
                    <td style="width: 400px">Mô tả</td>
                    <td style="width: 150px">Chức năng</td>
                </tr>
                <?php foreach ($listsanpham as $sanpham) { 
                    extract($sanpham);
                    $sua = "index.php?act=editsp&id=".$id;
                    $xoa = "index.php?act=deletesp&id=".$id;
                    $detail = "index.php?act=chitietsp&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$giatien.'đ</td>
                <td><img src="../Img/'.$img.'" alt=""></td>
                <td>'.$mota.'</td>
                <td class="edit-delete">
                <a href="'.$detail.'" class="detail">
                        Chi tiết sản phẩm
                    </a>
                    <a href="'.$sua.'" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'" onclick="return confirmDelete()" class="delete">
                        Xóa
                    </a>
            </tr>';
             } ?>
            </table>
        </div>
    </div>
</body>