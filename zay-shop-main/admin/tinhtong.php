<?php
    function tinhtong(){
        $sql = "SELECT Count(*) AS total FROM sanpham ";
        $tongsp = pdo_query($sql);
        return $tongsp;
    }

    function tinhtongdm(){
        $sql = "SELECT Count(*) AS total FROM danhmuc";
        $tongdm = pdo_query($sql);
        return $tongdm;
    }

?>