<?php
function viewDonHang($donhang){
    $i = 0;
    $tong = 0;
     foreach ($donhang as $cart) {
        $tong += $cart['giatien'];
        $image = '../Img/'.$cart['img'].'';
        echo '<tr class="p-4">
        <td class="p-2">'.$i.'</td>
        <td class="p-2"><img src='.$image.' height="180px"/></td>
        <td class="p-2">'.$cart['sanpham'].'</td>
        <td class="p-2">'.$cart['giatien'].'đ</td>
        <td class="p-2">1</td>
        </tr>
        ';
        $i += 1;
    }
    echo "<h3>Tổng tiền: $tong</h3>";
}


function loadAllDonHang(){
    $sql = "SELECT * FROM donhang";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function loadOneDonHang($id){
    $sql = "SELECT * FROM donhang WHERE id = $id";
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function loadOneDonHangUser($id){
    $sql = "SELECT donhang.id, donhang.khachhang, donhang.diachi,
    donhang.sdt, donhang.email, donhang.thoigiandathang, donhang.phuongthucthanhtoan,
    donhang.soluong,donhang.trangthai,donhang.ghichu,donhang.idkhachhang,
    giohang.iddonhang,giohang.iduser,giohang.name,giohang.giatien FROM donhang
    LEFT JOIN giohang ON giohang.id = donhang.idkhachhang
    WHERE donhang.idkhachhang = $id";
    $donhang = pdo_query($sql);
    return $donhang;
}

function loadDonHangTrangChu($id){
    $sql = "SELECT * FROM donhang WHERE id = $id";
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function huyHang($id){
    $sql = "UPDATE donhang SET trangthai = 1 WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=donhang");
}

function xacNhanHang($id){
    $sql = "UPDATE donhang SET trangthai = 2 WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=donhang");
}


function tongDonHang(){
    $tong = 0;
    foreach($_SESSION['cart'] as $cart) {
        $tien = $cart[3] + $cart[4];
        $tong += $tien;
    }
    return $tong;
}

function insert_donhang($khachhang,$diachi,$sdt,$email,$thoigiandathang,$phuongthucthanhtoan,$soluong,$ghichu,$idkhachhang){
    $sql="INSERT INTO donhang VALUES(null,'$khachhang','$diachi','$sdt','$email','$thoigiandathang','$phuongthucthanhtoan','$soluong',0,'$ghichu','$idkhachhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function trangthai_donhang($trangthai)
{
    
    switch ($trangthai) {
        case '0':
            $stt = "Đơn hàng mới";
            break;
        case '1':
            $stt = "Đang chuẩn bị";
            break;
        case '2':
            $stt = "Đang Giao";
            break;
        case '3':
            $stt = "Hoàn tất giao hàng";
            break;
        case '4':
            $stt = "Hủy đơn hàng";
            break;
        case '5':
            $stt = "Đã nhận hàng";
            break;
    }
    return $stt;
}

function update_trangthai($id, $trangthai)
{
    $sql = "UPDATE donhang SET trangthai='$trangthai' WHERE id=$id;";
    pdo_execute($sql);
}

?>