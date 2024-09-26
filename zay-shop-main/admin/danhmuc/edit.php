<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
$image = "../img/$img";
if(is_file($image)){
    $img = "<img src='".$image."' alt=''>";
}else{
    echo"";
}
?>
<body>

<div class="wrapper">
    <div class="font-title">
        <h1>Sửa danh mục</h1>
    </div>
    <div class="form-content">
        <form action="index.php?act=editdm" method="POST" enctype="multipart/form-data">
            <div class="row-input">
                <label> Mã danh mục </label> <br>
                <input type="text" name="id" value="<?=$id?>">
            </div>
            <div class="row-input">
                <label>Tên danh mục</label> <br>
                <input type="text" name="name" value="<?=$name?>">
            </div>
            <div class="row-input">
                <label>Ảnh </label> <br>
                <img src="<?=$image?>" alt="">
                <input type="file" name="img">
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
if (confirm("Bạn có muốn hoàn tất sửa không")) {
    document.location = "index.php?act=listdm";
} else {
    return false;
}
}
</script>

<!-- END HEADER -->