<?php
function loadAllDm(){
    $sql = "SELECT * FROM danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadAllSpFilter($kym,$iddm){
    $sql = "SELECT * FROM sanpham where 1";
    if($kym != ""){
       $sql.= " and name like '%".$kym."%'"; 
    }
    if($iddm > 0){
        $sql.= " and iddm ='".$iddm."'"; 
    }
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAllSp(){
    $sql = "SELECT * FROM sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function topSp(){
    $sql = "SELECT * FROM sanpham ORDER BY name DESC LIMIT 12";
    $topsp = pdo_query($sql);
    return $topsp;
}

function spKhac(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 4";
    $topsp = pdo_query($sql);
    return $topsp;
}

function loadOneSp($id){
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function editSp($id,$name,$giatien,$img,$mota,$iddm,$luotxem,$soluong){
    $sql = "UPDATE sanpham set name='$name',giatien='$giatien',img='$img',mota='$mota',iddm='$iddm',luotxem='$luotxem',soluong='$soluong' WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listsp");
}

function addSp($name,$giatien,$img,$mota,$iddm,$luotxem,$ngaytao,$soluong){
    $sql = "INSERT INTO sanpham VALUES(null,'$name','$giatien','$img','$mota','$iddm','$luotxem','$ngaytao','$soluong',0)";
    pdo_execute($sql);
    header("location: index.php?act=listsp");   
}

function deleteSp($id){
    $sql = "DELETE FROM sanpham WHERE id ='$id'";
    pdo_execute($sql);    
}
?>