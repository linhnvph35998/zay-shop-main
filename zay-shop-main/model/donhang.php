<?php
function insertDonHang($idkhachhang,$khachhang,$diachi,$email,$sdt,$ghichu,$phuongthucthanhtoan,$tongtien) {
    $sql = "INSERT INTO donhang (idkhachhang,khachhang,diachi,email,sdt,ghichu,phuongthucthanhtoan,tongtien) VALUES ('$idkhachhang','$khachhang','$diachi
    ' ,'$email','$sdt','$ghichu','$phuongthucthanhtoan','$tongtien')";
    return pdo_execute_return_lastIsertID($sql);
}

function  insert_cart($soluong, $dongia, $thanhtien, $idsp, $idhd)
{
    $sql = "insert into chitiet_dh(so_luong,don_gia,thanh_tien,id_sp,id_hd) values('$soluong','$dongia','$thanhtien','$idsp','$idhd')";
    pdo_execute($sql);
}




?>