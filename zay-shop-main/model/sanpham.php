<?php
    function loadAllSp(){
        $sql = "SELECT * FROM sanpham";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function topSp(){
        $sql = "SELECT * FROM sanpham ODER BY name DESC LIMIT 12";
        $topsp = pdo_query($sql);
        return $topsp;
    }

    function loadAllSpFilter($kym,$iddm){
        $sql = "SELECT * FROM sanpham where 1";
        if($kym != ""){
            $sql.= "and name like '%".$kym."%'";
        }
        if($iddm > 0){
            $sql.= "and iddm = '".$iddm."'";
        }
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function addSp($name,$giatien,$img,$mota,$iddm,$luotxem,$ngaytao,$soluong){
        $sql = "INSERT INTO sanpham VALUE(null,'$name','$giatien','$img','$mota','$iddm','$luotxem','$ngaytao','$soluong',0)";
        pdo_execute($sql);
        header("location: index.php?act=listsp");
    }
    function deletesp($id){
        $sql = "DELETE FROM sanpham WHERE id ='$id'";
        pdo_execute($sql);
    }
?>