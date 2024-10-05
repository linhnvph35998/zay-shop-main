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

?>