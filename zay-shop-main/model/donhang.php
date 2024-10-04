<?php
function insertDonHang($idkhachhang,$khachhang,$diachi,$email,$sdt,$ghichu,$phuongthucthanhtoan) {
    $sql = "INSERT INTO donhang (idkhachhang,khachhang,diachi,email,sdt,ghichu,phuongthucthanhtoan) VALUES ('$idkhachhang','$khachhang','$diachi
    ' ,'$email','$sdt','$ghichu','$phuongthucthanhtoan',)";
    pdo_execute($sql);
    
}

function  insert_cart($soluong, $dongia, $thanhtien, $idsp, $idhd)
{
    $sql = "insert into chitiet_dh(so_luong,don_gia,thanh_tien,id_sp,id_hd) values('$soluong','$dongia','$thanhtien','$idsp','$idhd')";
    pdo_execute($sql);
}




?>