<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="admin">

            <h1>Đơn hàng</h1>
        </div>
        <form class="filter" action="index.php?act=listsp" method="post">
            <input type="text" name="kym" placeholder="Tìm kiếm đơn hàng" />
            <input class="filter-search" type="submit" name="listok" value="Lọc đơn hàng" />
        </form>
        <div class="table">
            <table class="table-bordered" border="1">
                <tr>
                    <td style="width: 50px;">Mã đơn</td>
                    <td style="width: 200px;">Khách hàng</td>
                    <td style="width: 200px;">Email</td>
                    <td style="width: 100px;">SĐT</td>
                    <td style="width: 200px;">Địa chỉ giao hàng</td>
                    <td style="width: 100px;">Thời gian đặt hàng</td>
                    <td style="width: 200px;">Trạng thái</td>
                    <td style="width: 200px;">Ghi chú</td>
                    <td style="width: 200px;">Chức năng</td>
                </tr>
                <?php foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    $trangthai = isset($donhang['trangthai']) ? $donhang['trangthai'] : '';
                    $ttdh = trangthai_donhang($trangthai);
                    $linkupdate = "index.php?act=sua_trangthai&id=" . $id;
                    $huyhang = "index.php?act=huydonhang&id=" . $id;
                    $xacnhanhang = "index.php?act=xacnhandonhang&id=" . $id;
                    $detail = "index.php?act=chitietdonhang&id=" . $id;
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $khachhang ?></td>
                        <td><?= $email ?></td>
                        <td><?= $sdt ?></td>
                        <td><?= $diachi ?></td>
                        <td><?= $thoigiandathang ?></td>
                        <td><?= $ttdh ?></td>
                        <td><?= $ghichu ?></td>
                        <td class="edit-delete">
                            <a href="<?= $detail ?>" class="detail">
                                Chi tiết đơn hàng
                            </a>
                            <?php
                            if (isset($donhang['trangthai']) && $donhang['trangthai'] != 2 && $donhang['trangthai'] != 3 && $donhang['trangthai'] != 4 && $donhang['trangthai'] != 5) {
                            ?>
                                <a href="<?= $huyhang ?>" onclick="return xacNhanHuy()" class="delete">
                                    Hủy giao hàng
                                </a>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($donhang['trangthai']) && $donhang['trangthai'] != 1 && $donhang['trangthai'] != 2 && $donhang['trangthai'] != 3 && $donhang['trangthai'] != 4 && $donhang['trangthai'] != 5) {
                            ?>
                                <a href="<?= $xacnhanhang ?>" onclick="return xacNhan()" class="success">
                                    Xác nhận hàng
                                </a>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($donhang['trangthai']) && $donhang['trangthai'] != 4 && $donhang['trangthai'] != 5) {
                            ?>
                                <a href="<?= $linkupdate ?>" class="btn btn-primary w-100" style="margin: 0 0px;">
                                    <i class="bi bi-pencil-fill"></i>
                                    Sửa
                                </a>
                            <?php
                            }
                            ?>


                    </tr>

                <?php
                } ?>

            </table>

        </div>
    </div>

</body>
<script>
    function xacNhanHuy() {
        if (confirm("Bạn có muốn hủy hàng không ?")) {
            document.location = "index.php?act=donhang";
            alert("Hủy bỏ thành công");
        } else {
            return false;
        }
    }

    function xacNhan() {
        if (confirm("Bạn có muốn xác nhận hàng không ?")) {
            document.location = "index.php?act=donhang";
            alert("Xác nhận thành công");
        } else {
            return false;
        }
    }
</script>

</html>