<?php
if(is_array($taikhoan)){
    extract($taikhoan);
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
            <h1>Sửa khách hàng</h1>
        </div>
        <div class="form-content">
            <form action="index.php?act=edittk" method="POST">
                <div class="row-input">
                    <label> Mã khách hàng </label> <br>
                    <input type="text" name="id" value="<?=$id?>">
                </div>
                <div class="row-input">

                    <label> Email</label> <br>
                    <input type="text" name="email" value="<?=$email?>">
                </div>
                <div class="row-input">
                    <label>Địa chỉ </label> <br>
                    <input type="text" name="diachi" value="<?=$diachi?>">
                </div>
                <div class="row-input">
                    <label>SĐT </label> <br>
                    <input type="text" name="sdt" value="<?=$sdt?>">
                </div>
                <div class="row-input">
                    <label>Vai trò </label> <br>
                    <select name="idvaitro" id="">
                        <?php  foreach ($vaitro as $vt) {
                        extract($vt);
                    if($id === $idvaitro){
                        echo '<option value="'.$id.'" selected>'.$tenvaitro.'</option>';
                    } else {
                        echo '<option value="'.$id.'">'.$tenvaitro.'</option>';
                    }
                }
                    ?>
                    </select>
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
        document.location = "index.php?act=listtk";
    } else {
        return false;
    }
}
</script>

</html>

<!-- END HEADER -->