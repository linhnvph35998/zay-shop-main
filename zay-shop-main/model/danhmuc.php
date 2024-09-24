<?php
function loadOneDm($id){
    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}

function editDm($id,$name){
    $sql = "UPDATE danhmuc set name='$name' WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listdm");
}

function addDm($name,$img){
    $sql = "INSERT INTO danhmuc VALUES(null,'$name','$img')";
    pdo_execute($sql);
    header("location: index.php?act=listdm");
}

function deleteDm($id){
    $sql = "DELETE FROM danhmuc WHERE id ='$id'";
    pdo_execute($sql);    
}

function loadDm($iddm){
    if($iddm > 0){
        $sql = "SELECT * FROM danhmuc WHERE id='$iddm'";
        $sp = pdo_query_one($sql);
        extract($dm);
        return $sp;
    } else {
        return "";
    }
}
?>