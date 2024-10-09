<?php
function insert_cmt($noidung,$idpro, $iduser,  $date)
{
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) 
    values('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}
// function load_cmt_sp()
// {
//     $sql ="select * from binhluan order by id desc";
//     $result = pdo_query($sql);
//     return $result;
// }
function load_cmt_sp($id_sp)
{
    $sql ="SELECT binhluan.*,khachhang.username as namekh,sanpham.name as name FROM binhluan
    JOIN khachhang on binhluan.iduser=khachhang.id
    JOIN sanpham on binhluan.idpro=sanpham.id
    where sanpham.id = $id_sp 
    order by binhluan.id desc";
    $result = pdo_query($sql);
    return $result;
}