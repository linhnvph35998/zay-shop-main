<?php
function loadAllThongKe(){
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.giatien)
    as minprice,max(sanpham.giatien) as maxprice, avg(sanpham.giatien) as avgprice from sanpham LEFT JOIN danhmuc 
    ON danhmuc.id=sanpham.iddm group by danhmuc.id order by danhmuc.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
} 
?>