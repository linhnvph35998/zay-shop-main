<?php
function loadAllTrangThaiDonHang()
{
    $sql = "SELECT * FROM trangthaidonhang";
    $listtrangthaidonhang = pdo_query($sql);
    return $listtrangthaidonhang;
}
