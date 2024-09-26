<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$image = "../img/$img";
if(is_file($image)){
    $img = "<img src='".$image."' alt=''>";
} else {
    echo "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>

<body>

    <div class="wrapper">
        <div class="font-title">
            <h1>Sửa sản phẩm</h1>
        </div>
        <div class="form-content">
            <form action="index.php?act=editsp" method="POST" enctype="multipart/form-data">
                <div class="row-input">
                    <label> Mã sản phẩm </label> <br>
                    <input type="text" name="id" value="<?=$id?>">
                </div>
                <div class="row-input">
                    <label>Tên Sản phẩm </label> <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>
                <div class="row-input">
                    <label>Giá tiền</label> <br>
                    <input type="text" name="giatien" value="<?=$giatien?>">
                </div>
                <div class="row-input">
                    <label>Ảnh </label> <br>
                    <img src="<?=$image?>" alt="">
                    <input type="file" name="img">
                </div>
                <div class="row-input">
                    <label>Mô tả </label> <br>
                    <input type="text" name="mota" value="<?=$mota?>">
                </div>
                <div class="row-input">
                    <label>Danh mục </label> <br>
                    <select name="iddm" id="">
                        <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                    if($iddm === $id){
                        echo '<option value="'.$id.'" selected>'.$name.'</option>';
                    } else {
                        echo '<option value="'.$id.'">'.$name.'</option>';

                    }
             } ?>
                    </select>
                </div>
                <div class="row-input">
                    <label>Số lượng </label> <br>
                    <input type="text" name="soluong" value="<?=$soluong?>">
                </div>
                <div class="row-input">
                    <label>Lượt xem </label> <br>
                    <input type="text" name="luotxem" value="<?=$luotxem?>">
                </div>
                <div class="row-btn">
                    <input onclick="return confirmEdit()" type="submit" name="sua" value="Sửa">
                </div>
            </form>
        </div>
    </div>
</body>
<script>
function confirmEdit() {
    if (confirm("Bạn có hoàn tất sửa không ?")) {
        document.location = "index.php?act=listsp";
    } else {
        return false;
    }
}
</script>

</html>

<!-- END HEADER -->