<div class="wrapper">
    <div class="admin">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <form class="filter" action="index.php?act=listsp" method="post">
        <input type="text" name="kym" />
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }?>
            <option value="'.$id.'"></option>
        </select>
        <input class="filter-search" type="submit" name="listok" value="Tìm kiếm" />
    </form>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=addsp" class="btn btn-success">Thêm sản phẩm</a>
    </div>
    <div class="table">
        <table class="table-bordered" border="1">
            <tr>
                <td style="width: 50px;">Id</td>
                <td style="width: 200px;">Tên sản phẩm</td>
                <td style="width: 100px;">Giá</td>
                <td style="width: 100px;">Ảnh</td>
                <td style="width: 250px;">Mô tả</td>
                <td style="width: 150px;">Chức năng</td>
            </tr>
            <?php foreach ($listsanpham as $sanpham){
                extract($sanpham);
                $sua = "index.php?act=editsp&id=".$id;
                $xoa = "index.php?act=deletesp&id=".$id;
                $detail = "index.php?act=chitietsp&id".$id;
            echo'<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$giatien.'đ</td>
                <td><img src="../img/'.$img.'" alt=""></td>
                <td>'.$mota.'</td>
                <td class="edit-delete">
                    <a href="'.$detail.'" class="detail">
                        Chi tiết sản phẩm
                    </a>
                    <a href="'.$sua.'" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'" onClick="return confirmDelete()" class="delete">
                        Xóa
                    </a>
            </tr>';
            } ?>
        </table>
    </div>
</div>
<script>
    function confirmDelete(){
        if(confirm("Bạn có chắc muốn xóa")){
            document.location = "index.php?act=listsp";

        }else{
            return false;
        }
    }
</script>