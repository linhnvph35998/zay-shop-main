<div class="wrapper">
    <div class="font-title">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="form-content">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row-input">
                <label> Mã sản phẩm </label> <br>
                <input type="text" name="id">
            </div>
            <div class="row-input">
                <label>Tên Sản phẩm </label> <br>
                <input type="text" name="name">
            </div>
            <div class="row-input">
                <label>Giá </label> <br>
                <input type="text" name="giatien">
            </div>
            <div class="row-input">
                <label>Ảnh </label> <br>
                <input type="file" name="img">
            </div>
            <div class="row-input">
                <label>Mô tả </label> <br>
                <input type="text" name="mota">
            </div>
            <div class="row-input">
                <label>Danh mục </label> <br>
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'" >'.$name.'</option>';

                    } ?>
                </select>
            </div>
            <div class="row-input">
                <label>Lượt xem </label> <br>
                <input type="text" name="luotxem">
            </div>
            <div class="row-input">
                <label>Số lượng </label> <br>
                <input type="text" name="soluong">
            </div>
            <div class="row-btn">
                <input onclick="return confirmAdd()" type="submit" name="them" value="Thêm">
            </div>
        </form>
    </div>
</div>
<script>
    function confirmAdd(){
        if(confirm("Bạn có chắc muốn thêm")){
            document.location ="index.php?act=listsp";
        }else{
            return false;
        }
    }
</script>
<!-- END HEADER -->